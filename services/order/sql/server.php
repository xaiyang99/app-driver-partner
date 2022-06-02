<?php 
include_once('../../../connection.php');
//? GET ORDER LIST 
if(isset($_GET['list_order'])){
    $bill_no=$_GET['bill_no'];
    $output = array();
    $summary=mysqli_query($con,"SELECT sum(od_price*od_qty)as total FROM quick_orders WHERE od_bill_no='$bill_no' AND userID='$_USER_ID' AND od_status='false'");
    $query  =mysqli_query($con,"SELECT
    quick_orders.*,
    quick_order_menu.m_name_l, 
    quick_order_menu.m_name_e, 
    quick_order_menu.m_type, 
    quick_order_menu.m_size, 
    quick_order_menu.m_img
    FROM
    quick_orders LEFT JOIN quick_order_menu ON quick_orders.od_menu_id=quick_order_menu.m_id WHERE  quick_orders.od_bill_no='$bill_no' AND quick_orders.od_status='false' AND quick_orders.userID='$_USER_ID' ORDER BY quick_orders.on_aprovalTime ASC");
    $res=mysqli_fetch_assoc($summary);
    echo $res['total'];
    echo "/";
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output[] = $row;
        }
        echo json_encode($output);
    }
    
//? GET FOOD AND DRINKS TOTAL
}else if(isset($_GET['food_and_drink_total'])){
//// SUMMARY ALL 
    $summary_all=mysqli_query($con,"SELECT sum(subTotal)as total FROM quick_order_bill LEFT JOIN quick_orders ON quick_order_bill.b_no=quick_orders.od_bill_no WHERE quick_orders.userID='$_USER_ID' AND quick_order_bill.b_status='false'");
    $res_all=mysqli_fetch_assoc($summary_all);
    echo $res_all['total'];
    echo "/";

    $summary_of_food=mysqli_query($con,"SELECT sum(subTotal)as total FROM quick_order_bill LEFT JOIN quick_orders ON quick_order_bill.b_no=quick_orders.od_bill_no WHERE quick_orders.userID='$_USER_ID' AND quick_order_bill.b_status='false' AND quick_orders.od_part='KITCHEN'");
    $res_of_food=mysqli_fetch_assoc($summary_of_food);
    echo $res_of_food['total'];
    echo "/";

    $summary_of_drink=mysqli_query($con,"SELECT sum(subTotal)as total FROM quick_order_bill LEFT JOIN quick_orders ON quick_order_bill.b_no=quick_orders.od_bill_no WHERE quick_orders.userID='$_USER_ID' AND quick_order_bill.b_status='false' AND quick_orders.od_part='BAR'");
    $res_of_drink=mysqli_fetch_assoc($summary_of_drink);
    echo $res_of_drink['total'];
}else{
     echo 400;
}

?>