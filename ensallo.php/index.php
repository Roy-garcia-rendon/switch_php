<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>selecicona una funcion</h1>
    <form action="" method="GET">
        <select name="conv" id="">
            <option value="yarda">yarda</option>
            <option value="kilometro">kilometro</option>
            <option value="metro">metro</option>
            <option value="tarea">tarea</option>
            <option value="sa">sa</option>
        </select>
        <br>
        <label for="resu">ingresa tus medidas</label>
        <input type="float" name="resu">
        <br>
        <button name="btn" value="btn" id="btn" type="submit">calcula</button>
   <?php
   if(isset($_GET['btn'])){
    $conv=$_GET['conv'];
    $resu=$_GET['resu'];
    switch($conv){
        case "yarda";{
            $co=$resu/1;
            echo"resultado: $co";
            break;
        }
        case "kilometro";{
            $co=$resu/5;
            echo"resultado: $co";
            break;
        }
        case "metro";{
            $co=$resu/1.5;
            echo"resultado: $co";
            break;
        }
        case "tarea";{
            $co=$resu/100;
            echo"resultado: $co";
            break;
        }
        case "sa";{
            $co=$resu/11;
            echo"resultado: $co";
            break;
        }
    }
   }
   ?>
    </form>
</body>
</html>