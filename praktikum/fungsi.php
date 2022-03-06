<?php
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
$tims = ["Erwin", "Heru", "Ali", "Zaki"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array: Fungsi</title>
</head>
<body>
    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi sort($array)</legend>

        <ol>
            <?php
            foreach($ar_buah as $key => $buah) {
                echo "<li>{$key} - {$buah}</li>";
            }
            ?>
        </ol>
        <hr>
        <ol>
            <?php
            sort($ar_buah);
            foreach($ar_buah as $key => $buah) {
                echo "<li>{$key} - {$buah}</li>";
            }
            ?>
        </ol>

        <p>FUNGSI ARRAY SORT : MENGURUTKAN ANGGOTA ARRAY</p>
    </fieldset>
    
    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi array_pop($array)</legend>
        
        <?php
        array_pop($tims);
        foreach($tims as $person) {
            echo "{$person} <br/>";
        }
        ?>
        <p>FUNGSI ARRAY POP : MENGHAPUS ELEMENT TERAKHIR ARRAY</p>
    </fieldset>
    
    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi array_push($array)</legend>
        
        <?php
        array_push($tims, "Wati");
        foreach($tims as $person) {
            echo "{$person} <br/>";
        }
        ?>
    <p>FUNGSI ARRAY PUSH : MENAMBAHKAN ANGGOTA ELEMENT TERAKHIR ARRAY</p>
</fieldset>

<fieldset style="margin-bottom: 16px;">
    <legend>Fungsi array_shift($array)</legend>
    
    <?php
        array_shift($tims);
        foreach($tims as $person) {
            echo "{$person} <br/>";
        }
        ?>
        <p>FUNGSI ARRAY SHIFT : MENGHAPUS ANGGOTA ELEMENT PERTAMA ARRAY DAN MENGEMBAKLIKAN NILAINYA</p>
    </fieldset>
    
    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi array_unshift($array)</legend>
        
        <?php
        array_unshift($tims, "Joko", "Diah");
        foreach($tims as $person) {
            echo "{$person} <br/>";
        }
        ?>
        <p>FUNGSI ARRAY SHIFT : MENAMBAHKAN ANGGOTA ELEMENT PERTAMA ARRAY DAN MENAMBAHKAN NILAINYA</p>
    </fieldset>

</body>
</html>