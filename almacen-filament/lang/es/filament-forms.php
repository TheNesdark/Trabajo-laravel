<?php

return [
    'components' => [
        'file_upload' => [
            'editor' => [
                'actions' => [
                    'cancel' => [
                        'label' => 'Cancelar',
                    ],
                    'drag_crop' => [
                        'label' => 'Modo arrastrar "recortar"',
                    ],
                    'drag_move' => [
                        'label' => 'Modo arrastrar "mover"',
                    ],
                    'flip_horizontal' => [
                        'label' => 'Voltear imagen horizontalmente',
                    ],
                    'flip_vertical' => [
                        'label' => 'Voltear imagen verticalmente',
                    ],
                    'move_down' => [
                        'label' => 'Mover imagen hacia abajo',
                    ],
                    'move_left' => [
                        'label' => 'Mover imagen hacia la izquierda',
                    ],
                    'move_right' => [
                        'label' => 'Mover imagen hacia la derecha',
                    ],
                    'move_up' => [
                        'label' => 'Mover imagen hacia arriba',
                    ],
                    'reset' => [
                        'label' => 'Restablecer',
                    ],
                    'rotate_left' => [
                        'label' => 'Rotar imagen a la izquierda',
                    ],
                    'rotate_right' => [
                        'label' => 'Rotar imagen a la derecha',
                    ],
                    'save' => [
                        'label' => 'Guardar',
                    ],
                    'zoom_in' => [
                        'label' => 'Acercar',
                    ],
                    'zoom_out' => [
                        'label' => 'Alejar',
                    ],
                ],
            ],
        ],
        'key_value' => [
            'actions' => [
                'add' => [
                    'label' => 'Añadir fila',
                ],
                'delete' => [
                    'label' => 'Eliminar fila',
                ],
                'reorder' => [
                    'label' => 'Reordenar fila',
                ],
            ],
            'fields' => [
                'key' => [
                    'label' => 'Clave',
                ],
                'value' => [
                    'label' => 'Valor',
                ],
            ],
        ],
        'repeater' => [
            'actions' => [
                'add' => [
                    'label' => 'Añadir a :label',
                ],
                'delete' => [
                    'label' => 'Eliminar',
                ],
                'clone' => [
                    'label' => 'Clonar',
                ],
                'reorder' => [
                    'label' => 'Mover',
                ],
                'move_down' => [
                    'label' => 'Mover hacia abajo',
                ],
                'move_up' => [
                    'label' => 'Mover hacia arriba',
                ],
                'collapse' => [
                    'label' => 'Colapsar',
                ],
                'expand' => [
                    'label' => 'Expandir',
                ],
                'collapse_all' => [
                    'label' => 'Colapsar todo',
                ],
                'expand_all' => [
                    'label' => 'Expandir todo',
                ],
            ],
        ],
        'rich_editor' => [
            'dialogs' => [
                'link' => [
                    'actions' => [
                        'link' => [
                            'label' => 'Enlace',
                        ],
                        'unlink' => [
                            'label' => 'Quitar enlace',
                        ],
                    ],
                    'label' => 'URL',
                    'placeholder' => 'Introduzca una URL',
                ],
            ],
            'toolbar_buttons' => [
                'attach_files' => 'Adjuntar archivos',
                'blockquote' => 'Cita',
                'bold' => 'Negrita',
                'bullet_list' => 'Viñetas',
                'code_block' => 'Bloque de código',
                'h1' => 'Título',
                'h2' => 'Encabezado',
                'h3' => 'Subencabezado',
                'italic' => 'Cursiva',
                'link' => 'Enlace',
                'ordered_list' => 'Números',
                'redo' => 'Rehacer',
                'strike' => 'Tachado',
                'underline' => 'Subrayado',
                'undo' => 'Deshacer',
            ],
        ],
        'select' => [
            'actions' => [
                'create_option' => [
                    'label' => 'Crear nueva opción',
                ],
            ],
            'boolean' => [
                'true' => 'Sí',
                'false' => 'No',
            ],
            'loading_message' => 'Cargando...',
            'max_items_message' => 'Solo :count pueden ser seleccionados.',
            'no_search_results_message' => 'No se encontraron resultados para su búsqueda.',
            'placeholder' => 'Seleccione una opción',
            'searching_message' => 'Buscando...',
            'search_prompt' => 'Escriba para buscar...',
        ],
        'tags_input' => [
            'placeholder' => 'Nueva etiqueta',
        ],
        'wizard' => [
            'actions' => [
                'previous_step' => [
                    'label' => 'Anterior',
                ],
                'next_step' => [
                    'label' => 'Siguiente',
                ],
            ],
        ],
    ],
    'actions' => [
        'modal' => [
            'requires_confirmation_subheading' => '¿Está seguro de que desea hacer esto?',
        ],
    ],
];