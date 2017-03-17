<?php


//------------------General---------------------- 

$app->match('/Acceuil',"ControleurGeneral::Acceuil")
->bind('Acceuil');
$app->match('/',"ControleurGeneral::Acceuil")
->bind('/');
$app->match('/BTS',"ControleurGeneral::BTS")
->bind('BTS');
$app->match('/Contact', 'ControleurGeneral::Contact')
->bind('contact');

//------------------Projets---------------------- 

$app->match('/projets',"ControleurProjets::Projets")
->bind('Projets');


//------------------Stages---------------------- 

$app->match('/stages',"ControleurStages::Stages")
->bind('acceuil');
$app->match('/Stage1', "ControleurStages::Stage1")
->bind('Stages');
$app->match('/Stage2', "ControleurStages::Stage2")
->bind('Stage2');



?>

