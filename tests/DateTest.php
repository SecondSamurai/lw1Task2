<?php
require_once "src/lw1Task2.php";

use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{

    protected function setUp(): void
    {
        $this->date1 = new Date(23, 12, 2022);
        $this->date2 = new Date(24, 12, 2022);
    }

    public function testDateFormatRus()
    {
        $this->assertEquals($this->date1->dateFormat("ru"), "23.12.2022\n");
    }

    public function testDateFormatEn()
    {
        $this->assertEquals($this->date2->dateFormat("en"), "2022-12-24\n"); 
    }

    public function testdayOfTheWeek()
    {
        $this->assertEquals($this->date1->dayOfTheWeek(), " в этoт день была пятница");
    }
}

