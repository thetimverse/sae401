<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_/mots/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Mot', '_api_operation_name' => '_api_/mots/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/mots']], [], [], []],
    '_api_/mots{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Mot', '_api_operation_name' => '_api_/mots{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/mots']], [], [], []],
    '_api_/mots{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Mot', '_api_operation_name' => '_api_/mots{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/mots']], [], [], []],
    '_api_/mots/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Mot', '_api_operation_name' => '_api_/mots/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/mots']], [], [], []],
    '_api_/mots/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Mot', '_api_operation_name' => '_api_/mots/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/mots']], [], [], []],
    '_api_/mots/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Mot', '_api_operation_name' => '_api_/mots/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/mots']], [], [], []],
    '_api_/mot_parties/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MotPartie', '_api_operation_name' => '_api_/mot_parties/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/mot_parties']], [], [], []],
    '_api_/mot_parties{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MotPartie', '_api_operation_name' => '_api_/mot_parties{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/mot_parties']], [], [], []],
    '_api_/mot_parties{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MotPartie', '_api_operation_name' => '_api_/mot_parties{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/mot_parties']], [], [], []],
    '_api_/mot_parties/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MotPartie', '_api_operation_name' => '_api_/mot_parties/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/mot_parties']], [], [], []],
    '_api_/mot_parties/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MotPartie', '_api_operation_name' => '_api_/mot_parties/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/mot_parties']], [], [], []],
    '_api_/mot_parties/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MotPartie', '_api_operation_name' => '_api_/mot_parties/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/mot_parties']], [], [], []],
    '_api_/parties/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partie', '_api_operation_name' => '_api_/parties/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/parties']], [], [], []],
    '_api_/parties{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partie', '_api_operation_name' => '_api_/parties{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/parties']], [], [], []],
    '_api_/parties{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partie', '_api_operation_name' => '_api_/parties{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/parties']], [], [], []],
    '_api_/parties/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partie', '_api_operation_name' => '_api_/parties/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/parties']], [], [], []],
    '_api_/parties/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partie', '_api_operation_name' => '_api_/parties/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/parties']], [], [], []],
    '_api_/parties/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partie', '_api_operation_name' => '_api_/parties/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/parties']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_compte' => [[], ['_controller' => 'App\\Controller\\CompteController::index'], [], [['text', '/compte']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password/request']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
