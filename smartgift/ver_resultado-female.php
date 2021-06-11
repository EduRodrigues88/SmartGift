<?php

$opt1 = 0;
$opt2 = 0;
$opt3 = 0;
$opt4 = 0;
$opt5 = 0;



$opt1 = $_POST['perg1'];
$opt2 = $_POST['perg2'];
$opt3 = $_POST['perg3'];
$opt4 = $_POST['perg4'];
$opt5 = $_POST['perg5'];



if($opt1 == "opt1" && $opt2 == "opt2" && $opt3 == "opt2" && $opt4 == "opt1" && $opt5 == "opt1"){

    echo '<meta http-equiv="refresh" content="0;./presente-female/fenty.html"></meta>';
}

if($opt1 == "opt1" && $opt2 == "opt1" && $opt3 == "opt1" && $opt4 == "opt2" && $opt5 == "opt1"){

echo '<meta http-equiv="refresh" content="0;./presente-female/bolsa.html"></meta>';
}

if($opt1 == "opt1" && $opt2 == "opt2" && $opt3 == "opt1" && $opt4 == "opt1" && $opt5 == "opt1"){

echo '<meta http-equiv="refresh" content="0;./presente-female/tenis.html"></meta>';
}

?>