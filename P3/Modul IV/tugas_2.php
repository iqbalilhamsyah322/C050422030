<?php
   $nilai = 85;

   if ($nilai >= 90 && $nilai <= 100) {
       echo "Grade A: Baik Sekali";
   }else if ($nilai >= 76 && $nilai < 89) {
       echo "Grade B: Baik";
   }else if ($nilai >= 60 && $nilai < 76) {
       echo "Grade C: Cukup";
   }else if ($nilai >= 50 && $nilai < 59) {
       echo "Grade D: Hampir Cukup";
   }else if ($nilai >= 0 && $nilai < 49) {
       echo "Grade E: Kurang";
   }else {
       echo "Nilai tidak valid";
   }