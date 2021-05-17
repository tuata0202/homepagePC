<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;
use Cake\I18n\I18n;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/pacom', ['controller' => 'Homes', 'action' => 'index']);
    $routes->connect('/:action', ['controller' => 'Homes']);
    // $routes->connect('/infocompany', ['controller' => 'Homes', 'action' => 'infoCompany']);
    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);

    /**
     *  Admin Route
     */
    // Router::scope('/admin/', ['prefix' => 'admin'], function (RouteBuilder $routes) {
    //     $routes->connect('/', ['controller' => 'Homes', 'action' => 'index']);
    //     $routes->fallbacks(DashedRoute::class);
    // });
});
Router::scope('/', ['language' => 'ja'], function (RouteBuilder $routes) {
    // I18n::locale('ja');
    $routes->connect('/', ['controller' => 'Contents', 'action' => 'index', 'company:toppage']);
    $routes->connect('/toppage', ['controller' => 'Contents', 'action' => 'index', 'company:toppage']);
    $routes->connect('/company/information', ['controller' => 'Contents', 'action' => 'index', 'company:information']);
    $routes->connect('/company/intellect/manage', ['controller' => 'Contents', 'action' => 'index', 'company:manage']);
    $routes->connect('/company/intellect/profile', ['controller' => 'Contents', 'action' => 'index', 'company:profile']);
    $routes->connect('/company/intellect/leader', ['controller' => 'Contents', 'action' => 'index', 'company:leader']);
    $routes->connect('/company/policy', ['controller' => 'Contents', 'action' => 'index', 'company:policy']);
    $routes->connect('/company/testimonial', ['controller' => 'Contents', 'action' => 'index', 'company:testimonial']);
    $routes->connect('/company/contacts/*', ['controller' => 'Contents', 'action' => 'index', 'company:contacts']);
    $routes->connect('/company/recruitment', ['controller' => 'Contents', 'action' => 'index', 'company:recruitment']);
    $routes->connect('/introductions/ai', ['controller' => 'Contents', 'action' => 'index', 'introductions:development_ai']);
    $routes->connect('/introductions/app', ['controller' => 'Contents', 'action' => 'index', 'introductions:development_app']);
    $routes->connect('/introductions/sys_business', ['controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_business']);
    $routes->connect('/introductions/sys_web', ['controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web']);
    $routes->connect('/developments/ai', ['controller' => 'Contents', 'action' => 'index', 'developments:development_ai']);
    $routes->connect('/developments/app', ['controller' => 'Contents', 'action' => 'index', 'developments:development_app']);
    $routes->connect('/developments/sys_business', ['controller' => 'Contents', 'action' => 'index', 'developments:development_sys_business']);
    $routes->connect('/developments/sys_web', ['controller' => 'Contents', 'action' => 'index', 'developments:development_sys_web']);
    $routes->connect('/news', ['controller' => 'News', 'action' => 'index','news:index']);
    $routes->fallbacks('InflectedRoute');
});
Router::scope('/vi',['language' => 'vi_VN'], function (RouteBuilder $routes) {
    // I18n::locale('vi_VN');
    $routes->connect('/', ['controller' => 'Contents', 'action' => 'index', 'company:toppage']);
    $routes->connect('/toppage', ['controller' => 'Contents', 'action' => 'index', 'company:toppage']);
    $routes->connect('/company/information', ['controller' => 'Contents', 'action' => 'index', 'company:information']);
    $routes->connect('/company/intellect/manage', ['controller' => 'Contents', 'action' => 'index', 'company:manage']);
    $routes->connect('/company/intellect/profile', ['controller' => 'Contents', 'action' => 'index', 'company:profile']);
    $routes->connect('/company/intellect/leader', ['controller' => 'Contents', 'action' => 'index', 'company:leader']);
    $routes->connect('/company/policy', ['controller' => 'Contents', 'action' => 'index', 'company:policy']);
    $routes->connect('/company/testimonial', ['controller' => 'Contents', 'action' => 'index', 'company:testimonial']);
    $routes->connect('/company/contacts/*', ['controller' => 'Contents', 'action' => 'index', 'company:contacts']);
    $routes->connect('/company/recruitment', ['controller' => 'Contents', 'action' => 'index', 'company:recruitment']);
    $routes->connect('/introductions/ai', ['controller' => 'Contents', 'action' => 'index', 'introductions:development_ai']);
    $routes->connect('/introductions/app', ['controller' => 'Contents', 'action' => 'index', 'introductions:development_app']);
    $routes->connect('/introductions/sys_business', ['controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_business']);
    $routes->connect('/introductions/sys_web', ['controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web']);
    $routes->connect('/developments/ai', ['controller' => 'Contents', 'action' => 'index', 'developments:development_ai']);
    $routes->connect('/developments/app', ['controller' => 'Contents', 'action' => 'index', 'developments:development_app']);
    $routes->connect('/developments/sys_business', ['controller' => 'Contents', 'action' => 'index', 'developments:development_sys_business']);
    $routes->connect('/developments/sys_web', ['controller' => 'Contents', 'action' => 'index', 'developments:development_sys_web']);
    $routes->connect('/news', ['controller' => 'News', 'action' => 'index','news:index']);
    $routes->fallbacks('InflectedRoute');
});
Router::scope('/api/', ['prefix' => 'api'], function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'ApiApp', 'action' => 'index']);
    $routes->fallbacks(DashedRoute::class);
});
