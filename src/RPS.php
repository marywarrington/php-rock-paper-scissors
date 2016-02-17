<?php
    class RPS
    {

        function playRPS($input1, $input2)
        {
            if ($input1 == $input2) {
                return "draw";
            } elseif ($input1 == "rock") {
                if ($input2 == "paper") {
                    return "Player 1";
                } else {
                    return "Player 2";
                }
            }
        }





    }

?>
