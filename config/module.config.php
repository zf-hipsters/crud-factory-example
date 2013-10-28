<?php

$config = array(
    'crud-factory' => array(
        'items' => array(
            'title' => 'Item Crud',
            'table' => 'Items',
            'soft_delete' => true,

            'entity_prototype' => 'Items\Entity\Items',
            'hydrator_class' => 'Zend\Stdlib\Hydrator\ClassMethods',
        ),
    ),
    'router' => array(
        'routes' => array(
            'items' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/items[/:action][/:id][/]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Items\Controller',
                        'controller'    => 'Items',
                        'action'        => 'read',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);

return $config;