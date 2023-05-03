<?php
//Triangle Upside Right
function cetak_pattern_segitiga_upside_right($tinggi, $symbol = "*") {
    // loop untuk mencetak baris
    for ($i = 1; $i <= $tinggi; $i++) {
        // loop untuk mencetak spasi
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // loop untuk mencetak simbol
        for ($j = $tinggi; $j >= $i; $j--) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
cetak_pattern_segitiga_upside_right(15, "*");

?>