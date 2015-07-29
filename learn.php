<html>
<head>
<title>information gathered</title>
</head>
<body>

<?php

$usersName = $_POST['username'];
$streetAddress = $_POST['streetaddress'];
$cityAddress = $_POST['cityaddress'];
echo $usersName . "</br>";
echo $streetAddress . "</br>";
echo $cityAddress . "</br>";

$str = <<<EOD
The customers name is
$usersName </br> and they live at $streetAddress in $cityaddress </br>
EOD;
echo $str

date_default_timezone_set('UTC');
echo date:'h:i:s:u a, l F jS Y e';


?>
</body>
</html>




 