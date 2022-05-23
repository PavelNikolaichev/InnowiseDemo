<?php

namespace src;

class Task6
{
    final public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $startdate = strtotime($year . '-' . $month . '-' . '01');
        $enddate = strtotime($lastYear . '-' . $lastMonth . '-' . '01');
        $dates = $this->findMondays($day, $startdate, $enddate);

        echo count($dates) . '<br>';

        $this->printArray($dates);

        return count($dates);
    }

    private function findMondays(string $day, ?int $startdate, ?int $enddate, array $dates = []): array
    {
        if($startdate > $enddate)
        {
            return $dates;
        }

        if (date('l', $startdate) === $day) {
            $dates[] = date('d.m.Y', $startdate);
            return $this->findMondays($day, strtotime("+1 month", $startdate), $enddate, $dates);
        }
        return $this->findMondays($day, strtotime("+1 month", $startdate), $enddate, $dates);
    }


    /**
     * @param array $dates
     * @return void
     */
    private function printArray(array $dates): void
    {
        foreach ($dates as $date) {
            echo $date . '<br>';
        }
    }
}