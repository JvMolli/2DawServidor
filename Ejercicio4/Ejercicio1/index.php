<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body{
            background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/LinkinParkBerlin2010.jpg/1200px-LinkinParkBerlin2010.jpg);
            background-size: cover;
        }
        div{

            background-color: brown;
            width: 370px;
            height: 200px;
            margin: 0 auto;
            margin-top: 300px;
            text-align: center;
            padding: 25px;

        }
       
    </style>

</head>
<body>
    <div>
    <form action="upload.php" method="post" ENCTYPE="multipart/form-data">
        <label for="">Nombre</label>
        <input type="text" name="nombre"><br><br>
        <input type="file" name="imagen"><br><br>
        <input type="submit" name='Enviar'>
    </form>

    </div>
   
</body>
</html>