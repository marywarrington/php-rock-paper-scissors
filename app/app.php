<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RPS.php";

    session_start();
    if (empty($_SESSION['RPSinputs'])) {
        $_SESSION['RPSinputs'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array('RPSinputs' => RPS::getAll()));
    });

    $app->post("/results", function() use ($app) {
        $newGame = new RPS($_POST['player-one'], $_POST['player-two']);
        $newPlayerOne->saveVal();
        $result = $newGame->playRPS();

        return $app['twig']->render('index.html.twig',array('result'=>$result
        ));
    });

    return $app;
?>
