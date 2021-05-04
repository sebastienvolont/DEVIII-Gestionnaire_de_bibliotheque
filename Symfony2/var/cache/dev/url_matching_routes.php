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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/information' => [[['_route' => 'information', '_controller' => 'App\\Controller\\BlogController::myInfo'], null, null, null, false, false, null]],
        '/modifLivres' => [[['_route' => 'modifLivres', '_controller' => 'App\\Controller\\BlogController::modifLivres'], null, null, null, false, false, null]],
        '/addLivre/new' => [[['_route' => 'addLivre', '_controller' => 'App\\Controller\\BlogController::create'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|fficherLivre/([^/]++)(*:195)'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:236)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:267)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:303)'
                            .'|bibliotheques(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:345)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:383)'
                                .')'
                            .')'
                            .'|livres(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:420)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:458)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:494)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:532)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
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
        195 => [[['_route' => 'afficheLivre', '_controller' => 'App\\Controller\\BlogController::afficherLivre'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        267 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        303 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        345 => [
            [['_route' => 'api_bibliotheques_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Bibliotheque', '_api_identifiers' => ['idBiblio'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_bibliotheques_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Bibliotheque', '_api_identifiers' => ['idBiblio'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        383 => [
            [['_route' => 'api_bibliotheques_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Bibliotheque', '_api_identifiers' => ['idBiblio'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idBiblio', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_bibliotheques_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Bibliotheque', '_api_identifiers' => ['idBiblio'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idBiblio', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_bibliotheques_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Bibliotheque', '_api_identifiers' => ['idBiblio'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idBiblio', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_bibliotheques_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Bibliotheque', '_api_identifiers' => ['idBiblio'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idBiblio', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        420 => [
            [['_route' => 'api_livres_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livres', '_api_identifiers' => ['idLivre'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livres_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livres', '_api_identifiers' => ['idLivre'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        458 => [
            [['_route' => 'api_livres_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livres', '_api_identifiers' => ['idLivre'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idLivre', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livres_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livres', '_api_identifiers' => ['idLivre'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idLivre', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livres_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livres', '_api_identifiers' => ['idLivre'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idLivre', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livres_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livres', '_api_identifiers' => ['idLivre'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idLivre', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        494 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_identifiers' => ['idUser'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_identifiers' => ['idUser'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        532 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_identifiers' => ['idUser'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idUser', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_identifiers' => ['idUser'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idUser', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_identifiers' => ['idUser'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idUser', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_identifiers' => ['idUser'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idUser', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
