<?php
include('../../../connection.php');
@$http = json_decode(file_get_contents("php://input"));
@$x=count($http);
if($x>0){
@$tb_id = $_SETSTRING($con,$http->tb_id);
@$m_id = $_SETSTRING($con,$http->m_id);
@$od_qty = $_SETSTRING($con,$http->od_qty);
@$m_Sprice = $_SETSTRING($con,$http->m_sprice);
@$od_bill_no = $_SETSTRING($con,$http->bill_no);
@$m_case = $_SETSTRING($con,$http->m_case);
@$od_note = $_SETSTRING($con,$http->od_note);
// CHECK DUPLICATE DATA
$selectAllStock = $_SQL($con, "SELECT sum(st_qty)AS total FROM quick_order_stock WHERE st_menu='$m_id'");
$result = $_ASSOC($selectAllStock);
$result['total'];

$selectOrder = $_SQL($con, "SELECT * FROM quick_orders WHERE od_menu_id='$m_id' AND tb_id='$tb_id' AND od_bill_no='$od_bill_no' AND on_aproval='true'");
$res = $_COUNT($selectOrder);
if ($res > 0) {
    $updateQty = $_SQL($con, "UPDATE quick_orders SET od_qty=od_qty+'$od_qty' WHERE od_menu_id='$m_id' AND tb_id='$tb_id' AND od_bill_no='$od_bill_no' AND on_aproval='true'");
    if ($updateQty) {
        echo 200;
    } else {
        echo 400;
    }
} else if ($m_case == "BAR") {
    if ($result['total'] < 1) {
        echo "DATA_IS_MIN_IN_STOCK";
    } else {
        $_SQL($con, "UPDATE quick_order_stock SET st_qty=st_qty-'$od_qty' WHERE st_menu='$m_id'");
        $finalData = "'$_AUTO_ID','$od_bill_no','$m_id','$tb_id','$od_qty','$m_Sprice','$_TIMESTAM','true','$od_note','true','$_TIMESTAM','$_USER_NAME','false','$m_case','CASH','$_USER_ID','$_USER_NAME','$_DATE'";
        $_createMember = $_SQL($con, "INSERT INTO quick_orders VALUE($finalData)");
        if ($_createMember) {
            echo 200;
        } else {
            echo 400;
        }
    }
} else {
    $finalData = "'$_AUTO_ID','$od_bill_no','$m_id','$tb_id','$od_qty','$m_Sprice','$_TIMESTAM','true','$od_note','true','$_TIMESTAM','$_USER_NAME','false','$m_case','CASH','$_USER_ID','$_USER_NAME','$_DATE'";
    $_createMember = $_SQL($con, "INSERT INTO quick_orders VALUE($finalData)");
    if ($_createMember) {
        echo 200;
    } else {
        echo 400;
    }
}
}
?>