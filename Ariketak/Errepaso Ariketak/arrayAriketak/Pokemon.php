<?php
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

    function pokemonGehitu($izena, $mota, $maila, $eboluzionatuta){
        global $pokemon;
        $pokemonak[$izena] = [
        "mota" => $mota,
        "maila" => $maila,
        "eboluzionatuta" => $eboluzionatuta
    ];
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

    ?>  
</body>
</html>