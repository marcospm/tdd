<?php

class FizzBuzz
{
    public function get($number)
    {
        if ($number % 3 == 0)
        {
            return 'Fizz';
        }
        elseif ($number % 5 == 0)
        {
            return 'Buzz';
        }

        return $number;
    }

    public function upTo($number)
    {
        $list = [];
        foreach (range(1, $number) as $i) {
            $list[] = $this->get($i);
        }

        return implode(',', $list);
    }
}
