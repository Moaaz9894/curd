  <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'aiu';
    //$con = mysqli_connect($host, $user, $pass, $db);
    $con = new mysqli($host, $user, $pass, $db);

    if(!$con){
        die(mysqli_error($con));
    }
   