    <!doctype html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>


    <form action="FormTests.php", method="post">


    <input type="text", placeholder="Enter Username", name="Username">

    </br>  </br>

    <input type="password", placeholder="Enter Password", name="Password">

    </br>  </br>

    <input type="checkbox", name="cookies"> accept cookies?

    </br>  </br>

    <input type="submit", name="submit">
    
    </form>
    

    <?php
//
//    global $_POST;
//
//        global $cookie_image;
//
//        $cookie_image = "<img src='images/087d17eb-500e-4b26-abd1-4f9ffa96a2c6.jpg'>";
//
//
//    if (isset($_POST['submit'])) {
//
//
//        if (isset($_POST['cookies'])){
//
//            setcookie("accepted_cookies", "send_cookie",exp(time() + 60*60*24*7));
//
//        }
//
//
//
//    }
//
//
//
//    if (isset($_COOKIE['accepted_cookies'])){
//
//
//        echo $cookie_image;
//
//    }



    $servername = "localhost";
    $username = "newuser";
    $password = "newpass";
    $dbname = "newdb";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to create table
        $sql = "SELECT * FROM `caloriesCalc`";

        // use exec() because no results are returned
        $results = $conn->query($sql);

        if $results=>num_
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

    ?>

    </body>
    </html>


