<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-image: url('foto.jpg');
            background-size: cover;
        }
        div {
            display: grid;
            grid-template-columns: auto auto auto auto;
        }
        table{
			margin-left: 20px;
			margin-right: 20px;
            display: inline-block;
            border-collapse: collapse;
            
			
		}
		table tr th{
			color: black;
            padding: 0 ;

            
		}
        .weekdays th{
            background-color: azure;
            background-color: rgba(230, 255, 255, 0.3)
        }

		tr td{
			text-align: center;
			background-color: rgba(102, 255, 255, 0.5);
			border-collapse: collapse;
            border: 1px solid black;
			overflow: hidden;
            padding: 0.5em 1em;
			
		}
		td:nth-child(6n){
			background-color: #bdfbfc;

		}
		td:nth-child(7n){
			background-color: red;
		}
    
    </style>
</head>
<body> 

<?php

function week(){
    return "<th>L</th> <th>M</th> <th>X</th> <th>J</th> <th>V</th> <th>S</th> <th>D</th>";
}
function calendar($year){
    $meses = [
    'Enero' => 31,
    'Febrero' => 28, 
    'Marzo' => 31,
    'Abril' => 30,
    'Mayo' => 31,
    'Junio' => 30, 
    'Julio' => 31,
    'Agosto' => 31,
    'Septiembre' => 30,
    'Octubre' => 31, 
    'Noviembre' => 30,
    'Diciembre' => 31,
    ];

    $anno = $year;
    $numMonth = 1;
    echo '<div>';
    foreach ($meses as $month => $days) {
        echo "<table style='float:left'>";
        echo "<tr><th style='color:#0066ff'><h3>$month</h3></th></tr>";
        echo "<tr class='weekdays'>" . week() . "</tr>";
        echo "<tr>";
        if($numMonth===2 && $anno%4===0 && ($anno%100 !== 0 || $anno%1000 === 0)){ 
            $days=29;
        } 
        $mktime = mktime(0,0,0, $numMonth, 1, $anno);
        $date = date("w", $mktime)-1;
        if($date < 0){
            $date=6;
        }
        for ($i=1; $i <= $days+$date; $i++) { 
            if($i<=$date) {
            echo "<td></td>";  
            }else{
                echo "<td>".($i-$date)."</td>";
                if($i%7===0) {echo "</tr><tr>";}
            }
        }
        echo "</tr>";
        $numMonth++;
        echo "</table>";
    }
    echo "</div>";

}

function select(){
	echo '<form action="./index.php" method="POST">';
	echo 'Selecciona el año  <input type="number" name="anno" id="fecha" min="1492" max="2100">';
	echo '<input type="submit" name="entry">';
	echo '</form>';
}

if (!isset($_POST['entry'])) {

    select();

    echo "<h2>2018</h2>";
    calendar(2018);
  
}else{
    select();
    $year=$_POST['anno'];
    echo "<h2>$year</h2>";
	calendar($year);
}

?>


</body>
</html>

