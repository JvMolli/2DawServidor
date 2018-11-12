<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <style>
      div {
        width: 50%;
        float: left;
        align-items: center;
      }

      table {
        align-items: center;
        background-color: aliceblue;
      }

      td {
        border: 1px solid black;
        padding: 25px;
      }

      button{
            margin-top:50px;
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: #ffffff;
            background-color: #1883ba;
            border-radius: 6px;
            border: 2px solid #0016b0;
        } 
      
    </style>
  </head>
  <body>
  <center>    
    <img src="Bingo.gif" alt="" />
<center>   
  <?php
        require('./crearBolas.php');
        require('./cartones.php');
        // $num=rand ( 0 , 9 );
        // $num2=rand ( 0 , 9 );
        // $pepe=createBolas($x,$y,$bingoImg);
        // $primeraBola=getBolas($num,$pepe);
        // echo $primeraBola;

        session_start();
        if(!isset($_SESSION["jugador1"]) && !isset($_SESSION["jugador1"]) && !isset($partida)){
            $_SESSION["jugador1"] = array(5,11,13,21,26,36,43,44,51,56,64,73,77,84,86);
            $_SESSION["jugador2"] = array(6,7,16,22,29,30,34,40,46,50,54,66,71,81,85);
            $partida=array();
        }


        // print_r($_SESSION["jugador1"]);
        // echo "<br><br><br>";
        // print_r($_SESSION["jugador2"]);
        // echo "<br><br><br>";

        $num=rand ( 0 , 9 );
        $num2=rand ( 0 , 9 );
        $pepe=createBolas($x,$y,$bingoImg);
        $primeraBola=getBolas($num,$pepe);
        $segundaBola=getBolas($num2,$pepe);
        echo "<center>";
        echo $primeraBola;
        echo $segundaBola;
        echo "</center>";
        echo '<center><a href="bingo.php"><button>Otra Bola</button></a><br><br><br></center>';
        $numBola= $num . $num2;
        if($numBola<10)$numBola = $num2;

        for ($i=0; $i<count($_SESSION["jugador1"]); $i++) { 
            if ($numBola==$_SESSION["jugador1"][$i]) {
                array_splice($_SESSION["jugador1"],$i,1);
                $estaEn=$numBola;
            }
        }
        for ($i=0; $i<count($_SESSION["jugador2"]); $i++) { 
            if ($numBola==$_SESSION["jugador2"][$i]) {
                array_splice($_SESSION["jugador2"],$i,1);
                $estaEn=$numBola;
            }
        }
        if (count($_SESSION["jugador1"])==0){
            echo "<h1>Ha ganado el Juegador 1</h1>";
            echo "<audio src='Bingo.mp3' controls autoplay loop>";
            session_destroy();
        }elseif(count($_SESSION["jugador2"])==0){
            echo "<h1>Ha ganado el Juegador 2</h1>";
            session_destroy();
        }

        // print_r($_SESSION["jugador1"]);
        // echo "POLLAS2<br>";
        // print_r($_SESSION["jugador2"]);
        ?>
    <center>    
    <div>
      <h1>Jugador 1</h1>
      <table>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">5</td>
          <td onclick="this.style.backgroundColor = 'Red';">11</td>
          <td onclick="this.style.backgroundColor = 'Red';">13</td>
        </tr>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">21</td>
          <td onclick="this.style.backgroundColor = 'Red';">26</td>
          <td onclick="this.style.backgroundColor = 'Red';">36</td>
        </tr>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">43</td>
          <td onclick="this.style.backgroundColor = 'Red';">44</td>
          <td onclick="this.style.backgroundColor = 'Red';">51</td>
        </tr>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">56</td>
          <td onclick="this.style.backgroundColor = 'Red';">64</td>
          <td onclick="this.style.backgroundColor = 'Red';">73</td>
        </tr>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">77</td>
          <td onclick="this.style.backgroundColor = 'Red';">84</td>
          <td onclick="this.style.backgroundColor = 'Red';">86</td>
        </tr>
      </table>
    </div>

    <div>
      <h1>Jugador 2</h1>
      <table id="jugador2">
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">6</td>
          <td onclick="this.style.backgroundColor = 'Red';">7</td>
          <td onclick="this.style.backgroundColor = 'Red';">16</td>
        </tr>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">22</td>
          <td onclick="this.style.backgroundColor = 'Red';">29</td>
          <td onclick="this.style.backgroundColor = 'Red';">30</td>
        </tr>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">34</td>
          <td onclick="this.style.backgroundColor = 'Red';">40</td>
          <td onclick="this.style.backgroundColor = 'Red';">46</td>
        </tr>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">50</td>
          <td onclick="this.style.backgroundColor = 'Red';">54</td>
          <td onclick="this.style.backgroundColor = 'Red';">66</td>
        </tr>
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">71</td>
          <td onclick="this.style.backgroundColor = 'Red';">81</td>
          <td onclick="this.style.backgroundColor = 'Red';">85</td>
        </tr>
      </table>
    </div>
    </center> 
  </body>
</html>
