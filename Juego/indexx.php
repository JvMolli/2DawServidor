<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <script language="javascript">
      let jugador1 = document.getElementById("jugdor1");
      let jugador2 = document.getElementById("jugdor2");

      console.log(jugador1);
    </script>

    <style>
      body {
        background-image: url("./ludopata.jpg");
      }
      div {
        width: 45%;
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
    </style>
  </head>
  <body>
    <img src="Bingo.gif" alt="" />
    <div>
      <h1>Jugador 1</h1>
      <table id="jugador1">
        <tr>
          <td onclick="this.style.backgroundColor = 'Red';">5</td>
          <td onclick="this.style.backgroundColor = 'Red';">11</td>
          <td onclick="this.style.backgroundColor = 'Red';">13</td>
        </tr>
        <tr>
          <td>21</td>
          <td>26</td>
          <td>36</td>
        </tr>
        <tr>
          <td>43</td>
          <td>44</td>
          <td>51</td>
        </tr>
        <tr>
          <td>56</td>
          <td>64</td>
          <td>73</td>
        </tr>
        <tr>
          <td>77</td>
          <td>84</td>
          <td>86</td>
        </tr>
      </table>
    </div>

    <div>
      <h1>Jugador 2</h1>
      <table id="jugador2">
        <tr>
          <td>6</td>
          <td>7</td>
          <td>16</td>
        </tr>
        <tr>
          <td>22</td>
          <td>29</td>
          <td>30</td>
        </tr>
        <tr>
          <td>34</td>
          <td>40</td>
          <td>46</td>
        </tr>
        <tr>
          <td class="blue1">50</td>
          <td>54</td>
          <td>66</td>
        </tr>
        <tr>
          <td>71</td>
          <td>81</td>
          <td class="blue1">85</td>
        </tr>
      </table>
    </div>

    <script>
      var a = document.getElementsByClassName("blue1");
      for (var i = 0; i < a.length; i++) a[i].style.backgroundColor = "blue";
    </script>
  </body>
</html>
