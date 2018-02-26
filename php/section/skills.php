<?php
$skzap1 = "SELECT pl_value, ex_val FROM skills WHERE name LIKE 'section%'";
$skzap2 = "SELECT pl_name FROM section WHERE id_name='skills'";
$skzap3 = "SELECT pl_value FROM skills WHERE name='s1'";
$skzap4 = "SELECT pl_value FROM skills WHERE name='s2'";

$skco1=mysqli_query($con,$skzap1);
$skco2=mysqli_query($con,$skzap2);
$skco3=mysqli_query($con,$skzap3);
$skco4=mysqli_query($con,$skzap4);

$skname = mysqli_fetch_row($skco2);

while($sk1 = mysqli_fetch_row($skco1)){
    $skall[$sk1[1]] = $sk1[0];
}

?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
    <div class="my-auto">
        <h2 class="mb-5"><?php echo $skname[0]; ?></h2>
        <div class="subheading mb-3"><?php echo $skall[1]; ?></div>
        <ul class="list-inline list-icons">

<?php
        while($sk3 = mysqli_fetch_row($skco3)){
            echo'<li class="list-inline-item">
              <i class="devicons '.$sk3[0].'"></i>
            </li>';
        }

?>
          </ul>

        <div class="subheading mb-3"><?php echo $skall[2]; ?></div>
          <ul class="fa-ul mb-0">
                <?php
                while($sk4 = mysqli_fetch_row($skco4)){
                    echo'<li><i class="fa-li fa fa-check"></i>'.$sk4[0].'</li>';
                }

                ?>



          </ul>
        </div>
      </section>
