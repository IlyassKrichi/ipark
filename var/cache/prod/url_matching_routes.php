<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entree_sortie' => [[['_route' => 'app_entree_sortie_index', '_controller' => 'App\\Controller\\EntreeSortieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entree_sortie/new' => [[['_route' => 'app_entree_sortie_new', '_controller' => 'App\\Controller\\EntreeSortieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ipark' => [[['_route' => 'app_i_park', '_controller' => 'App\\Controller\\IParkController::index'], null, null, null, false, false, null]],
        '/paiement' => [
            [['_route' => 'app_paiement_index', '_controller' => 'App\\Controller\\PaiementController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_reservation_new_step3', '_controller' => 'App\\Controller\\ReservationController::step3new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/paiement/new' => [[['_route' => 'app_paiement_new', '_controller' => 'App\\Controller\\PaiementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parking' => [[['_route' => 'app_parking_index', '_controller' => 'App\\Controller\\ParkingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/parking/new' => [[['_route' => 'app_parking_new', '_controller' => 'App\\Controller\\ParkingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/place' => [[['_route' => 'app_place_index', '_controller' => 'App\\Controller\\PlaceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/place/new' => [[['_route' => 'app_place_new', '_controller' => 'App\\Controller\\PlaceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_reservation_new_step1', '_controller' => 'App\\Controller\\ReservationController::step1new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parkings' => [[['_route' => 'app_reservation_new_step2', '_controller' => 'App\\Controller\\ReservationController::step2new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/client/(?'
                    .'|([^/]++)(*:26)'
                    .'|edit/([^/]++)(*:46)'
                    .'|([^/]++)(*:61)'
                .')'
                .'|/e(?'
                    .'|ntree_sortie/(?'
                        .'|([^/]++)(*:98)'
                        .'|edit/([^/]++)(*:118)'
                        .'|([^/]++)(*:134)'
                    .')'
                    .'|dit/([^/]++)(*:155)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|iement/(?'
                            .'|([^/]++)(*:191)'
                            .'|edit/([^/]++)(*:212)'
                            .'|([^/]++)(*:228)'
                        .')'
                        .'|rking/(?'
                            .'|([^/]++)(*:254)'
                            .'|edit/([^/]++)(*:275)'
                            .'|([^/]++)(*:291)'
                        .')'
                    .')'
                    .'|lace/(?'
                        .'|([^/]++)(*:317)'
                        .'|edit/([^/]++)(*:338)'
                        .'|([^/]++)(*:354)'
                    .')'
                    .'|df/([^/]++)(*:374)'
                .')'
                .'|/show/([^/]++)(*:397)'
                .'|/delete/([^/]++)(*:421)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:465)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        61 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        98 => [[['_route' => 'app_entree_sortie_show', '_controller' => 'App\\Controller\\EntreeSortieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        118 => [[['_route' => 'app_entree_sortie_edit', '_controller' => 'App\\Controller\\EntreeSortieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        134 => [[['_route' => 'app_entree_sortie_delete', '_controller' => 'App\\Controller\\EntreeSortieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        155 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        191 => [[['_route' => 'app_paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        212 => [[['_route' => 'app_paiement_edit', '_controller' => 'App\\Controller\\PaiementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        228 => [[['_route' => 'app_paiement_delete', '_controller' => 'App\\Controller\\PaiementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_parking_show', '_controller' => 'App\\Controller\\ParkingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_parking_edit', '_controller' => 'App\\Controller\\ParkingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        291 => [[['_route' => 'app_parking_delete', '_controller' => 'App\\Controller\\ParkingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        317 => [[['_route' => 'app_place_show', '_controller' => 'App\\Controller\\PlaceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_place_edit', '_controller' => 'App\\Controller\\PlaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        354 => [[['_route' => 'app_place_delete', '_controller' => 'App\\Controller\\PlaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        374 => [[['_route' => 'reservation.pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdfReservation'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        421 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        465 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
