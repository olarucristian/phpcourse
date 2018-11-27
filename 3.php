<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>

    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php


        //if elseif if statement

        $name = "I love PHP";
        if ($name == "I love PHP") {

            echo "I love PHP";
        } elseif ($name == "123") {
            echo "Variable name is not $name";
        } else
            echo "I dont love PHP";
        echo "<br>";


        //for loop
        for ($i = 0; $i < 10; $i++) {
            echo $i . "<br>";
        }


        // switch loop
        switch (101) {

            case 10:
                echo "Your number is 10";
                break;
            case 12:
                echo "Your number is 12";
                break;
            case 13:
                echo "Your number is 13";
                break;
            default:
                echo "Your number is not here";

        }

        /*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



            Step 2: Make a forloop  that displays 10 numbers


            Step 3 : Make a switch Statement that test againts one condition with 5 cases

         */


        ?>


    </article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
