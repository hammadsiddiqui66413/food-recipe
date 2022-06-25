<?php

return [

    'providers' => [
        Barryvdh\DomPDF\ServiceProvider::class,
    ],

    'aliases' => [
        'PDF' => Barryvdh\DomPDF\Facade\Pdf::class,
    ]

];
