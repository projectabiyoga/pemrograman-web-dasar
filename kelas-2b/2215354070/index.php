<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kontrol</title>
    </head>
    <body>
       Struktur Kontrol (WHILE / FOR)
       <hr/>
       <?php
       echo "menampilkan angka 1-100 (vertikal";
       echo "<br/>";
       $awal=1;
       while ($awal<=100) //jika kondisi benar
       {
           //jalankan
           echo $awal;
           echo "<br/>";
           $awal=$awal+1;
       } 
       ?>
       <hr/><!-- comment -->
       <?php
       for($awal=1;$awal<=100;$awal++)
       {
            echo $awal;
           echo "<br/>";
       }
       ?>
    </body>
</html>
