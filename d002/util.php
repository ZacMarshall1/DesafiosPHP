<?php 
    function generateNumberBetween1and100(){

        $min = 0;
        $max = 100;

        $randomNumber = mt_rand($min , $max);

        return $randomNumber;
    }
?>