<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Nomor 01</title>
</head>
<body>

<!-- ========================================================================================== -->
    <h3>Soal nomor 1</h3>
    <?php
        $angka = "1,3,5,7,9,11,13,15";
        $angka = explode(",", $angka);

        for ($i = 0; $i < count($angka); $i++) {
            echo $angka[$i];
            if ( $i != count($angka) - 1 ) {
                echo ",";
            }
        }
    ?>

<!-- ========================================================================================== -->

<!-- ========================================================================================== -->
    <h3>Soal nomor 2</h3>
    
    <p>    
        a. 
        <?php
            $tanggal = "2020-05-01";
            $tahun = substr($tanggal, 2, 2);
            $bulan = substr($tanggal, 5, 2);
            $hari = substr($tanggal, 8, 2);
            echo  $bulan.'-'.$tahun.'-'.$hari;
        ?>
    </p>
    <p>
        b.
        <?php 
            $tanggal2 = new DateTime($tanggal);
            echo date_format($tanggal2, 'm-y-d');
        ?>        
    </p>

    <p>
        c.
        <?php
            $tanggal3 = $tanggal;
            for ($i=0; $i < 6; $i++) { 
                $bulanSetelah = strtotime("+1 month", strtotime($tanggal3));
                $tanggal3 = date("y-m-d", $bulanSetelah);
                echo '' . date_format(new DateTime($tanggal3), "M,");
            }
        ?>
    </p>

    <p>
        d.
        <?php
        $tanggal_lahir = new DateTime('1999-09-27');
        $tanggal4 = new DateTime($tanggal);
        $y = $tanggal4->diff($tanggal_lahir)->y;
        $m = $tanggal4->diff($tanggal_lahir)->m;
        $d = $tanggal4->diff($tanggal_lahir)->d;
        echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
        ?>
    </p>

<!-- ========================================================================================== -->

<!-- ========================================================================================== -->
    <h3>Soal nomor 3</h3>
    <p>
        a.
        <?php $array = [20,10,100,30,15,5]; ?>        
        Ascending :
        <?php
            $array1 = $array;
            sort($array1);
            for ($i=0; $i < count($array1); $i++) { 
                echo $array1[$i];
                if ( $i != count($array1) - 1 ) {
                    echo ",";
                }
            }            
        ?> |
        Descending :
        <?php
            rsort($array1);
            for ($i=0; $i < count($array1); $i++) { 
                echo $array1[$i];
                if ( $i != count($array1) - 1 ) {
                    echo ",";
                }
            }            
        ?>
    </p>

    <p>
        b.
        <?php        
            $array2 = $array;
            array_push($array2, 180);
            for ($i=0; $i < count($array2); $i++) { 
                echo $array2[$i];
                if ( $i != count($array2) - 1 ) {
                    echo ",";
                }
            }
        ?>
    </p>
    <p>c. 
    <?php 
        $array3 = $array;
        unset($array3[3]);
        $array3 = array_values($array3);
        for ($i=0; $i < count($array3); $i++) { 
            echo $array3[$i];            
            if ($i != count($array3) - 1){
                echo ',';
            }
        }
    ?>        
    </p>

<!-- ========================================================================================== -->

<!-- ========================================================================================== -->
    <h3>Soal nomor 4</h3>
    <p>
        a. <br>
        <?php
        $str = "AKU SUKA MAKAN NASI PADANG";
        $str = explode(" ", $str);

        for ($i=0; $i < count($str); $i++) {
            for ($j=0; $j < $i; $j++) { 
                echo $str[$j] . ' ';
            }
            if($i != count($str) - 1){
                echo $str[$i] .', ';
            }else{
                echo $str[$i] .', ';
                for ($k=4; $k >=0 ; $k--) { 
                    for ($l=4; $l >=$k ; $l--) { 
                        echo $str[$l] .' ';
                    }
                    if ($k == 0){
                        echo '';
                    }else{
                    echo ', ';
                    }
                }
            }
        }
        echo '<br><br>b.<br>';
        for ($i=0; $i < count($str); $i++) {
            for ($j=0; $j < $i; $j++) { 
                echo $str[$j] . ' ';
            }
            if($i != count($str) - 1){
                echo $str[$i] .'<br>';
            }else{
                echo $str[$i] .'<br>';
                for ($k=4; $k >=0 ; $k--) { 
                    for ($l=4; $l >=$k ; $l--) { 
                        echo $str[$l] .' ';
                    }
                    if ($k == 0){
                        echo '<br>';
                    }else{
                    echo '<br> ';
                    }
                }
            }
        }
        ?>
    </p>
<!-- ========================================================================================== -->

<!-- ========================================================================================== -->
    <h3>Soal nomor 5</h3>
    <p>
        a.
        <?php
        $buah = array(
            array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
            array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
            array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
            array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
            array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
            array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
            );
        array_push($buah, array("NAMA" => "PISANG", "HARGA" => 5000, "RASA" => "MANIS"));        
        $nama = array_column($buah, "NAMA");
        arsort($nama);
        foreach ($nama as $no => $data){            
            if ($no == 2) {
                echo $data;
            }
            else{
                echo $data . ', ';
            }
        }
        ?>        
    </p>
    <p>
        b.
        <?php    
        function cariBuah($buah, $huruf) {
            foreach($buah as $anakBuah) {
                $namaBuah = $anakBuah["NAMA"];
                if (strpos($namaBuah, $huruf) !== false) {
                    echo $namaBuah .' || ';
                }
            }
        }
        cariBuah($buah, 'K');
        ?>
    </p>

    <p>
        c.
        <?php    
            foreach($buah as $anakBuah) {                
                if ($anakBuah["HARGA"] < 10000 && $anakBuah["RASA"] == "MANIS" ) {
                    echo $anakBuah['NAMA'].' -> '.$anakBuah["HARGA"] .' || ';
                }
            }
        ?>
    </p>

<!-- ========================================================================================== -->
</body>
</html>