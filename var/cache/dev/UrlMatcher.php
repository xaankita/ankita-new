<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/bookings' => [[['_route' => 'app_bookings_index', '_controller' => 'App\\Controller\\BookingsController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/facilities' => [[['_route' => 'app_facilities_index', '_controller' => 'App\\Controller\\FacilitiesController::index'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, null, null, false, false, null]],
        '/rooms' => [[['_route' => 'app_rooms_index', '_controller' => 'App\\Controller\\RoomsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
