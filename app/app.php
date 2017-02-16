<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindAndReplace.php";


    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

   $app->get("/", function() use ($app) {
   return $app['twig']->render('phrase-input-form.html.twig');
   });

   $app->post("/phrase-output-form", function() use ($app) {
      $new_phrase = new FindAndReplace($_POST["phrase"]);
      $array_check = FindAndReplace::checkArray($_POST["phrase"], $_POST["search_term"], $_POST["replace_term"]);
      return $app['twig']->render('phrase-output-form.html.twig', array("phrase"=>$array_check));
   });

   return $app;
  ?>
