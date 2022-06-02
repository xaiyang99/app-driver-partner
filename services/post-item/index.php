<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../../access.php') ?>
     <?php include('../../components/lib/library.php') ?>
</head>
<?php 
include('../../connection.php');
$query=mysqli_query($con, "SELECT
               quick_orders.*, 
               quick_order_menu.m_name_l, 
               quick_order_menu.m_name_e, 
               quick_order_menu.m_type, 
               quick_order_menu.m_size, 
               quick_order_menu.m_img
               FROM
               quick_orders LEFT JOIN quick_order_menu ON quick_orders.od_menu_id=quick_order_menu.m_id WHERE  quick_orders.od_status='true' AND userID='$_USER_ID' ORDER BY quick_orders.on_aprovalTime ASC");
?>

<body ng-app="app">
     <!-- App Capsule -->
     <div id="appCapsule">
          <!-- Wallet Card -->
          <div class="appHeader bg-primary text-light">
               <div class="left">
                    <a href="#" onclick="window.history.back()" class="headerButton">
                         <i class="icon-arrow-left fa-2x"></i>
                    </a>
               </div>
               <div class="pageTitle">
                    <h2 class="text-white" id="app_titles">ລາຍການອໍເດີ່</h2>
               </div>
               <!-- <div class="right">
                    <a href="./bill_detail.php?bill_no=<?php echo $b_NO  ?>&tb_id=<?php echo $tb_id ?>"
                         class="headerButton">
                         <i class="icon-receipt" style="font-size:25px"></i>
                    </a>
               </div> -->
          </div>
          <!-- * App Header -->
          <div class="extraHeader pr-0 pl-0">
               <ul class="nav nav-tabs lined" role="tablist">
                    <li class="nav-item">
                         <a class="nav-link active" data-toggle="tab" href="#waiting" role="tab">
                              ລໍຖ້າຢືນຢັນ
                         </a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#paid" role="tab">
                              ຢືນຢັນແລ້ວ
                         </a>
                    </li>
               </ul>
          </div>
          <!-- App Capsule -->
          <div class="section tab-content pt-2">
               <!-- waiting tab -->
               <div class="tab-pane fade show active mt-5" id="waiting" role="tabpanel">
                    <div class="row">
                         <?php foreach ($query as $key) {?>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper p-0">
                                        <img src="../../../img/<?php if($key['m_img']){ echo $key['m_img'];}else{echo './photo.jpg';}?>"
                                             alt="img" class="image-block imaged" style="width:100%;height:100px">
                                   </div>
                                   <div class="price"><?php echo number_format($key['od_qty'])?></div>
                                   <p><?php echo $key['m_name_l']?></p>
                                   <div class="btn-group">
                                        <a href="#" class="btn btn-danger btn-sm pl-2 pr-2">
                                             <i class="icon-minus-circle"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm pl-2 pr-2">
                                             <i class="icon-plus-circle"></i>
                                        </a>
                                   </div>
                              </div>
                         </div>
                         <?php } ?>
                    </div>
               </div>
               <!-- * waiting tab -->

               <!-- paid tab -->
               <div class="tab-pane fade mt-5" id="paid" role="tabpanel">
                    <div class="row">
                         <?php foreach ($query as $key) {?>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper p-0">
                                        <img src="../../../img/<?php if($key['m_img']){ echo $key['m_img'];}else{echo './photo.jpg';}?>"
                                             alt="img" class="image-block imaged" style="width:100%;height:100px">
                                   </div>
                                   <div class="price"><?php echo number_format($key['od_qty'])?></div>
                                   <p><?php echo $key['m_name_l']?></p>
                                   <a href="#" class="btn btn-success btn-sm btn-block">
                                        <i class="icon-check-circle mr-1"></i> ຢືນຢັນແລ້ວ
                                   </a>
                              </div>
                         </div>
                         <?php } ?>
                    </div>
               </div>
               <!-- * paid tab -->

          </div>

     </div>
     <!-- App Bottom Menu -->
     <?php include('../../components/src/bottombar.php')?>
     </div>
     <script>
     $('#post-item').addClass('active');
     $('.bubbler-menu-loader').click(function() {
          $('#addMember').modal('show');
     })
     </script>
</body>

</html>