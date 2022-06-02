<?php
// @session_start();
// // $con = mysqli_connect('localhost', 'root', '', 'i_touch');
// // @mysqli_query($con, "SET NAMES UTF8");
// // if($con){echo "dbx_connect";} else {  echo "no dbx_connect";}
// // $DB_HOST = 'localhost';
// // $DB_USER = 'root';
// // $DB_PASS = '';
// // $DB_NAME = 'i_touch';
// $dbName = 'anousithdriver_driver_partnaer';
// $userName = 'anousithdriver';
// $passwd = 'Y.w.TwF5}-fk';
// $hostName = '45.136.253.8';

// @$conn = mysqli_connect($hostName, $userName, $passwd, $dbName);
// @mysqli_query($conn, "SET NAMES UTF8");

// try {
//     $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
//     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $DB_con->exec("SET CHARACTER SET utf8");
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }
// user data
// @$_USER_ID = $_SESSION['user_id'];
// @$_USER_GENDER = $_SESSION['user_gender'];
// @$_USER_FNAME = $_SESSION['user_fname'];
// @$_USER_LNAME = $_SESSION['user_lname'];
// @$_USER_ADDRESS = $_SESSION['user_address'];
// @$_USER_TEL = $_SESSION['user_tel'];
// @$_USER_NAME = $_SESSION['user_name'];
// @$_USER_ROLE = $_SESSION['user_role'];
// @$_USER_STATUS = $_SESSION['user_status'];
// @$_USER_CREATEDAT = $_SESSION['user_createdAt'];
// @$_USER_CREATEDBY = $_SESSION['user_createdBy'];
// @$_USER_IMG = $_SESSION['user_img'];

// CHECK PERMISSION
// if ($_USER_ROLE == "BAR") {
//     $_isKitchen = "hidden";
//     $_isBar = "";
//     $_isHide = "hidden";
//     $_isShow = "";
// } elseif ($_USER_ROLE == "KITCHEN") {
//     $_isHide = "hidden";
//     $_isKitchen = "";
//     $_isBar = "hidden";
//     $_isShow = "";
// } else {
//     $_isHide = "";
//     $_isShow = "";
// }
// QUICK FUNCTION
// QUICK FUNCTION
// date_default_timezone_set("Asia/Bangkok");
// @$_TIMESTAM = date("Y-m-d H:i:s");
// @$_DATE_FORMAT = date("Y-M-d-D");
// @$_TIME = date("H:i");
// @$_GEN_ID = date("ymdhi");
// @$_DATE = date("Y-m-d");
// @$_YEAR = date("Y");
// @$_YEAR_ = date("Y") + 1;
// @$_MONTH = date("m");
// $_WEEK_DAY = date('D');
// @$_AUTO_GEN_ID = rand(1000, 1000);
// @$_AUTO_ID = md5($_TIMESTAM . $_AUTO_GEN_ID);
// @$_DAY = date("d");

// @$_CODE = md5(1000000030005000);
// @$_SETSTRING = "mysqli_real_escape_string";
// @$_SQL = "mysqli_query";
// @$_ARRAY = "mysqli_fetch_array";
// @$_ASSOC = "mysqli_fetch_assoc";
// @$_COUNT = "mysqli_num_rows";

// @$_KIP = "<font style='color:red;font-size:15px'>.₭</font>";
// @$_HOUR = "<font style='color:#086B68;font-weight:bold;font-size:15px'> 'h</font>";
// @$_PERCEN = "<font style='color:#F40C3D;font-weight:bold;font-size:15px'> %</font>";


?>

<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
@session_start();
//?cloud

$dbName = 'anousithdriver_driver_partnaer';
$userName = 'anousithdriver';
$passwd = 'Y.w.TwF5}-fk';
$hostName = '45.136.253.8';

@$conn = mysqli_connect($hostName, $userName, $passwd, $dbName);

@mysqli_query($conn, "SET NAMES UTF8");

//! QUICK FUNCTION
date_default_timezone_set("Asia/Bangkok");
@$_generate_id = date("ymdhs");
@$_timestamp = date("Y-m-d H:i:s");
@$_date_format = date("Y-M-d-D");
@$_time = date("H:i");

@$_curdate = date("Y-m-d");
$day = date('d') - 1;
$_date = DateTime::createFromFormat('Y-m-d', $_curdate);
$_date->modify(-$day . 'days');
$_startMonth = $_date->format('Y-m-d');

//2010-04-13

@$_today = date("Y-m-d");
@$_year = date("Y");
@$_year_ = date("Y") + 1;
@$_month = date("m");
@$_week_day = date('D');
@$_auto_gen_id = rand(100, 1000);
@$trackingNumber = ($_generate_id . '-' . $_auto_gen_id);
@$_auto_id = md5($_timestamp . $_auto_gen_id);

@$_rand_code = md5($_timestamp . $_auto_gen_id);
@$_escape_string = "mysqli_real_escape_string";
@$_sql = "mysqli_query";
@$_array = "mysqli_fetch_array";
@$_assoc = "mysqli_fetch_assoc";
@$_count = "mysqli_num_rows";

?>
