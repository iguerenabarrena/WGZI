<?php
    $motak = ["Elektrikoa", "Sua", "Hegaldaria", "Ura", "Belarra", "Pozoia" ];

    $pokemonak = [
        "Pikachu"=>[
            "mota"=>"Elektrikoa",
            "maila"=>25, 
            "eboluzionatuta"=>false
        ],
        "Raichu"=>[
            "mota"=>"Elektrikoa",
            "maila"=>35, 
            "eboluzionatuta"=>true
        ],
        "Charmander"=>[
            "mota"=>"Sua",
            "maila"=>18, 
            "eboluzionatuta"=>false
        ],
        "Charizard"=>[
            "mota"=>[0=>"Sua", 1=>"Hegaldaria"],
            "maila"=>42, 
            "eboluzionatuta"=>true
        ],
        "Squirtle"=>[
            "mota"=>"Ura",
            "maila"=>16, 
            "eboluzionatuta"=>false
        ],
        "Blastoise"=>[
            "mota"=>"Ura",
            "maila"=>40, 
            "eboluzionatuta"=>true
        ],
        "Bulbasaur"=>[
            "mota"=>[0=>"Belarra", 1=>"Pozoia"],
            "maila"=>15, 
            "eboluzionatuta"=>false
        ],
        "Venusaur"=>[
            "mota"=>[0=>"Belarra", 1=>"Pozoia"],
            "maila"=>38, 
            "eboluzionatuta"=>true
        ]
    ];

    function pokemonGehitu(string $izena, string $mota, int $maila, bool $eboluzionatuta){
        global $pokemonak;
        global $motak;
        $pokemonak[$izena] = [
        "mota" => $mota,
        "maila" => $maila,
        "eboluzionatuta" => $eboluzionatuta
    ];
    }

    function pokemonErakutsi() {
    global $pokemonak;
    
    echo "<h1>Pokemonak</h1>";
    
    foreach ($pokemonak as $pokemonIzena => $datuak) {
        echo "<h3>" . $pokemonIzena . "</h3>";
           foreach ($datuak as $gakoa => $balioa) {
            
            if (is_array($balioa)) {
                echo "<p><strong>" . $gakoa . ": </strong>" . implode(", ", $balioa) . "</p>";
            
            } elseif (is_bool($balioa)) {
                $testua = $balioa ? "Bai" : "Ez";
                echo "<p><strong>" . $gakoa . ": </strong>" . $testua . "</p>";
            
            } else {
                echo "<p><strong>" . $gakoa . ": </strong>" . htmlspecialchars($balioa) . "</p>";
            }
        }    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        pokemonGehitu("Eder", "Belarra" , 8, true);
        pokemonErakutsi();
    ?>  
</body>
</html>