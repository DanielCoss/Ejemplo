<?php
    $var1 = $_POST["datoa"];
    $var2 = $_POST["datob"];
    if(is_numeric($var1) && is_numeric($var2))
        echo($var1+$var2);
    else
        echo("Se introduducieron datos no numericos, favor de regresar");

    $myfile = fopen("archivo.txt","w") or die("no se pudo abir el archivo");
    fwrite($myfile,$var1." ");
    fwrite($myfile,$var2." ");
    fwrite($myfile,$var1+$var2);
    fclose($myfile);
    
    $myfile = fopen("archivo.txt", "r") or die("No se pudo abrir el archivo!");
    $linea= fread($myfile,filesize("archivo.txt"));
    echo nl2br("\n".$linea);
    fclose($myfile);

    $search1 = strval($var1);
    $search2 = strval($var2);
    $search3 = strval($var1+$var2);

    $pos1 = strpos($linea, $search1);
    if($pos1 === false)
        echo nl2br("\nNo se ha encontrado el dato 1");
    else{
        $pos2 = strpos($linea, $search2, $pos1+2);
        if($pos2 === false)
            echo nl2br("\nNo se ha encontrado el dato 2");
        else{
            $pos3 = strpos($linea, $search3, $pos2+2);
            if($pos3 === false)
                echo nl2br("\nNo se ha encontrado el dato 3");
            else{
                echo nl2br("\n Se encontraron todos los datos en las posiciones:\n");
                echo "$pos1 $pos2 $pos3 Su suma es:";
                $temp = intval(substr($linea,$pos1,$pos2)) + intval(substr($linea,$pos1,$pos2)) + intval(substr($linea,$pos3,strlen($linea)));
                echo nl2br("\n $temp");
            }
        }
    }
?> 