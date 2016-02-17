<!-- testing with php unit, use this template for guidance -->
<?php
    require_once __DIR__ . '/../src/RPS.php';

    class testRPS extends PHPUnit_Framework_TestCase
    {
        function test_playRPS_draw()
        {
            //Arrange
            $test_RPS = new RPS;
            $input1 = "rock";
            $input2 = "rock";

            //Act
            $result = $test_RPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("draw", $result);
        }
        function test_playRPS_rock()
        {
            //Arrange
            $test_RPS = new RPS;
            $input1 = "rock";
            $input2 = "scissors";
            $input3 = "paper";

            //Act
            $result1 = $test_RPS->playRPS($input1, $input2);
            $result2 = $test_RPS->playRPS($input1, $input3);

            //Assert
            $this->assertEquals("Player 1", $result1);
            $this->assertEquals("Player 2", $result2);
        }
        function test_playRPS_paper()
        {
            //Arrange
            $test_RPS = new RPS;
            $input1 = "paper";
            $input2 = "scissors";
            $input3 = "rock";

            //Act
            $result1 = $test_RPS->playRPS($input1, $input2);
            $result2 = $test_RPS->playRPS($input1, $input3);

            //Assert
            $this->assertEquals("Player 2", $result1);
            $this->assertEquals("Player 1", $result2);
        }
        function test_playRPS_scissors()
        {
            //Arrange
            $test_RPS = new RPS;
            $input1 = "scissors";
            $input2 = "paper";
            $input3 = "rock";

            //Act
            $result1 = $test_RPS->playRPS($input1, $input2);
            $result2 = $test_RPS->playRPS($input1, $input3);

            //Assert
            $this->assertEquals("Player 1", $result1);
            $this->assertEquals("Player 2", $result2);
        }
    }
 ?>
