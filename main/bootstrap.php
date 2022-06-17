<?php
// Tonen van errors aanzetten.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
// Automatisch laden van klassen.
spl_autoload_register(function ($class) {

    require dirname(__FILE__) .  '/src/' . $class . '.php';

});
*/

// autoload classes
spl_autoload_register(
    function ($class) {
        // class directories
        $dir = array(
            dirname(__FILE__) .  '/src/',
            dirname(__FILE__) .  '/src/' . '/includes',
            dirname(__FILE__) .  '/src/' . '/includes/resources',


            dirname(__FILE__) .  '/src/' . '/includes/resources/npc',
            dirname(__FILE__) .  '/src/' . '/includes/resources/npc/generators',
            dirname(__FILE__) .  '/src/' . '/includes/resources/npc/npc_profile',
            dirname(__FILE__) .  '/src/' . '/includes/resources/npc/npc_properties',
            dirname(__FILE__) .  '/src/' . '/includes/resources/npc/npc_races',
            dirname(__FILE__) .  '/src/' . '/includes/resources/npc/npc_races/humanTypes',
            dirname(__FILE__) .  '/src/' . '/includes/resources/npc/npc_wardrobe',
            dirname(__FILE__) .  '/src/' . '/includes/resources/npc/npc_wardrobe-by-wealth',

            dirname(__FILE__) .  '/src/' . '/includes/resources/dungeon',
            dirname(__FILE__) .  '/src/' . '/includes/resources/wilderness',
            dirname(__FILE__) .  '/src/' . '/includes/resources/tools',


        );

        foreach ($dir as $path) {
            $file = sprintf('%s/%s.php', $path, $class);
            if (is_file($file)) {
                require $file;
            }
        }
    }
);


// Applicatie constanten

// Pad naar de view bestanden.
define('VIEWS_PATH', dirname(__FILE__) . '/views/');
define('CONFIGS_PATH', dirname(__FILE__) . '/config/');

// Configuraties inladen
require_once CONFIGS_PATH . 'database.php';

// Sessie starten hier slaan we op of iemand is ingelogd.
session_start();

// Routes afhandelen
// In /public staat een .htaccess bestand deze zorgt er voor
// dat je routes als deze http://localhost/test kunt gebruiken
// Met onderstaande code kun je de route opvragen en afhandelen.
require_once 'routes.php';

exit;
