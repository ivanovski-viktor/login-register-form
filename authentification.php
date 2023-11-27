<?php
    // $errorMessage = 0;
    if(isset($_POST['loginBtn'])){
    $dbConnection = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($dbConnection, "login-register") or die(mysqli_error());
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqlQuery = "SELECT Username, Password FROM users WHERE Username = '$username' AND Password = '$password'";
    $SQL = mysqli_query($dbConnection, $sqlQuery);
    
    $counting = mysqli_num_rows($SQL);
    if($counting === 1){
        header("Location: ./home.html");
    } else {
        // $errorMessage = 1;
        header("Location: ./login.php?error=1");
        exit();
    }
}
?>