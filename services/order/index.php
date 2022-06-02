<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../../access.php') ?>
     <?php include('../../components/lib/library.php') ?>
     <style>
     header {
          font-size: 16px !important
     }
     </style>
</head>

<body ng-app="app" ng-controller='orders'>
     <!-- App Capsule -->
     <div id="appCapsule">
          <!-- Wallet Card -->
          <!-- App Header -->
          <div class="appHeader bg-primary text-light">
               <div class="left">
                    <a href="#" onclick="window.history.back()" class="headerButton">
                         <i class="icon-arrow-left fa-2x"></i>
                    </a>
               </div>
               <div class="pageTitle">
                    <h2 class="text-white" id="app_titles">ລາຍການທີ່ຂາຍໄດ້</h2>
               </div>
               <div class="right">
               </div>
          </div>
          <!-- * App Header -->
          <div class="session-list">
               <div class="wallet-card">
                    <!-- Balance -->
                    <div class="balance center">
                         <div class="block">
                              <h2>ລວມຍອດຂາຍທັງໝົດ</h2>
                         </div>
                         <div class="blog">
                              <h1 ng-bind='_summary_all | number'></h1>
                         </div>
                    </div>
                    <!-- * Balance -->
                    <!-- Wallet Footer -->
                    <div class="wallet-footer">
                         <ul>
                              <li>
                                   <p> ລວມຄ່າອາຫານ:
                                        <b style="float:right" ng-bind='_summary_of_food | number'></b>
                                   </p>
                              </li>
                              <li>
                                   <p> ລວມຄ່າເຄື່ອງດື່ມ:
                                        <b style="float:right" ng-bind='_summary_of_drinks | number'></b>
                                   </p>
                              </li>
                         </ul>
                    </div>
                    <!-- * Wallet Footer -->
               </div>
               <div class="listview-title mt-2">ລາຍການ</div>
               <ul class="listview image-listview">
                    <?php 
                    include('../../connection.php');
                    function _sum_total_for_bill($x){
                         global $con;
                         global $_USER_ID;
                         $sumTotal_for_bill=mysqli_query($con,"SELECT sum(subTotal)as total FROM quick_order_bill LEFT JOIN quick_orders ON quick_order_bill.b_no=quick_orders.od_bill_no WHERE quick_order_bill.b_status='false' AND quick_order_bill.b_no='$x'");
                         $res=mysqli_fetch_assoc($sumTotal_for_bill);
                         echo number_format($res['total']);
                    }
                    $callTable=mysqli_query($con,"SELECT*FROM quick_order_table LEFT JOIN quick_orders ON quick_order_table.tb_id=quick_orders.tb_id WHERE od_status='false' GROUP BY quick_order_table.tb_id");
                    foreach ($callTable as $key) {
                         ?>
                    <li>
                         <a href="#" class="item" ng-click="_show_detail(<?php echo $key['od_bill_no'] ?>)">
                              <div class="icon-boxs bg-primary">
                                   <i class="icon-view_carousel fa-1x p-2"></i>
                              </div>
                              <div class="in">
                                   <div>
                                        <header>ໂຕະ</header>
                                        <?php echo $key['tb_title']?>
                                        <footer>Amount: <?php _sum_total_for_bill($key['od_bill_no'])?> ກີບ</footer>
                                   </div>
                                   <i class="icon-blur_on"></i>
                              </div>
                         </a>
                    </li>

                    <?php } ?>
               </ul>
          </div>
          <div class="modal fade action-sheet" id="show_detail" tabindex="-1" role="dialog">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h5 class="modal-title">ລາຍລະອຽດຂອງບິນ
                                   <a href="#" ng-click="_close_detail()" class="float-right">
                                        <i class="icon-x"></i>
                                   </a>
                              </h5>

                         </div>
                         <div class="modal-body">
                              <ul class="listview flush transparent simple-listview no-space mt-3 p-2">
                                   <li ng-repeat="x in _order_list">
                                        <strong
                                             ng-bind="x.m_name_l+' '+x.m_type+' '+x.m_size+' '+((x.od_qty | number))"></strong>
                                        <span class="text-success" ng-bind="x.od_price | number"></span>
                                   </li>
                                   <li>
                                        <strong>ລວມທັງໝົດ</strong>
                                        <h3 class="m-0" ng-bind="_total | number"></h3>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
          <!-- App Bottom Menu -->
          <?php include('../../components/src/bottombar.php')?>
     </div>
     <script src="app.js"></script>
     <script>
     $('#order-list').addClass('active');
     $('.bubbler-menu-loader').click(function() {
          $('#addMember').modal('show');
     })
     </script>
</body>

</html>