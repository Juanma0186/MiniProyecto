<?php

$horario = [
    "Lunes" => [
        "16:00-16:55" => "DIW",
        "16:55-17:50" => "DIW",
        "17:50-18:45" => "DWES",
        "18:45-19:10" => "RECREO",
        "19:10-20:05" => "DWES",
        "20:05-21:00" => "DWES",
        "21:00-21:55" => "ITGS"
    ],
    "Martes" => [
        "16:00-16:55" => "DWEC",
        "16:55-17:50" => "DWEC",
        "17:50-18:45" => "EIE",
        "18:45-19:10" => "RECREO",
        "19:10-20:05" => "DEWS",
        "20:05-21:00" => "DEWS",
        "21:00-21:55" => "DEWS"
    ],
    "Miercoles" => [
        "16:00-16:55" => "DIW",
        "16:55-17:50" => "DIW",
        "17:50-18:45" => "EIE",
        "18:45-19:10" => "RECREO",
        "19:10-20:05" => "EIE",
        "20:05-21:00" => "DWEC",
        "21:00-21:55" => "DAW"
    ],
    "Jueves" => [
        "16:00-16:55" => "DWEC",
        "16:55-17:50" => "DWEC",
        "17:50-18:45" => "DAW",
        "18:45-19:10" => "RECREO",
        "19:10-20:05" => "DAW",
        "20:05-21:00" => "DIW",
        "21:00-21:55" => "DIW"
    ],
    "Viernes" => [
        "16:00-16:55" => "DEWS",
        "16:55-17:50" => "DEWS",
        "17:50-18:45" => "DEWS",
        "18:45-19:10" => "RECREO",
        "19:10-20:05" => "DWEC",
        "20:05-21:00" => "DWEC",
        "21:00-21:55" => "ITGS"
    ],
];


    // Obtener todas las horas en un array
    $horas = [];
    foreach ($horario as $dia => $clases) {
        foreach ($clases as $hora => $valor) {
            $horas[$hora][$dia] = $valor;
        }
    }
    
    // Obtener la lista de días
    $dias = array_keys($horario);
    //var_dump($dias);

    
$integrantes = [
    "Miguel Martínez",
    "David Murillo",
    "Juanma Suárez",
    "Maki Mirón"
];

$modulos = [
    "DWES" => [
        "modulo" => "Desarrollo web en entorno servidor",
        "profesor" => "Dueñas Lerín,Jorge"
    ],
    "DAW" => [
        "modulo" => "Despliegue de aplicaciones web",
        "profesor" => "Dueñas Lerín,Jorge"
    ],
    "DIW" => [
        "modulo" => "Diseño de interfaces web",
        "profesor" => "García Miguel Lopez,Diana"
    ],
    "DWEC" => [
        "modulo" => "Desarrollo web en entorno cliente",
        "profesor" => "García Miguel Lopez,Diana"
    ],
    "EIE" => [
        "modulo" => "Empresa e iniciativa emprendedora",
        "profesor" => "Pérez del Campo,Fernando"
    ],
    "ITGS" => [
        "modulo" => "Inglés técnico",
        "profesor" => "Perez Vaquero,Raquel"
    ]
];
