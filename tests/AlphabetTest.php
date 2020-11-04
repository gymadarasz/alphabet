<?php declare(strict_types = 1);

namespace GyMadarasz\Alphabet\Test;

use GyMadarasz\Test\AppTest;
use GyMadarasz\Test\Tester;

class AlphabetTest extends AppTest
{
    public function test(): void
    {
        $contents = $this->httpGet('');
        $contents = $this->httpGet('?text=' . urlencode('Hello :)'));
        $this->tester->assertContains('8/5/12/12/15 :)', $contents);

        $contents1 = $this->httpGet('?text=Hello%2C+how+are+you%3F+Please+use+punctuation+in+this+long+text+like+this+%3A%29');
        $contents2 = $this->httpGet('?text=HELLO%2C+HOW+ARE+YOU%3F+PLEASE+USE+PUNCTUATION+IN+THIS+LONG+TEXT+LIKE+THIS+%3A%29');
        $contents3 = $this->httpGet('?alphabet=8%2F5%2F12%2F12%2F15%2C+8%2F15%2F23+1%2F18%2F5+25%2F15%2F21%3F+16%2F12%2F5%2F1%2F19%2F5+21%2F19%2F5+16%2F21%2F14%2F3%2F20%2F21%2F1%2F20%2F9%2F15%2F14+9%2F14+20%2F8%2F9%2F19+12%2F15%2F14%2F7+20%2F5%2F24%2F20+12%2F9%2F11%2F5+20%2F8%2F9%2F19+%3A%29');
        
        $this->tester->assertEquals($contents1, $contents2);
        $this->tester->assertEquals($contents1, $contents3);


        $contents = $this->httpGet('?alphabet=9+12%2F15%2F22%2F5+25%2F15%2F21+20%2F15%2F15');
        $this->tester->assertContains('I LOVE YOU TOO', $contents);
    }
}
