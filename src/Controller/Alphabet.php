<?php declare(strict_types = 1);

namespace GyMadarasz\Alphabet\Controller;

use GyMadarasz\WebApp\Service\Template;
use GyMadarasz\WebApp\Service\Globals;

// TODO: matrix encoder see: https://www.theproblemsite.com/reference/mathematics/codes/matrix-code
class Alphabet
{
    public function alphabet(Template $template, Globals $globals): Template
    {
        $alphabet = "";
        $letters = str_split(" ABCDEFGHIJKLMNOPQRSTUVWXYZ");
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
        } else {
            $alphabet = strtoupper((string)$globals->getGet('alphabet'));
            if ($alphabet && preg_match_all('/\b([1-2]{0,1}[0-9]\/)*[1-2]{0,1}[0-9]\b/', $alphabet, $matches)) {
                $text = $alphabet;
                foreach ($matches[0] ?? [] as $match) {
                    $splits = explode('/', $match);
                    foreach ($splits as &$split) {
                        $split = $letters[$split] ?? $split;
                    }
                    $repl = implode('', $splits);
                    $text = str_replace($match, $repl, $text);
                }
            }
        }
        return $template->create('index.html.php', [
            'body' => 'alphabet.html.php',
            'text' => $text,
            'alphabet' => $alphabet,
        ]);
    }
}
