<?php
$edzap1 = "SELECT start_date, end_date, pl_name, pl_desc, pl_value FROM education ORDER BY start_date DESC;";
$edzap2 = "SELECT pl_name FROM section WHERE id_name='education';";
//$ab1=mysqli_query($abzap1,$stylesheet);

$edco1=mysqli_query($con,$edzap1);
$edco2=mysqli_query($con,$edzap2);

//$halfname = explode(" ",$main[5]);

$edname = mysqli_fetch_row($edco2);

?>

       <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
            <h2 class="mb-5"><?php echo $edname[0]; ?></h2>

            <?php
            while($edm = mysqli_fetch_row($edco1)){
                echo'
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                    <h3 class="mb-0">' . $edm[2] . '</h3>
                    <div class="subheading mb-3">' . $edm[3] . '</div>
                    <div>' . $edm[4] . '</div>
            </div>
            <div class="resume-date text-md-right">
                  <span class="text-primary">' . $edm[0] . $edm[1] . '</span>
            </div>
          </div>
';
}
?>
        </div>
      </section>
