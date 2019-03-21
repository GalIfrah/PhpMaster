
    

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

    If(isset($_POST['submit'])){
        try {


            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO caloriesCalc (id, firstname, lastname, email, phone)
    VALUES (:id, :firstname, :lastname, :email, :phone)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);

            $id = $_POST['id'];
            $firstname = $_POST['firstname'];
            $lastname= $_POST['lastname'];
            $email= $_POST['email'];
            $phone= $_POST['phone'];

            $stmt->execute();
            echo "New records created successfully";
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

//    $servername = "localhost";
//    $username = "newuser";
//    $password = "newpass";
//    $dbname = "newdb";
//
//
//    try {
//        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//        // set the PDO error mode to exception
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//        // sql to create table
//        $sql = "SELECT * FROM caloriesCalc WHERE id = 1";
//
//        $stmt = $conn->query($sql);
//
//        $stmt->execute();
//        // use exec() because no results are returned
//        $results = $stmt->fetch();
//
//
//        $email = $results["email"];
//
//        echo $email;
//    }
//    catch(PDOException $e)
//    {
//        echo $sql . "<br>" . $e->getMessage();
//    }
//
//    $conn = null;

    ?>
