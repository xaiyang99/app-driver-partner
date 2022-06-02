<?php 
include('../../../connection.php');
//? LIST MENU
if(isset($_GET['list_menu'])){
    $arr=array();
    $query=mysqli_query($con,"SELECT*FROM quick_order_menu");
    if(mysqli_num_rows($query)>0){
         while ($row=mysqli_fetch_array($query)) {
             $arr[]=$row;
         }
         echo json_encode($arr);
    }
//? MENU DETAILS
}else if(isset($_GET['menu_detail'])){
    $query=mysqli_query($con,"SELECT*FROM quick_order_menu WHERE m_id='".$_GET['m_id']."'");
    $res=mysqli_fetch_array($query);
    echo json_encode($res);
}else{
    echo 400;
}
?>