<?php
function __autoload($class)
{
    require_once "Classes/$class.php";
}
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8"/>
    <title>Students</title>
</head>
<body>


<?php include "Components/content.php"?>

</body>
</html>