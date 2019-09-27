<?php

    echo $_SERVER['SCRIPT_NAME'];
    echo $_SERVER['SERVER_PROTOCOL'];
    echo $_SERVER['DOCUMENT_ROOT'];


    //$localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
    $localFile = $_SERVER['DOCUMENT_ROOT'];
    $localFile =  $_SERVER['SCRIPT_NAME'];

    echo '<br>',$localFile;
    #########################################################################
    //stałe
    //nazwy z dużych liter


    define('NAME','Janusz');
    echo '<br>',NAME;

    define ('SURNAME','Kwietniewski');
    echo '<br>' , SURNAME;

    define ('COUNTRY','pOLSKA',true);
    echo '<br>' ,country,'<hr>';


    //stałe predefiniowane

    echo PHP_VERSION; //7.3.9
    echo gettype(PHP_VERSION), '<br>'; //string

if (PHP_VERSION > 5.6) {
echo 'nowa wersja PhP<br>';
}else{
  echo'stara wersja php<br>';
}

echo PHP_OS;
echo __LINE__;
echo __FILE__;
echo __DIR__;


 ?>
