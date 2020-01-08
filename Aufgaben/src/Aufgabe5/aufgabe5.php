<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" , initial-scale="1"
	, shrink-to-fit="no">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">


<title>Aufgabe 5</title>

<?php

function zufzahl($max, $anzahl, $stellen)
{
    echo '<table class="table table-striped table-hover table-responsive" id="table"> <tr>';
    echo '<th> Zufallszahlen </th>';
    
    for($j=1; $j<=$stellen; $j++)
    {
        echo "<th> gerundet".$j. "</th>";
    }
    
    echo "</tr></thead><tbody>";
    for ($i = 0; $i < $anzahl; $i ++) {
        
        $zzahl = rand(1, $max);
        /*
         $gerundet2 = abschneiden($zzahl, 2);
         $gerundet3 = abschneiden($zzahl, 3);
         echo "$zzahl $gerundet2 $gerundet3 </br>";
         */
        
        echo "<tr> <td> $zzahl </td>";        
        for ($j = 1; $j <= $stellen; $j ++) {
            echo "<td>". abschneiden($zzahl, $j)."</td>";
        }
        
        echo "</tr>";
    }
    echo "</tbody></table>";
    
}

function abschneiden($zahl, $stellen = 2)
{
    $base = pow(10, $stellen);
    return $zahl - ($zahl % $base);
}
?>
</head>

<body class="container">
	<h1>Zufallszahlen</h1>
<?php
zufzahl(20000, 20);

?>

</body>

</html>