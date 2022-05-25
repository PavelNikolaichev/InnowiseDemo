<?php

namespace src;

class Task6
{
    final public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if ($year > $lastYear) {
            throw new \InvalidArgumentException('Year must be lower than last year');
        }
        if ($year < 0) {
            throw new \InvalidArgumentException('Year must be positive');
        }
        if ($lastYear < 0) {
            throw new \InvalidArgumentException('Last year must be positive');
        }


        $startdate = strtotime($year . '-' . $month . '-' . '01');
        $enddate = strtotime($lastYear . '-' . $lastMonth . '-' . '01');

        return count($this->findMondays($day, $startdate, $enddate));
    }

    private function findMondays(string $day, ?int $startdate, ?int $enddate, array $dates = []): array
    {
        if ($startdate > $enddate) {
            return $dates;
        }

        if (date('l', $startdate) === $day) {
            $dates[] = date('d.m.Y', $startdate);

            return $this->findMondays($day, strtotime('+1 month', $startdate), $enddate, $dates);
        }

        return $this->findMondays($day, strtotime('+1 month', $startdate), $enddate, $dates);
    }
}
