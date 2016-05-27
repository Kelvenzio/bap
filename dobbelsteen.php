<html>
    <head>
        <meta charset="utf-8">
        <title>Dobbelsteen Opdracht</title>
    </head>
</html>
<body>
<h1>Kelvin Fung MD1A</h1>
<?php

function  dobbelsteen($worp){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);
    $red = imagecolorallocate($im, 0, 204, 0);

    if($worp == 2 OR $worp == 4 OR $worp == 5 OR $worp == 6) {
    imagefilledellipse($im, 50, 50, 40, 40, $red); //1
    }

    if($worp == 3 OR $worp == 4 OR $worp == 5 OR $worp == 6) {
    imagefilledellipse($im, 150, 50, 40, 40, $red); //2
    }

    if($worp == 6) {
    imagefilledellipse($im, 50, 100, 40, 40, $red); //3
    }

    if($worp == 1 OR $worp == 3 OR $worp == 5) {
    imagefilledellipse($im, 100, 100, 40, 40, $red); //4
    }

    if($worp == 6) {
    imagefilledellipse($im, 150, 100, 40, 40, $red); //5
    }

    if($worp == 3 OR $worp == 4 OR $worp == 5 OR $worp == 6) {
    imagefilledellipse($im, 50, 150, 40, 40, $red); //6
    }

    if($worp == 2 OR $worp == 4 OR $worp == 5 OR $worp == 6) {
    imagefilledellipse($im, 150, 150, 40, 40, $red); //7
    }
    imagepng($im,$worp . ".png");
    imagedestroy($im);
    print " <img class='dobbelsteen' src=dobbelsteen$worp.png?".date("U").">";
}

for ($i=0 ;  $i <5   ; $i++)
{$worp = rand(1,6);
    dobbelSteen($worp);
    array_push($worpje, $worp);
}
function analyse($worp2){
    $Score = array (0,0,0,0,0,0,0);
    for ($i = 1 ; $i <= 6 ; $i++){\
        for ($j = 0 ; $j <5 ; $j++){
            if ($worp2[$j] == $i){
                $Score[$i]++;
            }}}
    return $Score;
}
$result = "You got nothing";

$worp2 = analyse($worpje);
rsort($worp2);
if($worp2['0'] == 5){
    $result = "You got: poker";
}
if($worp2[0] == 4){
    $result = "You got: carre";
}
if($worp2[0] == 3 || $worp2[1] == 2){
    $result = "You got: full house";
}
if($worp2[0] == 3){
    $result = "You got: 3 of a kind";
}
if($worp2[0] == 2 || $worp2[1] == 2){
    $result = "You got: two pair";
}
echo '<h2>'.$result .'</h2>';




?>



<form>
    <input id="button" type="submit" value="ROLL">
</form>
