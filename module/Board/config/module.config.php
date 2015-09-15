<?php

/**
 * Generated by ZF2ModuleCreator
 */

return array(

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

    'view_helpers' => [
        'invokables' => [
            'sidebar_helper' => 'Board\View\Helper\SidebarHelper',
        ],
    ],

    'controllers' => [
        'invokables' => [
            'Board\Controller\Index' => 'Board\Controller\IndexController',
        ],
    ],

    'service_manager' => [],

    'router' => [
        //Uncomment below to add routes
        'routes' => [
            'board' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/board',
                    'defaults' => [
                        '__NAMESPACE__' => 'Board\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ]
                ],
                'may_terminate' => true,
                'child_routes' => [

                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/[:controller[/:action]]',
                            'constraints' => [
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],

                    'booking' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/booking/[:controller[/:action]]',
                            'constraints' => [
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                                '__NAMESPACE__' => 'Booking\Controller',
                                'controller' => 'Index',
                                'action' => 'index'
                            ],
                        ],
                    ],

                    'user' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/user/[:controller[/:action]]',
                            'constraints' => [
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                                '__NAMESPACE__' => 'User\Controller',
                                'controller' => 'Profile',
                                'action' => 'index'
                            ],
                        ],
                    ],

                ],
            ],
        ],
    ],
);