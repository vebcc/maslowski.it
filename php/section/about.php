<?php
    $abzap1 = "SELECT pl_value FROM about WHERE id BETWEEN 0 AND 4";
    $abzap2 = "SELECT pl_value, ex_val FROM about WHERE name='media'";
    //$ab1=mysqli_query($abzap1,$stylesheet);

    $abco1=mysqli_query($con,$abzap1);
    $abco2=mysqli_query($con,$abzap2);

    $halfname = explode(" ",$main[5]);

    for($i=0;$ab1 = mysqli_fetch_row($abco1);$i++){
        $abt[$i] = $ab1[0];
    }

?>
<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0"><?php echo $halfname[0]; ?>
            <span class="text-primary"><?php echo $halfname[1]; ?></span>
          </h1>
          <div class="subheading mb-5"><?php echo $abt[0] . " · " . $abt[1] . " · "; ?>
            <a href="mailto:name@email.com"><?php echo $abt[2]; ?></a>
          </div>
          <p class="mb-5"><?php echo $abt[3]; ?></p>
          <ul class="list-inline list-social-icons mb-0">
            <?php
              while($abm = mysqli_fetch_row($abco2)){
                echo '<li class="list-inline-item">
                        <a href="' . $abm[1] . '">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-' . $abm[0] . ' fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>';
              }
              ?>
          </ul>
        </div>
      </section>
