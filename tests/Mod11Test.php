<?php

class Mod11Test extends \PHPUnit\Framework\TestCase
{
    /**
     * https://about.usps.com/publications/pub97/pub97_j_020.htm
     */
    public function testCalculatesCorrectly1()
    {
        $test_value = '12345678';
        $checksum = \Mod11\Mod11::calculate($test_value, [8, 6, 4, 2, 3, 5, 9, 7]);
        $this->assertEquals(5, $checksum);
    }

    /**
     * http://www.activebarcode.com/codes/checkdigit/modulo11.html
     */
    public function testCalculatesCorrectly2()
    {
        $test_value = '392844404';
        $checksum = \Mod11\Mod11::calculate($test_value, [10, 9, 8, 7, 6, 5, 4, 3, 2]);
        $this->assertEquals(2, $checksum);
    }

    /**
     * http://www.pgrocer.net/Cis51/mod11.html
     */
    public function testCalculatesCorrectly3()
    {
        $test_value = '036532';
        $checksum = \Mod11\Mod11::calculate($test_value, [7, 6, 5, 4, 3, 2]);
        $this->assertEquals(7, $checksum);
    }

    /**
     * http://www.loc.gov/issn/check.html
     */
    public function testCalculatesCorrectly4()
    {
        $test_value = '0317847';
        $checksum = \Mod11\Mod11::calculate($test_value, [8, 7, 6, 5, 4, 3, 2]);
        $this->assertEquals(1, $checksum);
    }
}
