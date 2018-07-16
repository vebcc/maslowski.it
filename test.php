<html>
    <head>
        <meta charset="UTF-8">

    </head>
    <body>
<?php
$servername = "localhost";
$username = "maslowski.it";
$password = "LihR9SUmf7vIGZac";
$dbname = "maslowski.it";

$con = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset( $con, 'utf8');

if ($con->connect_error) {
    die("Blad polaczenia: " . $con->connect_error);
}

$section = "SELECT id_name, pl_name, include FROM section ORDER BY ord";

$u3=mysqli_query($con,$section);

          while($t3 = mysqli_fetch_assoc($u3)){
            echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#'.$t3["id_name"].'">'.$t3["pl_name"].'</a>
            </li>';
          }


?>
    </body>
</html>
