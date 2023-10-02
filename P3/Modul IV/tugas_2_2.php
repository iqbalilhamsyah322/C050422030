<?php
    $nilai = 90;

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $grade = "A: Sangat Baik";
        break;
    case ($nilai >= 76 && $nilai < 89):
        $grade = "B: Baik";
        break;
    case ($nilai >= 60 && $nilai < 75):
        $grade = "C: Cukup";
        break;
    case ($nilai >= 50 && $nilai < 59):
        $grade = "D: Hampir Cukup";
        break;
    case ($nilai >= 0 && $nilai < 49):
        $grade = "E: Kurang";
        break;
    default:
        $grade = "Nilai tidak valid";
        break;
}
echo "Grade : ".$grade;
?>