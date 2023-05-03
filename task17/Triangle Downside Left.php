<?php 
//Triangle Downside Left
function cetak_pattern_segitiga_downside_left($tinggi, $symbol = "*") {
    // loop untuk mencetak baris
    for ($i = 1; $i <= $tinggi; $i++) {
        // loop untuk mencetak spasi
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // loop untuk mencetak simbol
        for ($j = $i; $j <= $tinggi; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
cetak_pattern_segitiga_downside_left(15, "*");
?>