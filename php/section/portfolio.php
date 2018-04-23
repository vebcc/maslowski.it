<?php
$pozap1 = "SELECT pl_name, pl_value, img, www FROM portfolio WHERE ord!=0 ORDER BY ord;";
$pozap2 = "SELECT pl_name FROM section WHERE id_name='portfolio';";

$poco1=mysqli_query($con,$pozap1);
$poco2=mysqli_query($con,$pozap2);

$poname = mysqli_fetch_row($poco2);

?>
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio">
    <div class="my-auto">
        <h2 class="mb-5"><?php echo $poname[0]; ?></h2>
        <div class="row">

            <?php
            while($pom = mysqli_fetch_row($poco1)){
                echo'
                 <div class="col-md-4 col-sm-6 col-xs-12 portf">
                    <a href="'. $pom[3] .'" class="portlink">
                        <img src="img/portfolio/'.$pom[2].'" class="portfimg">
                        <h3>'. $pom[0] .'</h3>
                        <p>'. $pom[1] .'</p>
                    </a>
                 </div>';
            }
            ?>
        </div>
    </div>
</section>
