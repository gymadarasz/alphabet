<?php declare(strict_types = 1);

/**
 * PHP version 7.4
 *
 * @category  PHP
 * @package   GyMadarasz\Alphabet\Test
 * @author    Gyula Madarasz <gyula.madarasz@gmail.com>
 * @copyright 2020 Gyula Madarasz
 * @license   Copyright (c) all right reserved.
 * @link      this
 */

namespace GyMadarasz\Alphabet\Test;

use GyMadarasz\Test\Tester;

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
class AlphabetTest
{
    protected Tester $tester;
    
    /**
     * Method __construct
     *
     * @param Tester $tester tester
     */
    public function __construct(Tester $tester)
    {
        $this->tester = $tester;
    }
    
    /**
     * Method test
     *
     * @return void
     */
    public function test(): void
    {
        $contents = $this->tester->get('');
        $contents = $this->tester->get('?text=' . urlencode('Hello :)'));
        $this->tester->getAssertor()->assertContains('8/5/12/12/15 :)', $contents);

        $contents1 = $this->tester->get(
            '?text=Hello%2C+how+are+you%3F+Please+use+punctuation+in+this+long+text+'
                . 'like+this+%3A%29'
        );
        $contents2 = $this->tester->get(
            '?text=HELLO%2C+HOW+ARE+YOU%3F+PLEASE+USE+PUNCTUATION+IN+THIS+LONG+TEXT+'
                . 'LIKE+THIS+%3A%29'
        );
        $contents3 = $this->tester->get(
            '?alphabet=8%2F5%2F12%2F12%2F15%2C+8%2F15%2F23+1%2F18%2F5+25%2F15%2F21%3'
                . 'F+16%2F12%2F5%2F1%2F19%2F5+21%2F19%2F5+16%2F21%2F14%2F3%2F20%2F21'
                . '%2F1%2F20%2F9%2F15%2F14+9%2F14+20%2F8%2F9%2F19+12%2F15%2F14%2F7+2'
                . '0%2F5%2F24%2F20+12%2F9%2F11%2F5+20%2F8%2F9%2F19+%3A%29'
        );
        
        $this->tester->getAssertor()->assertEquals($contents1, $contents2);
        $this->tester->getAssertor()->assertNotEquals($contents1, $contents3);
        $this->tester->getAssertor()->assertContains(
            '8/5/12/12/15, 8/15/23 1/18/5 25/15/21? 16/12/5/1/19/5 21/19/5 16/21/14/'
                . '3/20/21/1/20/9/15/14 9/14 20/8/9/19 12/15/14/7 20/5/24/20 12/9/11'
                . '/5 20/8/9/19 :)',
            $contents2
        );
        $this->tester->getAssertor()->assertContains(
            'HELLO, HOW ARE YOU? PLEASE USE PUNCTUATION IN THIS LONG TEXT LIKE THIS '
                . ':)',
            $contents3
        );


        $contents = $this->tester->get(
            '?alphabet=9+12%2F15%2F22%2F5+25%2F15%2F21+20%2F15%2F15'
        );
        $this->tester->getAssertor()->assertContains('I LOVE YOU TOO', $contents);

        $contents = $this->tester->get(
            '?alphabet=9+10%2F21%2F19%2F20+23%2F1%2F14%2F20%2F5%2F4+25%2F15%2F21+20%'
                . '2F15+11%2F14%2F15%2F23+20%2F8%2F1%2F20+9+1%2F13+7%2F12%2F1%2F4+20'
                . '%2F8%2F1%2F20+9+13%2F5%2F20+1+16%2F5%2F18%2F19%2F15%2F14+12%2F9%2'
                . 'F11%2F5+25%2F15%2F21'
        );
        $this->tester->getAssertor()->assertContains(
            'I JUST WANTED YOU TO KNOW THAT I AM GLAD THAT I MET A PERSON LIKE YOU',
            $contents
        );

        $contents = $this->tester->get(
            '?alphabet=9+1%2F13+7%2F15%2F15%2F4%2C+20%2F8%2F1%2F14%2F11+25%2F15%2F21'
                . '+%3A%29+8%2F15%2F23+23%2F1%2F19+25%2F15%2F21%2F18+19%2F12%2F5%2F5'
                . '%2F16%3F'
        );
        $this->tester->getAssertor()->assertContains(
            'I AM GOOD, THANK YOU :) HOW WAS YOUR SLEEP?',
            $contents
        );
    }
}
