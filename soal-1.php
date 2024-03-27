<?php

$data = [
    'data_1' => [
        'lumba_lumba' => [96, 108, 89],
        'koala' => [88, 91, 110]
    ],
    'data_bonus_1' => [
        'lumba_lumba' => [97, 112, 101],
        'koala' => [109, 95, 123]
    ],
    'data_bonus_2' => [
        'lumba_lumba' => [97, 112, 101],
        'koala' => [109, 95, 106]
    ],
];

function cek_hasil($data)
{
    $rata_lumba = array_sum($data['lumba_lumba']) / 3;
    $rata_koala = array_sum($data['koala']) / 3;

    // skor minimum = 100
    if ($rata_koala >= 100 or $rata_koala >= 100) {
        if ($rata_lumba > $rata_koala) {
            echo "Pemenang Trofi adalah Tim Lumba-Lumba dengan nilai rata-rata: " . $rata_lumba;
        } else if ($rata_lumba < $rata_koala) {
            echo "Pemenang Trofi adalah Tim koala dengan nilai rata-rata: " . $rata_koala;
        } else if ($rata_lumba == $rata_koala) {
            echo "Hasil Seri dengan nilai rata-rata Lumba-lumba: " . $rata_lumba . " dan rata-rata Koala: " . $rata_koala;
        }
    }
}
