<?php
    $exzap1 = "SELECT start_date, end_date, pl_name, pl_desc, pl_value FROM experience ORDER BY start_date DESC;";
    $exzap2 = "SELECT pl_name FROM section WHERE id_name='experience';";
    //$ab1=mysqli_query($abzap1,$stylesheet);

    $exco1=mysqli_query($con,$exzap1);
    $exco2=mysqli_query($con,$exzap2);

    //$halfname = explode(" ",$main[5]);

    $exname = mysqli_fetch_row($exco2);

?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5"><?php echo $exname[0]; ?></h2>
          <?php
              while($exm = mysqli_fetch_row($exco1)){
                echo
          '<div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">' . $exm[2] . '</h3>
              <div class="subheading mb-3">' . $exm[3] . '</div>
              <p>' . $exm[4] . '</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">' . $exm[0] . $exm[1] . '</span>
            </div>
          </div>
            ';
              }
          ?>

        </div>

      </section>
