<?php

//This is a code I wrote to convert Roman Numerals to Integers from 1-3999

class RomanConverter
{
    function romanToInt ($rom): int
    {
        $map = ["I"=>1,"V"=>5,"X"=>10,
                "L"=>50,"C"=>100,"D"=>500,"M"=>1000];
        $result = 0;
        $noOfRomanLetters = strlen($rom);
        for ($i = 0; $i < $noOfRomanLetters; $i++) { 
            $cl = $rom[$i];                             //current letter
            $vcl = $map[$cl];                           //integer value of current letter
            $nl = ($rom[$i+1]) ? $rom[$i+1] : null;     //next letter if there is
            $vnl = ($nl) ? $map[$nl] : null;            //integer value of next letter if there is
            if ($vcl < $vnl) {
                $val = $vnl - $vcl;
                $i++;
            } else {
                $val = $vcl;
            }
            $result = $result + $val;
        }
        
        return $result;
    }
}

$rom = ($_POST["roman"]);
$converter = new RomanConverter();
$number = $converter->romanToInt("$rom");
$data = print_r($number);
return $data;
