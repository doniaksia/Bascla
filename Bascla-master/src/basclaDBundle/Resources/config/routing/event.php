<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('Controller_eventController_index', new Route(
    '/',
    array('_controller' => 'basclaDBundle:Event:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('Controller_eventController_show', new Route(
    '/{id}/show',
    array('_controller' => 'basclaDBundle:Event:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('Controller_eventController_new', new Route(
    '/new',
    array('_controller' => 'basclaDBundle:Event:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('Controller_eventController_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'basclaDBundle:Event:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('Controller_eventController_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'basclaDBundle:Event:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
