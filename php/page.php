<?php
$def = "SELECT pl_value FROM settings WHERE id BETWEEN 1 AND 7";
$stylesheet = "SELECT pl_value FROM settings WHERE name='stylesheet'";
$section = "SELECT id_name, pl_name, include FROM section ORDER BY ord";

mysqli_set_charset( $con, 'utf8');

$u1=mysqli_query($con,$def);

for($i=0;$t1 = mysqli_fetch_row($u1);$i++){
    $main[$i] = $t1[0];
}

// Wstawianie wstepnej czesci strony wraz z meta wraz z ustawieniami
echo $main[0] .
     "<html lang='" .$main[1]."'>
      <head>
        <meta charset='".$main[2]."'>
        <meta name='viewport' content='".$main[3]."'>
        <meta name='description' content='".$main[4]."'>
        <meta name='author' content='".$main[5]."'>
        <title>".$main[6]."</title>";

// Wstawianie deklaracji wszystkich styli

$u2=mysqli_query($con,$stylesheet);

while($t2 = mysqli_fetch_row($u2)){
    echo "<link href='".$t2[0]."' rel='stylesheet'>";
}

?>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-block d-lg-none"><?php echo $main[6]; ?></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
<?php
          $u3=mysqli_query($con,$section);

          while($t3 = mysqli_fetch_assoc($u3)){
            echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#'.$t3["id_name"].'">'.$t3["pl_name"].'</a>
            </li>';
          }
?>
            </ul>
        </div>
      </nav>
      <div class="container-fluid p-0">
<?php
     $u4=mysqli_query($con,$section);

     while($t4 = mysqli_fetch_assoc($u4)){
        include("section/".$t4['id_name'].".php");
     }
?>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.js"></script>

  </body>

</html>




