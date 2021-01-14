<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template</title>
    </head>

    <body  style="background:whitesmoke;background-image:url(imm.jpg);">
   
        <h1 style="color :white; margin-left:500px;">

            <a style="text-decoration:none; color:wheat;" 
            href="https://metanit.com/sharp/tutorial/1.1.php">Поле регистрации</a>

        </h1>
             <form action="Get.php" method="POST">

                <ul>
                    <li style="color:white;">
                        <h2 style="color:darkgoldenrod;">Логин</h2>
                        <input type="text" name="login" placeholder="Enter you login">
                    </li>

                    <li style="color:White">
                        <h2 style="color:darkgoldenrod;">Пароль</h2>
                        <input type="password" name="password" placeholder="Enter you password">
                    </li>
                </ul>

                <div style="margin-left:40px">
                    <input type="submit" value="Enter">
                </div>

                <div style="color:white; font-size:100px; margin-left:550px;">
                    <?php 
                        if($_GET['check']=='on') {
                            $REQ= $_GET['req'];
                            echo $REQ;
                        } 
                    ?>
                </div>
             </form>
            
    </body>

</html> 