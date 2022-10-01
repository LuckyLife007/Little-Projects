<?php

//This is a code I wrote to convert integers from 1-3999 to Roman Numerals

class IntegerConverter
{
    function intToRoman ($num) : string
    {
        $tho = (int) ($num / 1000);
        $hrem = $num % 1000;
        $hun = (int) ($hrem / 100);
        $trem = $num % 100;
        $ten = (int) ($trem / 10);
        $uni = $num % 10;

        $romstr = str_repeat("M", $tho);

        $values = [$hun, $ten, $uni];
        $options = array(["C", "D", "M"], ["X", "L", "C"], ["I", "V", "X"]);

        foreach ($values as $i => $val) {
            switch ($val) {
                case ($val > 0 && $val < 4):
                    $valstr = str_repeat($options[$i][0], $val);
                    break;
                case ($val > 4 && $val < 9):
                    $valstr = $options[$i][1] . str_repeat($options[$i][0], $val - 5);
                    break;
                case ($val == 4):
                    $valstr = $options[$i][0] . $options[$i][1];
                    break;
                case ($val == 9):
                    $valstr = $options[$i][0] . $options[$i][2];
                    break;
            }
            $romstr = $romstr . $valstr;
        }
        return $romstr;
    }
}

$num = intval($_POST["integer"]);
$converter = new IntegerConverter ();
$roman = $converter->intToRoman($num);
