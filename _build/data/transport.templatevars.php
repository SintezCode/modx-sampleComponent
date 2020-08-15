<?php

$data['modTemplateVar']=[
    'sampleTV'=>[
        'fields'=>[
            'type' => 'text',
            'name' => 'sampleTV',
            'caption' => 'sampleTV caption',
            'description' => 'sampleTV description',
        ],
        'options'=>$config['data_options']['modTemplateVar'],
        'relations'=>[
            'modCategory'=>[
                'main'=>'TemplateVars'
            ]
        ]
    ],
];