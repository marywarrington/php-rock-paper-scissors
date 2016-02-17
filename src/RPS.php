<?php
    class RPS
    {
        private $input1;
        private $input2;

        function __construct($input1, $input2)
        {
            $this->input1 = $input1;
            $this->input2 = $input2;
        }

        function getInput1()
        {
            return $this->input1;
        }

        function setInput1($input1)
        {
            $this->input1 = $input1;
        }

        function getInput2()
        {
            return $this->input2;
        }

        function setInput2($input2)
        {
            $this->input2 = $input2;
        }

        function playRPS($input1, $input2)
        {
            if ($input1 == $input2) {
                return "It's a tie! Nobody";
            } elseif ($input1 == "rock") {
                if ($input2 == "scissors") {
                    return "Player 1";
                } else {
                    return "Player 2";
                }
            } elseif ($input1 == "paper") {
                if ($input2 == "scissors") {
                    return "Player 2";
                } else {
                    return "Player 1";
                }
            } elseif ($input1 == "scissors") {
                if ($input2 == "paper") {
                    return "Player 1";
                } else {
                    return "Player 2";
                }
            }
        }

        function saveVal()
        {
            array_push($_SESSION['RPSinputs'], $this);
        }

        static function getAll()
        {
            return $_SESSION['RPSinputs'];
        }


        static function deleteAll()
        {
            $_SESSION['RPSinputs'] = array();
        }

    }

?>
