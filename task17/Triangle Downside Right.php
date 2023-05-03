<?php 
// Triangle Downside Right
function cetak_pattern_segitiga_downside_right($tinggi, $symbol = "*") {
    // loop untuk mencetak baris
    for ($i = 1; $i <= $tinggi; $i++) {
        // loop untuk mencetak spasi
        for ($j = 1; $j <= $tinggi - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // loop untuk mencetak simbol
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
cetak_pattern_segitiga_downside_right(15, "*");
?>