<?php


var_dump($_REQUEST);

if ($_REQUEST['name']=='log') {
  header ('Refresh: 1; url=./../views/login.php');
}elseif ($_REQUEST['name']=='reg') {
  header ('Refresh: 1; url=./../views/register.html');
}else {
  echo 'FAIL.....';
}

?>