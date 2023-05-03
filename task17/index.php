<?php 
function cetak_pattern($nama_fungsi, $tinggi = 5, $symbol = "*", ) {
    if ($nama_fungsi == 'pattern_segitiga_upside_left') {
        pattern_segitiga_upside_left($tinggi, $symbol);

    } elseif ($nama_fungsi == 'pattern_segitiga_downside_right') {
        pattern_segitiga_downside_right($tinggi, $symbol);

    } elseif ($nama_fungsi == 'pattern_segitiga_downside_left') {
        pattern_segitiga_downside_left($tinggi, $symbol);

    } elseif ($nama_fungsi == 'pattern_segitiga_upside_right') {
        pattern_segitiga_upside_right($tinggi, $symbol);

    } else {
        echo "Nama fungsi tidak valid.";
    }
}

function pattern_segitiga_upside_left($tinggi, $symbol) {
    for ($i = $tinggi; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}

function pattern_segitiga_downside_right($tinggi, $symbol) {
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = 1; $j <= $tinggi - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}

function pattern_segitiga_downside_left($tinggi, $symbol) {
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = $i; $j <= $tinggi; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}

function pattern_segitiga_upside_right($tinggi, $symbol) {
    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = $tinggi; $j >= $i; $j--) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
// mencetak pattern segitiga upside left
cetak_pattern('pattern_segitiga_upside_left', 5, "&");

cetak_pattern('pattern_segitiga_upside_right', 5, "#");

// mencetak pattern segitiga downside right
cetak_pattern('pattern_segitiga_downside_right', 5, "$");

cetak_pattern('pattern_segitiga_downside_left', 5, "@");

// mencetak pattern segitiga downside left

?>
