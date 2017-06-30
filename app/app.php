<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Contact.php';

    session_start();

    if(empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post('/create_contact', function() use ($app) {
        $contact = new Contact($_POST['name'], $_POST['phone_number'], $_POST['address'], $_POST['image']);
        $contact->save();
        return $app['twig']->render('create_contact.html.twig', array('new_contact' => $contact));
    });

    $app->get('/search_contacts', function() use ($app) {
        $contacts = Contact::getAll();
        $contacts_matching_search = array();

        if (empty($contacts_matching_search) == true) {
            foreach ($contacts as $contact) {
                if ($contact->getName() == $_GET['search']) {
                    array_push($contacts_matching_search, $contact);
                }
            }
        }
        return $app['twig']->render('search_contacts.html.twig', array('contact' => $contacts_matching_search));
    });

    $app->post('/delete_contacts', function() use ($app) {
        return $app['twig']->render('delete_contacts.html.twig', array('delete_contacts' => Contact::deleteAll()));
    });

    return $app;
?>
