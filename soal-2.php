<?php

// Program BMI //


$data_1 = [
    'Mark' => [
        'berat' => 78,
        'tinggi' => 1.69
    ],
    'John' => [
        'berat' => 92,
        'tinggi' => 1.95
    ],
];

$data_2 = [
    'Mark' => [
        'berat' => 95,
        'tinggi' => 1.88
    ],
    'John' => [
        'berat' => 85,
        'tinggi' => 1.76
    ],
];

function bmi($weight, $height)
{
    return $weight / $height ** 2;
}

// function result($bmi_mark, $bmi_john, $ke)
// {

//     // variabel boolean
//     $markHigherBMI = $bmi_mark > $bmi_john ? true : false;

//     echo "<br>";
//     echo "Uji Data " . $ke . " :";
//     echo "<br>";

//     if ($markHigherBMI) {
//         echo "BMI Mark > BMI John";
//     } else {
//         echo "BMI Mark < BMI John";
//     }

//     echo "<br>";
//     echo "======================";
//     echo "<br>";
// }

function result($data, $ke)
{
    $bmi_mark = bmi($data['Mark']['berat'], $data['Mark']['tinggi']);
    $bmi_john = bmi($data['John']['berat'], $data['John']['tinggi']);

    // variabel boolean
    $markHigherBMI = $bmi_mark > $bmi_john ? true : false;

    echo "<br>";
    echo "Uji Data " . $ke . " :";
    echo "<br>";
    foreach ($data as $nama => $value) {
        echo "Nama : " . $nama . "<br>";
        echo "Berat : " . $value['berat'] . "Kg <br>";
        echo "Tinggi : " . $value['tinggi'] . "M <br>";
        echo "----------------------------------------";
        echo "<br>";
    }

    echo "Hasil : ";
    if ($markHigherBMI) {
        echo "BMI Mark > BMI John";
    } else {
        echo "BMI Mark < BMI John";
    }

    echo "<br>";
    echo "======================";
    echo "<br>";
}


// uji data 1
result($data_1, 1);

// uji data 2
result($data_2, 2);
