<?php

if(isset($_GET["valor"])){
    $var1=$_GET["valor"];
    $var2=$_GET["numero"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(isset($var1))
    {
        for($i=0;$i<$var1;$i++)
        {
            echo '<p id="h'.$i.'"> Hola numero '.$i.'</p>';
        }
    }
    
?>

<form action="procesa.php" method="POST">
    <input type="text" name="datoa" placeholder="dato 1">
    <input type="text" name="datob" placeholder="dato 2">
    <input type="submit" value="Enviar">
</form>
    
<script>
<?php
for($i=0;$i<$var1;$i++)
{
    echo 'elemento'.$i.' = document.getElementById("h'.$i.'");';
}
    
?>


</script>


</body>
</html>