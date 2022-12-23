<?php

class Date
{

    public int $day;
    public int $month;
    public int $year;

    public function __construct(int $day, int $month, int $year)
    {

        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function dateFormat(string $format): string
    {

        if ($format === "ru")
            return "{$this->day}.{$this->month}.{$this->year}\n";

        if ($format === "en")
            return "{$this->year}-{$this->month}-{$this->day}\n";
    }

    public function dayOfTheWeek(): string
    {

        $dataDate = ("$this->year-$this->month-$this->day");
        $time = new DateTime($dataDate);
        $date = (int)$time->format('w');

        echo $dataDate = ("$this->day.$this->month.$this->year");

        if ($date === 1)
            return " в этoт день был понедельник";

        if ($date === 2)
            return " в этoт день был вторник";

        if ($date === 3)
            return " в этoт день была среда";

        if ($date === 4)
            return " в этoт день был четверг";

        if ($date === 5)
            return " в этoт день была пятница";

        if ($date === 6)
            return " в этoт день была суббота";

        if ($date === 7)
            return " в этoт день было воскресенье";
    }

    public function minusDay($minusDay)
    {
        for($i = 0;$i < $minusDay; $i++)
        {
            $this->day -= 1;
            if($this->day < 1){
                $this->day = 31;
                $this->month -= 1;
                if($this->month < 1){
                    $this->month = 12;
                    $this->year -= 1;
                }
            }
        }
        return "{$this->day}.{$this->month}.{$this->year}";
    }
}

$date = new Date(24, 12, 2022);
echo $date->dayOfTheWeek();
echo $date->dateFormat("ru");
echo $date->dateFormat("en");