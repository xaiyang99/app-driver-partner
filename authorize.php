 <?php
    include 'connection.php';
        session_start();
        // @$username = $_SETSTRING($conn, $_POST['username']);
        $username = $_POST['username'];
      
        @$password = md5($_POST['password']);
        // $sql = "SELECT * FROM tb_users WHERE phoneNumber = '$username' AND password='$password' AND status='ACTIVED' AND role='DRIVER'";
        $sql = "SELECT * FROM tb_users WHERE phoneNumber = '$username' AND password='$password' AND status='ACTIVED'";

        $_DATA_USERS = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($_DATA_USERS);
        if ($count == 1) {
            $row = mysqli_fetch_array($_DATA_USERS);
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['phoneNumber'] = $row['phoneNumber'];
            $_SESSION['userID'] = $row['_id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['authorized'] = true;
        echo 200;
        } else {
        echo 400;
        
    }
    ?>