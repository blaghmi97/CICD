<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/admin/sendNewsletter' => [[['_route' => 'app_admin_send_newsletter', '_controller' => 'App\\Controller\\AdminController::sendNewsletter'], null, null, null, false, false, null]],
        '/admin/dowloadMails' => [[['_route' => 'Mails', '_controller' => 'App\\Controller\\AdminController::dowloadletter'], null, null, null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\EmployeController::employe'], null, null, null, false, false, null]],
        '/gains' => [[['_route' => 'gains', '_controller' => 'App\\Controller\\EmployeController::gains'], null, null, null, false, false, null]],
        '/employe/codeSend' => [[['_route' => 'app_code_send', '_controller' => 'App\\Controller\\EmployeController::codeSend'], null, null, null, false, false, null]],
        '/employe/checkuser/checkcode' => [[['_route' => 'app_check_customer', '_controller' => 'App\\Controller\\EmployeController::employeCheckuser'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/bienvenu' => [[['_route' => 'app_bienvenu', '_controller' => 'App\\Controller\\HomeController::bienvenu'], null, null, null, false, false, null]],
        '/codecadeau/check' => [[['_route' => 'app_code_cadeau_check', '_controller' => 'App\\Controller\\HomeController::codecadeauCheck'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
