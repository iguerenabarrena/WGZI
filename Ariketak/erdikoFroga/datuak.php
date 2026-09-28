<?php

$series = [
    [
        "izenburua" => "Stranger Things",
        "generoa" => "Zientzia fikzioa",
        "denboraldiak" => 5,
        "balorazioa" => 8.7,
        "amaituta" => false,
        "irudia" => "img/stranger-things.jpg"
    ],
    [
        "izenburua" => "Breaking Bad",
        "generoa" => "Drama",
        "denboraldiak" => 5,
        "balorazioa" => 9.5,
        "amaituta" => true,
        "irudia" => "img/breaking-bad.jpg"
    ],
    [
        "izenburua" => "Dark",
        "generoa" => "Zientzia fikzioa",
        "denboraldiak" => 3,
        "balorazioa" => 8.7,
        "amaituta" => true,
        "irudia" => "img/dark.jpg"
    ],
    [
        "izenburua" => "Wednesday",
        "generoa" => "Fantasia",
        "denboraldiak" => 2,
        "balorazioa" => 8.0,
        "amaituta" => false,
        "irudia" => "img/wednesday.jpg"
    ],
    [
        "izenburua" => "The Last of Us",
        "generoa" => "Drama",
        "denboraldiak" => 2,
        "balorazioa" => 8.7,
        "amaituta" => false,
        "irudia" => "img/the-last-of-us.jpg"
    ],
    [
        "izenburua" => "La casa de papel",
        "generoa" => "Thriller",
        "denboraldiak" => 5,
        "balorazioa" => 8.2,
        "amaituta" => true,
        "irudia" => "img/la-casa-de-papel.jpg"
    ],
    [
        "izenburua" => "Black Mirror",
        "generoa" => "Zientzia fikzioa",
        "denboraldiak" => 7,
        "balorazioa" => 8.7,
        "amaituta" => false,
        "irudia" => "img/black-mirror.jpg"
    ],
    [
        "izenburua" => "Peaky Blinders",
        "generoa" => "Drama",
        "denboraldiak" => 6,
        "balorazioa" => 8.8,
        "amaituta" => true,
        "irudia" => "img/peaky-blinders.jpg"
    ]
];

    function erakutsiSerieak(){
        global $series;
        echo "<section class='serieak'>";
        foreach($series as $serie){
            $amaituta = $serie["amaituta"] ? "Amaituta" : "Martxan";
            echo "
            <article class='seriea'>
                <img src='". $serie["irudia"] . "' alt='". $serie["izenburua"]."'>

                <div>
                    <h2>". $serie["izenburua"] ."</h2>
                    <p>". $serie["generoa"] ."</p>
                    <p>". $serie["denboraldiak"] ." denboraldi</p>
                    <p>Balorazioa: ". $serie["balorazioa"] ."</p>
                    
                    <p>". $amaituta."</p>
                </div>
            </article>
        ";
        }
        echo "</section>";
    }

     function serieaGehitu(string $izenburua, string $generoa, int $denboraldiak, float $balorazioa, bool $amaituta){
        global $series;
        $series[]= [
        "izenburua" => $izenburua,
        "generoa" => $generoa,
        "denboraldiak" => $denboraldiak,
        "balorazioa" => $balorazioa,
        "amaituta" => $amaituta,
        "irudia" => "img/default.jpg"
    ];
    }
?>