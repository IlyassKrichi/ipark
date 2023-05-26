<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ipark' => [[['_route' => 'app_i_park', '_controller' => 'App\\Controller\\IParkController::index'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'app_paiement_index', '_controller' => 'App\\Controller\\PaiementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/paiement/new' => [[['_route' => 'app_paiement_new', '_controller' => 'App\\Controller\\PaiementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/step1new' => [[['_route' => 'app_reservation_new_step1', '_controller' => 'App\\Controller\\ReservationController::step1new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/step2new' => [[['_route' => 'app_reservation_new_step2', '_controller' => 'App\\Controller\\ReservationController::step2new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'app_session', '_controller' => 'App\\Controller\\SessionController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:137)'
                            .'|router(*:151)'
                            .'|exception(?'
                                .'|(*:171)'
                                .'|\\.css(*:184)'
                            .')'
                        .')'
                        .'|(*:194)'
                    .')'
                .')'
                .'|/paiement/([^/]++)(?'
                    .'|(*:225)'
                    .'|/edit(*:238)'
                    .'|(*:246)'
                .')'
                .'|/reservation/(?'
                    .'|([^/]++)(?'
                        .'|(*:282)'
                        .'|/step(?'
                            .'|1edit(*:303)'
                            .'|2edit(*:316)'
                        .')'
                        .'|(*:325)'
                    .')'
                    .'|pdf/([^/]++)(*:346)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        137 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        151 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        171 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        225 => [[['_route' => 'app_paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_paiement_edit', '_controller' => 'App\\Controller\\PaiementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'app_paiement_delete', '_controller' => 'App\\Controller\\PaiementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_reservation_edit_step1', '_controller' => 'App\\Controller\\ReservationController::step1edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        316 => [[['_route' => 'app_reservation_edit_step2', '_controller' => 'App\\Controller\\ReservationController::step2edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        346 => [
            [['_route' => 'reservation.pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdfReservation'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
