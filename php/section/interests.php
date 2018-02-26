<?php
$inzap1 = "SELECT pl_value FROM interests ORDER BY ord;";
$inzap2 = "SELECT pl_name FROM section WHERE id_name='interests';";
//$ab1=mysqli_query($abzap1,$stylesheet);

$inco1=mysqli_query($con,$inzap1);
$inco2=mysqli_query($con,$inzap2);

$inname = mysqli_fetch_row($inco2);

?>


       <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
            <h2 class="mb-5"><?php echo $inname[0]; ?></h2>
            <?php
            while($inm = mysqli_fetch_row($inco1)){
                echo'<p>'. $inm[0] .'</p>';
            }
        ?>

        </div>
</section>
