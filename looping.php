<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan Looping</h1>

    <?php
    echo "<h3> Contoh soal 1 </h3>";
    echo "<h4> Looping Pertama Ascending (meningkat) </h4>";

    $angka1 = 2;
    while ($angka1 <= 20){
        echo $angka1 . ". I Love PHP <br>";
        $angka1+=2;
    };

    echo "<h4> Looping Kedua </h4>";
    for ($angka2 = 20; $angka2 >=2; $angka2 -=2){
        echo $angka2 . ". I Love PHP Descending (menurun) <br>";
    };
    echo "<h3> Contoh soal 2 </h3>";
    $numbers = [18, 45, 29, 61, 47, 34];

    foreach($numbers as $angka){
        $arrModulus[] = $angka%5;
    }
    print_r($numbers);
    echo "<br>";
    echo "Array sisa baginya adalah: ";
    echo "<br>";
    print_r($arrModulus);

    echo "<h3> Contoh soal 3 </h3>";
    $items = [
        ["001", "Keyboard Logitek", "60000", "Keyboard yang mantap untuk kantoran"],
        ["002", "Keyboard MSI", "300000", "Keyboard gaming MSI mekanik"],
        ["003", "Mouse Genius", "50000", "Mouse Genius biar lebih pinter"],
        ["004", "Mouse Jerry", "30000", "Mouse yang disukai kucing"],
    ];

    foreach ($items as $value) {
    $data = [
        "id" => $value[0],
        "name" => $value[1],
        "price" => $value[2],
        "description" => $value[3],
    ];
    print_r($data);
    echo "<br>";
    }
    
    echo "<h3> Contoh soal 4 </h3>";
    for ($i = 5; $i >= 1; $i--) {
        for ($j = $i; $j <= 5; $j++) {
            echo "*";
        }
        echo "<br>";
    }


    ?>
</body>
</html>