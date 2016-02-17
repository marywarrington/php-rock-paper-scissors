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

    $app->post("/player2", function() use ($app) {
        $input1 = $_POST['player-one'];
        $_SESSION['player-ones-input'] = $input1;
        return $app['twig']->render('player2.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $input2 = $_POST['player-two'];
        $_SESSION['player-twos-input'] = $input2;
        $my_RPS = new RPS($_SESSION['player-ones-input'], $input2);
        $results = $my_RPS->playRPS($_SESSION['player-ones-input'], $input2);
        return $app['twig']->render('results.html.twig', array('results' => $results));
    });

    return $app;
?>
