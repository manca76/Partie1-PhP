<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$titre = 'TEST';    
$name = 'Manca';
$firstName = 'Sabrina';
echo $titre . ' '. $name . ' ' . $firstName ;
?>
<p><?php echo $firstName ?></p>

<div style="height:20px";></div>
<?php 
$object = 'EXO 1: Créer 2 variables';
$message = 'Les afficher.';?>
<p><?php echo $object ?></p>
<p><?php echo $message ?></p>

<div style="height:20px";></div>
<?php 
$name = 'EXO 2: Manca';
$lastName = 'Sabrina'; 
$age = 40; ?>
<p><?php echo $name ?></p>
<p><?php echo $lastName ?></p>
<p><?php echo $age ?></p>

<div style="height:20px";></div>
<?php 
$km = 'EXO 3:   1';
$km2 = '3'; 
$km3 = '125'; ?>
<p><?php echo $km ?></p>
<p><?php echo $km2 ?></p>
<p><?php echo $km3 ?></p>

<div style="height:20px";></div>
<?php 
$name = 'Sabrina'; ?>
<p><?php echo 'EXO 4 :   Bonjour ' . $name . ' ,' . 'comment ça va ?'?></p>

<div style="height:20px";></div>
<?php 
$answer = 'non';
if($answer == 'yes')
{
  echo "EXO 5:  vous avez répondu OUI";
}
else
{
  echo "EXO 5:  Vous avez répondu NON";
}
?>

<div style="height:20px";></div>
<?php 
$number = '140';
?>
<p><?php echo ($number+30)/2 ?></p>

</body>
</html>