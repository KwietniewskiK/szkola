<?php

$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

echo $lorem,'<hr>';
$col =wordwrap($lorem,35,'<br>');
echo $col,'<hr>';

//czyszczenie zawartości bufora
ob_clean();

//usuwanie bialych znakow

$name= 'Kasia';
$name1= '   Kasia   ';


echo 'Dlugość zmiennej $name:', strlen($name),'<br>';//
echo 'Dlugość zmiennej $name1:', strlen($name1),'<br>';//

echo strlen(ltrim($name1)); //
echo strlen(rtrim($name1)); //
echo strlen(trim($name1)); //

//przeszukiwanie ciagu znakow
$address = 'Poznan, ul. Przelajowa 4, tel. (61) 445-35-20';
$search = stristr($address, 'tel.');
echo '<br>',$search,'<br>';


$mail = strstr('zsl@gmail.com', '@');
echo $mail,'<br>';

$mail = strstr('zsl@gmail.com', 64);
echo $mail,'<br>','<hr>';

#########################################################

$ciag1 = 'a';
$ciag2 = 'b';

echo strcmp($ciag1, $ciag2),'<br>'; // -1
echo strcmp('d', 'a'),'<br>'; // 1
echo strcmp('d', 'd'),'<br>'; //0
echo strcmp('aac', 'aa'),'<br>','<hr>'; //1

//pozycja

echo  strpos('abcdedg', 'bc'); //1
echo  strpos('abcdabcd', 'ab'),'<hr>'; //0

//sprawdź czy w ciagu o nazwie text1 znajduje sie caig text 2

$text1 = 'abcd';
$text2 = 'ab';

if (strpos($text1,$text2) === false){
  echo "ciag $text2 nie zostal znaleziony w ciagu $text1",'<hr>';
}else{
  echo "ciag $text2 zostal znaleziony w ciagu $text1",'<hr>' ;

}

//przetwarzanie cuagu znakow

$replace = str_replace('zsk','zsl', 'Technikum informatyczne - zsk');
echo $replace,'<hr>';

//substr

$surname = substr('Janusz Kowalski', 3);
echo $surname,'<br>'; //usz kowalski


$surname = substr('Janusz Kowalski',-3);
echo $surname,'<br>'; //usz kowalski


$surname = substr('Janusz Kowalski', -8, 5);
echo $surname,'<br>'; //usz kowalski

$surname = substr('Janusz Kowalski', 7, -3);
echo $surname,'<hr>'; //usz kowalski

#######################################
//zamiana polskich znakow

$login ='Żąkol';
$censore =array('ą', 'ę','ś','ć','ó','ź','ż','ń','ł');
$replace =array('a', 'e','s','c','o','z','z','n','l');

$newlogin = str_replace($censore,$replace,$login);
echo $newlogin,'<hr>';

ob_clean();
/*
napisz aplikacje canzurujaca zdanie podane przez uzytnkowanka
użytkownik podaje dane w formularzy
zmien slowa zsk ,zse i  zsł na ciag '**####**
wyswietl dane:
dane bez poprawy:
dane po poprawie
*/
 echo <<< FORM
 <form method="post">
   <input type="text" name="dane" placeholder="wpisz zdanie">
   <input type="submit" value="zatwierdz">
 </form>
FORM;

if (isset($_POST['dane'])){
  $data = $_POST['dane'];
  //echo $data;
}

  $censore = array('zsk','zse','zsl');
  $replace = '**####**';
  $correct = str_replace($censore,$replace,$data);
  echo "dane przed poprawa:$data<br>";
  echo "dane po poprawie: $correct<br>"







?>
