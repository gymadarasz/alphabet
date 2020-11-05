<?php declare(strict_types = 1);

namespace GyMadarasz\Alphabet\Controller;

use GyMadarasz\WebApp\Service\Template;
use GyMadarasz\WebApp\Service\Globals;

// TODO: matrix encoder see: https://www.theproblemsite.com/reference/mathematics/codes/matrix-code
class Alphabet
{
    public function alphabet(Template $template, Globals $globals): Template
    {
        $alphabet = '';
        $letters = str_split(' ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $text = strtoupper((string)$globals->getGet('text'));
        if ($text) {
            foreach (str_split($text) as $inp) {
                $found = -1;
                foreach ($letters as $key => $letter) {
                    if ($letter === $inp) {
                        $found = $key;
                        break;
                    }
                }
                if ($found > 0) {
                    $alphabet .= ($alphabet && is_numeric($alphabet[strlen($alphabet)-1]) ? '/' : '') . $found;
                } else {
                    $alphabet .= $inp;
                }
            }
            $text = '';
        } else {
            $alphabet = strtoupper((string)$globals->getGet('alphabet'));
            if ($alphabet && preg_match_all('/\b([1-2]{0,1}[0-9]\/)*[1-2]{0,1}[0-9]\b/', $alphabet, $matches)) {
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
                for ($i = 1; $i < count($replaces); $i++) {
                    $i1 = $i-1;
                    if (strlen($replaces[$i1][0]) < strlen($replaces[$i][0])) {
                        $tmp = $replaces[$i];
                        $replaces[$i] = $replaces[$i1];
                        $replaces[$i1] = $tmp;
                        $i=0;
                    }
                }
                foreach ($replaces as $replace) {
                    $text = str_replace($replace[0], $replace[1], $text);
                }
            }
            $alphabet = '';
        }
        return $template->create('index.html.php', [
            'body' => 'alphabet.html.php',
            'text' => $text,
            'alphabet' => $alphabet,
        ]);
    }
}
