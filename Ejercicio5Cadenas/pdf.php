<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php         
$file = './lorem-ipsum.pdf';
 $filename = 'test.pdf'; /* Note: Always use .pdf at the end. */                  
 header('Content-type: application/pdf');         
 header('Content-Disposition: inline; filename="' . $filename . '"');      
readfile($file); 
?>