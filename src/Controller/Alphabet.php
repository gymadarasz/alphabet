<?php declare(strict_types = 1);

/**
 * PHP version 7.4
 *
 * @category  PHP
 * @package   GyMadarasz\Alphabet\Controller
 * @author    Gyula Madarasz <gyula.madarasz@gmail.com>
 * @copyright 2020 Gyula Madarasz
 * @license   Copyright (c) all right reserved.
 * @link      this
 */

namespace GyMadarasz\Alphabet\Controller;

use GyMadarasz\WebApp\Service\Template;
use GyMadarasz\WebApp\Service\Globals;

// TODO: matrix encoder
// see: https://www.theproblemsite.com/reference/mathematics/codes/matrix-code

/**
 * AlphabetTest
 *
 * @category  PHP
 * @package   GyMadarasz\Alphabet\Test
 * @author    Gyula Madarasz <gyula.madarasz@gmail.com>
 * @copyright 2020 Gyula Madarasz
 * @license   Copyright (c) all right reserved.
 * @link      this
 */
class Alphabet
{
    /**
     * Method alphabet
     *
     * @param Template $template template
     * @param Globals  $globals  globals
     *
     * @return Template
     */
    public function alphabet(Template $template, Globals $globals): Template
    {
        $letters = str_split(' ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $text = strtoupper((string)$globals->getGet('text'));
        if ($text) {
            return $this->processText($template, $text, $letters);
        }
        $alphabet = strtoupper((string)$globals->getGet('alphabet'));
        $matches = [];
        if ($alphabet && preg_match_all(
            '/\b([1-2]{0,1}[0-9]\/)*[1-2]{0,1}[0-9]\b/',
            $alphabet,
            $matches
        )
        ) {
            $text = $alphabet;
            $replaces = [];
            foreach ($matches[0] ?? [] as $match) {
                $splits = explode('/', $match);
                foreach ($splits as &$split) {
                    $split = $letters[$split] ?? $split;
                }
                $repl = implode('', $splits);
                $replaces[] = [$match, $repl];
            }
            for ($i = 1; $i < \count($replaces); $i++) {
                $iOne = $i-1;
                if (strlen($replaces[$iOne][0]) < strlen($replaces[$i][0])) {
                    $tmp = $replaces[$i];
                    $replaces[$i] = $replaces[$iOne];
                    $replaces[$iOne] = $tmp;
                    $i=0;
                }
            }
            foreach ($replaces as $replace) {
                $text = str_replace($replace[0], $replace[1], $text);
            }
        }
        $alphabet = '';
        return $this->getOutput($template, $text, $alphabet);
    }
    
    /**
     * Method processText
     *
     * @param Template $template template
     * @param string   $text     text
     * @param string[] $letters  letters
     *
     * @return Template
     */
    protected function processText(
        Template $template,
        string $text,
        array $letters
    ): Template {
        $alphabet = '';
        foreach (str_split($text) as $inp) {
            $found = -1;
            foreach ($letters as $key => $letter) {
                if ($letter === $inp) {
                    $found = $key;
                    break;
                }
            }
            if ($found > 0) {
                $alphabet .= ($alphabet &&
                            is_numeric($alphabet[strlen($alphabet)-1]) ? '/' : '')
                            . $found;
                continue;
            }
            $alphabet .= $inp;
        }
        $text = '';
        return $this->getOutput($template, $text, $alphabet);
    }
    
    /**
     * Method getOutput
     *
     * @param Template $template template
     * @param string   $text     text
     * @param string   $alphabet alphabet
     *
     * @return Template
     */
    protected function getOutput(
        Template $template,
        string $text,
        string $alphabet
    ): Template {
        return $template->create(
            'index.html',
            [
            'body' => 'alphabet.html',
            'text' => $text,
            'alphabet' => $alphabet,
            ]
        );
    }
}
