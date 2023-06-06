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
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entree_sortie' => [[['_route' => 'app_entree_sortie_index', '_controller' => 'App\\Controller\\EntreeSortieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entree_sortie/new' => [[['_route' => 'app_entree_sortie_new', '_controller' => 'App\\Controller\\EntreeSortieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ipark' => [[['_route' => 'app_i_park', '_controller' => 'App\\Controller\\IParkController::index'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'app_paiement_index', '_controller' => 'App\\Controller\\PaiementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/paiement/new' => [[['_route' => 'app_paiement_new', '_controller' => 'App\\Controller\\PaiementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parking' => [[['_route' => 'app_parking_index', '_controller' => 'App\\Controller\\ParkingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/parking/new' => [[['_route' => 'app_parking_new', '_controller' => 'App\\Controller\\ParkingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/place' => [[['_route' => 'app_place_index', '_controller' => 'App\\Controller\\PlaceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/place/new' => [[['_route' => 'app_place_new', '_controller' => 'App\\Controller\\PlaceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_reservation_new_step1', '_controller' => 'App\\Controller\\ReservationController::step1new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parkings' => [[['_route' => 'app_reservation_new_step2', '_controller' => 'App\\Controller\\ReservationController::step2new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment' => [[['_route' => 'app_reservation_new_step3', '_controller' => 'App\\Controller\\ReservationController::step3new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/success' => [[['_route' => 'app_success', '_controller' => 'App\\Controller\\ReservationController::success'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\ReservationController::admin'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'app_session', '_controller' => 'App\\Controller\\SessionController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/client/(?'
                    .'|([^/]++)(*:188)'
                    .'|edit/([^/]++)(*:209)'
                    .'|([^/]++)(*:225)'
                .')'
                .'|/e(?'
                    .'|ntree_sortie/(?'
                        .'|([^/]++)(*:263)'
                        .'|edit/([^/]++)(*:284)'
                        .'|([^/]++)(*:300)'
                    .')'
                    .'|dit/([^/]++)(*:321)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|iement/(?'
                            .'|([^/]++)(*:357)'
                            .'|edit/([^/]++)(*:378)'
                            .'|([^/]++)(*:394)'
                        .')'
                        .'|rking/(?'
                            .'|([^/]++)(*:420)'
                            .'|edit/([^/]++)(*:441)'
                            .'|([^/]++)(*:457)'
                        .')'
                    .')'
                    .'|lace/(?'
                        .'|([^/]++)(*:483)'
                        .'|edit/([^/]++)(*:504)'
                        .'|([^/]++)(*:520)'
                    .')'
                    .'|df/([^/]++)(*:540)'
                .')'
                .'|/show/([^/]++)(*:563)'
                .'|/delete/([^/]++)(*:587)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:631)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        225 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        263 => [[['_route' => 'app_entree_sortie_show', '_controller' => 'App\\Controller\\EntreeSortieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'app_entree_sortie_edit', '_controller' => 'App\\Controller\\EntreeSortieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        300 => [[['_route' => 'app_entree_sortie_delete', '_controller' => 'App\\Controller\\EntreeSortieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        321 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        357 => [[['_route' => 'app_paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_paiement_edit', '_controller' => 'App\\Controller\\PaiementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        394 => [[['_route' => 'app_paiement_delete', '_controller' => 'App\\Controller\\PaiementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        420 => [[['_route' => 'app_parking_show', '_controller' => 'App\\Controller\\ParkingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_parking_edit', '_controller' => 'App\\Controller\\ParkingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        457 => [[['_route' => 'app_parking_delete', '_controller' => 'App\\Controller\\ParkingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        483 => [[['_route' => 'app_place_show', '_controller' => 'App\\Controller\\PlaceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        504 => [[['_route' => 'app_place_edit', '_controller' => 'App\\Controller\\PlaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        520 => [[['_route' => 'app_place_delete', '_controller' => 'App\\Controller\\PlaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        540 => [[['_route' => 'reservation.pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdfReservation'], ['id'], null, null, false, true, null]],
        563 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        587 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        631 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
