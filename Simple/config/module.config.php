<?php

$config = array(
    'crud-factory' => array(
        'people' => array(
            'title' => 'People Crud',
            'table' => 'people',
            'soft_delete' => false,

            'table_configuration' => array(
                'id' => array(
                    'title' => 'Id',
                    'key' => true,
                    'list' => false,
                    'create' => false,
                    'type' => 'hidden',
                ),
                'name' => array(
                    'width' => '40%',
                    'type' => 'text',
                    'required' => true,
                ),
                'age' => array(
                    'width' => '20%',
                    'type' => 'int',
                    'required' => true,
                    'sort' => false,
                ),
                'created' => array(
                    'width' => '30%',
                    'create' => false,
                    'update' => false,
                ),
                'delete' => array(
                    'type' => 'radio',
                    'options' => array(0 => 'No', 1 => 'Yes'),
                    'create' => false,
                )
            ),

            'service_class' => 'CrudFactory\Service\Strategy\TableGateway',
            'entity_prototype' => 'People\Entity\People',
            'hydrator_class' => 'Zend\Stdlib\Hydrator\ClassMethods',
        )
    ),
    'router' => array(
        'routes' => array(
            'people' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/people[/:action][/:id][/]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'People\Controller',
                        'controller'    => 'People',
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