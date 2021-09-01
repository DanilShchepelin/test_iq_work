<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datenow = getdate();
    $date = $_POST['date'];
    $years = $_POST['years'];
    $summ = $_POST['summ'];
    $summadd = $_POST['summadd'];
    $daysy = 365;
    $percent = 0.1;
    $daysn = date("d", strtotime($date));

    if ($_POST['radio'] == 'yes') {
        if ($summadd = $_POST['summadd'] == '') {
            $summadd = 0;
        }
        else {
            $summadd = $_POST['summadd'];
        }
    }
    else {
        $summadd = 0;
    }

    $summ = $summ - 1 + ($summ - 1 + $summadd) * $years * ($percent / $daysy);
    echo$summ;
}
?>