<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border: 1px solid black;  
            border-spacing: 0px;
        } 
        td, th {
            border: solid 1px black;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer Page</title>
</head>

<body style="display:flex">
    <div style="background-color:antiquewhite;">
        <?php  
            $pass = "default";
            $login = "NAN";
            if(isset($_POST['login']) && isset($_POST['password'])){
                if($_POST['login']){
                     $login = htmlentities( $_POST['login']);
                }
                if($_POST['password']){
                     $pass = htmlentities($_POST['password']);
                } 
    
            }else{
                echo "NAN";
            }

            echo "<h3>your login:  $login <br>your password: $pass </h3>";
        ?>

        <form action="index.php" method="GET">
            <input type="submit" value="Back"/>
            <input type="checkbox" name="check"/>
            <input type="text" name="req"/>
        </form>
    </div>

    <img src="imm.jpg" style="height: 200px; width:auto;" alt="Trees">


    <table style="margin-left: 100px;">
        <th colspan="4">Table</th>
     
        <tr>
            <td rowspan="4">rows</td>
            <td>h</td>
            <td>k</td>
            <td>h</td>
        </tr>

        <tr>
            <td>a</td>
            <td>f</td>
            <td>r</td>
        </tr>

        <tr>
            <td>a</td>
            <td>f</td>
            <td>r</td>
        </tr>

        <tr>
            <td>a</td>
            <td>f</td>
            <td>r</td>
        </tr>

    </table>   

    <table background="imm.jpg" style="margin-left:50px; color:white;">

        <tr>
            <th >Модель</th>
            <th>Производитель</th>
            <th>Цена</th>
        </tr>
        <tr>
            <td>Lumia 950</td>
            <td>Microsoft</td>
            <td>29900</td>
        </tr>
        <tr>
            <td>iPhone 6S</td>
            <td>Apple</td>
            <td>52900</td>
        </tr>
        <tr>
            <td>Nexus 6P</td>
            <td>Huawei</td>
            <td>49000</td>
        </tr>
            
    </table>
</body>

</html>


  
