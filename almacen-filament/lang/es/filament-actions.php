<?php

return [
    'associate' => [
        'single' => [
            'label' => 'Asociar',
            'modal' => [
                'heading' => 'Asociar :label',
                'fields' => [
                    'record_id' => [
                        'label' => 'Registro',
                    ],
                ],
                'actions' => [
                    'associate' => [
                        'label' => 'Asociar',
                    ],
                    'associate_another' => [
                        'label' => 'Asociar y asociar otro',
                    ],
                ],
            ],
            'notifications' => [
                'associated' => [
                    'title' => 'Asociado',
                ],
            ],
        ],
    ],
    'attach' => [
        'single' => [
            'label' => 'Adjuntar',
            'modal' => [
                'heading' => 'Adjuntar :label',
                'fields' => [
                    'record_id' => [
                        'label' => 'Registro',
                    ],
                ],
                'actions' => [
                    'attach' => [
                        'label' => 'Adjuntar',
                    ],
                    'attach_another' => [
                        'label' => 'Adjuntar y adjuntar otro',
                    ],
                ],
            ],
            'notifications' => [
                'attached' => [
                    'title' => 'Adjuntado',
                ],
            ],
        ],
    ],
    'create' => [
        'single' => [
            'label' => 'Crear',
            'modal' => [
                'heading' => 'Crear :label',
                'actions' => [
                    'create' => [
                        'label' => 'Crear',
                    ],
                    'create_another' => [
                        'label' => 'Crear y crear otro',
                    ],
                ],
            ],
            'notifications' => [
                'created' => [
                    'title' => 'Creado',
                ],
            ],
        ],
    ],
    'delete' => [
        'single' => [
            'label' => 'Eliminar',
            'modal' => [
                'heading' => 'Eliminar :label',
                'actions' => [
                    'delete' => [
                        'label' => 'Eliminar',
                    ],
                ],
            ],
            'notifications' => [
                'deleted' => [
                    'title' => 'Eliminado',
                ],
            ],
        ],
        'multiple' => [
            'label' => 'Eliminar seleccionados',
            'modal' => [
                'heading' => 'Eliminar :label seleccionados',
                'actions' => [
                    'delete' => [
                        'label' => 'Eliminar',
                    ],
                ],
            ],
            'notifications' => [
                'deleted' => [
                    'title' => 'Eliminados',
                ],
            ],
        ],
    ],
    'detach' => [
        'single' => [
            'label' => 'Desvincular',
            'modal' => [
                'heading' => 'Desvincular :label',
                'actions' => [
                    'detach' => [
                        'label' => 'Desvincular',
                    ],
                ],
            ],
            'notifications' => [
                'detached' => [
                    'title' => 'Desvinculado',
                ],
            ],
        ],
        'multiple' => [
            'label' => 'Desvincular seleccionados',
            'modal' => [
                'heading' => 'Desvincular :label seleccionados',
                'actions' => [
                    'detach' => [
                        'label' => 'Desvincular',
                    ],
                ],
            ],
            'notifications' => [
                'detached' => [
                    'title' => 'Desvinculados',
                ],
            ],
        ],
    ],
    'dissociate' => [
        'single' => [
            'label' => 'Disociar',
            'modal' => [
                'heading' => 'Disociar :label',
                'actions' => [
                    'dissociate' => [
                        'label' => 'Disociar',
                    ],
                ],
            ],
            'notifications' => [
                'dissociated' => [
                    'title' => 'Disociado',
                ],
            ],
        ],
        'multiple' => [
            'label' => 'Disociar seleccionados',
            'modal' => [
                'heading' => 'Disociar :label seleccionados',
                'actions' => [
                    'dissociate' => [
                        'label' => 'Disociar',
                    ],
                ],
            ],
            'notifications' => [
                'dissociated' => [
                    'title' => 'Disociados',
                ],
            ],
        ],
    ],
    'edit' => [
        'single' => [
            'label' => 'Editar',
            'modal' => [
                'heading' => 'Editar :label',
                'actions' => [
                    'save' => [
                        'label' => 'Guardar',
                    ],
                ],
            ],
            'notifications' => [
                'saved' => [
                    'title' => 'Guardado',
                ],
            ],
        ],
    ],
    'force_delete' => [
        'single' => [
            'label' => 'Eliminar permanentemente',
            'modal' => [
                'heading' => 'Eliminar permanentemente :label',
                'actions' => [
                    'force_delete' => [
                        'label' => 'Eliminar permanentemente',
                    ],
                ],
            ],
            'notifications' => [
                'force_deleted' => [
                    'title' => 'Eliminado permanentemente',
                ],
            ],
        ],
        'multiple' => [
            'label' => 'Eliminar permanentemente seleccionados',
            'modal' => [
                'heading' => 'Eliminar permanentemente :label seleccionados',
                'actions' => [
                    'force_delete' => [
                        'label' => 'Eliminar permanentemente',
                    ],
                ],
            ],
            'notifications' => [
                'force_deleted' => [
                    'title' => 'Eliminados permanentemente',
                ],
            ],
        ],
    ],
    'restore' => [
        'single' => [
            'label' => 'Restaurar',
            'modal' => [
                'heading' => 'Restaurar :label',
                'actions' => [
                    'restore' => [
                        'label' => 'Restaurar',
                    ],
                ],
            ],
            'notifications' => [
                'restored' => [
                    'title' => 'Restaurado',
                ],
            ],
        ],
        'multiple' => [
            'label' => 'Restaurar seleccionados',
            'modal' => [
                'heading' => 'Restaurar :label seleccionados',
                'actions' => [
                    'restore' => [
                        'label' => 'Restaurar',
                    ],
                ],
            ],
            'notifications' => [
                'restored' => [
                    'title' => 'Restaurados',
                ],
            ],
        ],
    ],
    'view' => [
        'single' => [
            'label' => 'Ver',
            'modal' => [
                'heading' => 'Ver :label',
                'actions' => [
                    'close' => [
                        'label' => 'Cerrar',
                    ],
                ],
            ],
        ],
    ],
    'export' => [
        'label' => 'Exportar',
        'modal' => [
            'heading' => 'Exportar',
            'form' => [
                'columns' => [
                    'label' => 'Columnas',
                    'helper' => 'Seleccione las columnas que desea exportar',
                ],
            ],
            'actions' => [
                'export' => [
                    'label' => 'Exportar',
                ],
            ],
        ],
    ],
    'import' => [
        'label' => 'Importar',
        'modal' => [
            'heading' => 'Importar :label',
            'form' => [
                'file' => [
                    'label' => 'Archivo',
                    'placeholder' => 'Seleccione un archivo CSV para cargar',
                ],
                'columns' => [
                    'label' => 'Columnas',
                    'placeholder' => 'Seleccione una columna',
                ],
            ],
            'actions' => [
                'import' => [
                    'label' => 'Importar',
                ],
                'cancel' => [
                    'label' => 'Cancelar',
                ],
            ],
        ],
    ],
];