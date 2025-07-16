<?php

return [
    'pages' => [
        'dashboard' => [
            'title' => 'Panel de control',
        ],
    ],
    'resources' => [
        'label' => 'Recursos',
        'title' => ':label',
    ],
    'navigation' => [
        'groups' => [
            'users' => 'Usuarios',
            'shop' => 'Tienda',
            'blog' => 'Blog',
            'settings' => 'Configuración',
        ],
    ],
    'widgets' => [
        'account' => [
            'label' => 'Cuenta',
            'welcome' => 'Bienvenido/a, :user',
            'actions' => [
                'edit_profile' => [
                    'label' => 'Editar perfil',
                ],
                'logout' => [
                    'label' => 'Cerrar sesión',
                ],
            ],
        ],
    ],
    'auth' => [
        'title' => 'Iniciar sesión',
        'heading' => 'Iniciar sesión en su cuenta',
        'actions' => [
            'login' => [
                'label' => 'Iniciar sesión',
            ],
            'register' => [
                'label' => 'Registrarse',
            ],
            'request_password_reset' => [
                'label' => '¿Olvidó su contraseña?',
            ],
            'reset_password' => [
                'label' => 'Restablecer contraseña',
            ],
        ],
        'fields' => [
            'email' => [
                'label' => 'Correo electrónico',
            ],
            'name' => [
                'label' => 'Nombre',
            ],
            'password' => [
                'label' => 'Contraseña',
            ],
            'password_confirmation' => [
                'label' => 'Confirmar contraseña',
            ],
            'remember' => [
                'label' => 'Recordarme',
            ],
        ],
        'messages' => [
            'failed' => 'Estas credenciales no coinciden con nuestros registros.',
            'throttled' => 'Demasiados intentos de inicio de sesión. Por favor, inténtelo de nuevo en :seconds segundos.',
        ],
        'register' => [
            'title' => 'Registrarse',
            'heading' => 'Crear una cuenta nueva',
        ],
        'reset_password' => [
            'title' => 'Restablecer contraseña',
            'heading' => 'Restablecer su contraseña',
            'messages' => [
                'throttled' => 'Demasiados intentos de restablecimiento. Por favor, inténtelo de nuevo en :seconds segundos.',
            ],
        ],
        'request_password_reset' => [
            'title' => 'Olvidé mi contraseña',
            'heading' => 'Restablecer su contraseña',
            'actions' => [
                'login' => [
                    'label' => 'Volver a inicio de sesión',
                ],
            ],
            'notifications' => [
                'throttled' => [
                    'title' => 'Demasiadas solicitudes',
                    'body' => 'Por favor, inténtelo de nuevo en :seconds segundos.',
                ],
            ],
        ],
    ],
    'notifications' => [
        'title' => 'Notificaciones',
    ],
    'user_menu' => [
        'account' => [
            'label' => 'Mi cuenta',
        ],
        'logout' => [
            'label' => 'Cerrar sesión',
        ],
    ],
];