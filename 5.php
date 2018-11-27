<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

        // pre-build math functions
        echo "<h4><center>Pre-build math functions</center></h4>";
        echo sqrt(100);
        echo "<br>";
        echo rand(1,100);
        echo "<br>";
        echo "<br>";

        //pre-built string function
        echo "<h4><center>Pre-built string function</center></h4>";
        echo "<br>";
        $test = "Republic of Moldova";
        echo strlen($test);
        echo "<br>";
        echo strtoupper($test);
        echo "<br>";
        echo "<br>";

        //pre-built Array function
        echo "<h4><center>Pre-built Array function</center></h4>";
        echo "<br>";
        $test2 = [12,14,23,321,4214];
        echo array_sum($test2);
        echo "<br>";
        echo count($test2);
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>