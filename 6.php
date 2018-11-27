
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>

    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">
        <!--  Make a form that submits one value to POST super global  -->
        <form action = "6.php" method="post">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <br>
            <input type="submit" name="submit">
        </form>


        <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $users = ['Martin', 'Cristi', 'Igor'];

        if (isset($_POST['submit'])){

            //echo "Hello $username your password is $password";
        }

        if (strlen($username ) < 5){
            echo "Username has to be longer than 5 characters";

        }

        if (!in_array($username, $users)){
            echo "You are not allowed";
        }else{
            echo "Welcome";
        }


        ?>


    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>