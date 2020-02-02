<?php

if ( !mysql_connect("localhost","root","admin") ) {
    echo 'Nie moge polaczyc sie z baza danych';
 	 exit (0);
 }
 //Wybieramy baze danych na serwerze mysql ktora zawiera tabele
 //uzytkownicy gdzie sa login i hasla
 if ( !mysql_select_db("easy_choice") ) {
    echo 'Blad otwarcia bazy danych';
 	 exit (0);
 }
?>