<?php 
include('../../../connection.php');
$tb_id=$_POST['tb_id'];
$selectBill = $_SQL($con, "SELECT b_no FROM quick_order_bill WHERE b_table_id='$tb_id'");
$_res = $_COUNT($selectBill);

if ($_res == 0) {
    $b_no = $_GEN_ID + 1;
    $data = "'$_AUTO_ID','$b_no','$tb_id','','','','','','','$_TIMESTAM','','','','true','$_USER_NAME','','$_DATE'";
    $createNewBillNo=$_SQL($con, "INSERT INTO quick_order_bill VALUE($data)");
    if ($createNewBillNo) {
        $_SQL($con, "UPDATE quick_order_table SET tb_status='FULL' WHERE tb_id='$tb_id'");
        echo 200;
    } else {
        echo 400;
    }
}else{
   $selectBillNo = $_SQL($con, "SELECT b_no FROM quick_order_bill where b_no=(select max(b_no)from quick_order_bill)");
    $_res = $_ASSOC($selectBillNo);
    $no = $_res['b_no'];
    $b_no = $no + 1;
    $data = "'$_AUTO_ID','$b_no','$tb_id','$_TIMESTAM','true','$_USER_NAME','$_DATE'";
    $createdNewBill=$_SQL($con, "INSERT INTO quick_order_bill(b_id,b_no,b_table_id,b_time,b_status,b_user,b_createdAt) VALUE($data)");
    if ($createdNewBill) {
        $_SQL($con, "UPDATE quick_order_table SET tb_status='FULL' WHERE tb_id='$tb_id'");
        echo 200;
    } else {
        echo 400;
    }
}
?>