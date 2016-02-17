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
            $input2 = "paper";

            //Act
            $result = $test_RPS->playRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
    }
 ?>
