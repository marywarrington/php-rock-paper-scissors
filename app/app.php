<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RPS.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $newGame = new RPS;
        $input1 = $_GET['player-one'];
        $input2 = $_GET['player-two'];
        $result = $newGame->playRPS($input1, $input2);

        return $app['twig']->render('index.html.twig', array('result'=>$result
        ));
    });

    return $app;
?>
