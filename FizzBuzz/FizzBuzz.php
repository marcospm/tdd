<?php

class FizzBuzz
{
    public function get($number)
    {
        $result = null;

        if ($number % 3 == 0)
        {
            $result = 'Fizz';
        }

        if ($number % 5 == 0)
        {
            $result .= 'Buzz';
        }

        if (!$result) {
            $result = $number;
        }

        return $result;
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
