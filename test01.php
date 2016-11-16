<?php

/// 2015-11-16->16 NOV 2015
function convertDate($date,$locale,$length){

     $monthNames = array(
             "en" => array(
                 "full" => array(1=>'January','February','March','April','May',
                 'June','July','August','September','October','November','December'),

                 "short" => array(1=>'Jan','Feb','Mar','Apr','May','Jun',
                 'Jul','Aug','Sep','Oct','Nov','Dec')
             ),
             "es" => array(
                 "full" => array(1=>'Enero','Febrero','Marzo','Abril','Mayo',
                 'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Deciembre'),

                 "short" => array(1=>'Ene','Feb','Mar','Abr','May','Jun',
                 'Jul','Ago','Sep','Oct','Nov','Dec')
             ),
         );

         $exploded = explode("-",$date);
         $year = $exploded[0];
         $month = $exploded[1];
         $day = $exploded[2];

         $month = $monthNames[$locale][$length][$month];
         $date = $day . " " . $month . ", " . $year;
         return $date;
 }
echo convertDate("2015-11-16","en","full");

 ?>
