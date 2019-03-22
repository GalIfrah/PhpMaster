
    

    <?php

    require ("DbService.php");

    $db_service = new dbService();

    $conn = $db_service->MysqlConnect("localhost", "newuser", "newpass", "newdb");




    // create new user

    If(isset($_POST['submit_registration'])){

        try {


            $stmt = $conn->prepare("INSERT INTO caloriesCalc (id, firstname, lastname, email,password, phone)
                    VALUES (:id, :firstname, :lastname, :email, :password, :phone)");

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':phone', $phone);

            $id = $_POST['id'];
            $firstname = $_POST['firstname'];
            $lastname= $_POST['lastname'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $phone= $_POST['phone'];

            $stmt->execute();

            echo "New user created successfully";

        }catch(PDOException $e){

            echo "Error: " . $e->getMessage();
        }

        $conn = null;
    }



    // check if user exist


    if(isset($_POST['submit_login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "SELECT email, password, firstname FROM caloriesCalc WHERE email='$email'";

        $stmt = $conn->query($sql);

        $stmt->execute();
        // use exec() because no results are returned
        $results = $stmt->fetch();

        if($results['email'] == $email && $results['password'] == $password){

            echo "Hello ". $results['firstname'];
        }

        else{

            echo "one of your credentials wrong - please try again";
        }
    }



//
//    try {
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
