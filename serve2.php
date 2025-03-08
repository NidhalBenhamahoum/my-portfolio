<?php
$id=json_decode($_POST['ide']);

$projet1  = ['nome'=>'scrolling images','desc'=>'website galory images utilise tech scroll images',
'moyen'=>'moyen',
'img'=>['i1'=>'a1.jpg',
'i2'=>'a2.jpg',
'i3'=>'a3.jpg',
  'i4'=>'a4.jpg',
  'i5'=>'a5.jpg'],'langage'=>['js'=>'65','html'=>'15','css'=>'20']];

$projet2  = ['nome'=>'portfolio','desc'=>'My portfolio websit',
'moyen'=>'moyen',
'img'=>['i1'=>'a6.jpg',
'i2'=>'a7.jpg',
'i3'=>'a8.jpg',
'i4'=>'a9.jpg',
'i5'=>'a10.jpg'],'langage'=>['js'=>'55','php'=>'20','html&css'=>'25']]; 

$projet3  = ['nome'=>'quotes websit','desc'=>'websit content mon mielleur et favorit quoets',
'moyen'=>'petit',
'img'=>['i1'=>'a11.jpg',
              'i2'=>'a12.jpg',
              'i3'=>'a13.jpg',
                'i4'=>'a14.jpg',
                'i5'=>'a15.jpg'],'langage'=>['js'=>'75','html'=>'15','css'=>'10']];
switch($id){
    case 1: header('Content-Type: application/json; charset=utf-8');
    $jsonString = json_encode($projet1);
    echo $jsonString;
    break;
    case 2: header('Content-Type: application/json; charset=utf-8');
    $jsonString = json_encode($projet2);
    echo $jsonString;
    break; 
    case 3: header('Content-Type: application/json; charset=utf-8');
    $jsonString = json_encode($projet3);
    echo $jsonString;
    break;
    
    
}
?>