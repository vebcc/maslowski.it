<?php
$awzap1 = "SELECT pl_value FROM awards ORDER BY ord;";
$awzap2 = "SELECT pl_name FROM section WHERE id_name='awards';";

$awco1=mysqli_query($con,$awzap1);
$awco2=mysqli_query($con,$awzap2);

$awname = mysqli_fetch_row($awco2);

?>
        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
            <h2 class="mb-5"><?php echo $awname[0]; ?></h2>
          <ul class="fa-ul mb-0">

              <?php
              while($awm = mysqli_fetch_row($awco1)){
                  echo'<li><i class="fa-li fa fa-trophy text-warning"></i>'. $awm[0] .'</li>';
              }
              ?>
          </ul>
        </div>
      </section>
