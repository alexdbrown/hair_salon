<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Stylist.php";
    require_once __DIR__."/../src/Client.php";

    $app = new Silex\Application();
    // $app['debug'] = true;

    $server = 'mysql:host=localhost;dbname=hair_salon';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    // use Symfony\Component\HttpFoundation\Request;
    // Request::enableHttpMethodParameterOverride();

    //Landing page - displays any stylists that have been created
    $app->get("/", function() use($app) {
        return $app['twig']->render('index.html.twig', array('stylists' => Stylist::getAll()));
    });

    //Allows user to create new stylist, saves to the database and displays on homepage
    $app->post("/stylists", function() use($app) {
        $stylist = new Stylist($_POST['name']);
        $stylist->save();
        return $app['twig']->render('index.html.twig', array('stylists' =>Stylist::getAll()));
    });

    //Takes user to a specific stylist page
    $app->get("/stylists/{id}", function($id) use($app) {
        $stylist = Stylist::find($id);
        return $app['twig']->render('stylists.html.twig', array('stylists' => $stylist, 'clients' => $stylist->getClients()));
    });

    //Takes user to page where they can edit a specific stylist
    $app->get("/stylists/{id}/edit", function($id use($app) {
        $stylist = Stylist::find($id);
        return $app['twig']->render('stylists_edit.html.twig', array('stylists' => $stylist));
    });

    //Posts edited data to the database
    $app->patch("/stylists/{id}", function($id) use($app) {
        $name = $_POST['name'];
        $stylist = Stylist::find($id);
        $stylist->update($name);
        return $app['twig']->render('stylists.html.twig', array('stylists' => $stylist, 'clients' => $stylist->getClients()));
    });

    //Deletes one specific stylist
    $app->delete("/stylists/{id}", function($id) use($app) {
        $stylist = Stylist::find($id);
        $stylist->delete()
        return $app['twig']->render('index.html.twig', array('stylists' =>Stylist::getAll()));
    });

    //Clears all stylists
    $app->post("/delete_stylists", function() use($app) {
        Stylist::deleteAll();
        return $app['twig']->render('index.html.twig', array('stylists' =>Stylist::getAll()));
    });

    //Creates new clients and displays them on the page
    

 ?>
