<?php
/*****Initialisatie*****/

$_srv = $_SERVER['PHP_SELF'];

/*********Verwerking***********/

if(!isset($_POST['submit']))
{
    //******Formulier initialisatie*********
    $_output="
    <form method=post action=$_srv>
    <label>Maand / Jaar:</label>
    <input type=month name=maandJaar>
    <input type=submit name=submit value=Verzenden>
    </form>";
}
else
{
    //*****Formulier Verwerking*************
    $_maandJaar= $_POST["maandJaar"]!=""?
        $_POST["maandJaar"]:"1970-1";
    list($_jaar, $_maand)= explode("-",$_maandJaar,2);
    $_aantalDagen= cal_days_in_month(CAL_GREGORIAN,$_maand,$_jaar);
    
    //*****Verwerking*******
    $_output="<h1>Aantal dagen in de maand</h1>
    <h2>$_maand / $_jaar &nbsp;==> &nbsp;$_aantalDagen</h2>";
}

/************
*   output  *
************/
echo($_output);
?>