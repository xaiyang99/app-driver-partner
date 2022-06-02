<!DOCTYPE html>
<html lang="en" ng-app="app" ng-controller="_orders">

<head>
     <?php include('../../access.php') ?>
     <?php include('../../components/lib/library.php') ?>
     <?php include('../../connection.php') ?>
     <style>
     th {
          font-weight: bold !important;
          color: #f76707;
          font-size: 12 !important;
     }

     .txt {
          font-weight: bold !important;
          color: #f76707;
     }
     </style>
</head>

<body>
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
                    <h2 class="text-white" id="app_titles">ລາຍລະອຽດບິນ</h2>
               </div>
               <div class="right">
                    <!-- <a href="app-notifications.html" class="headerButton">
                         <i class="icon-receipt" style="font-size:25px"></i>
                    </a> -->
               </div>
          </div>

          <!-- * App Header -->
          <?php 
               $tb_id=$_GET['tb_id'];
               $callTable=mysqli_query($con,"SELECT*FROM quick_order_table WHERE tb_id='$tb_id'");
               $res=mysqli_fetch_assoc($callTable);

               $bill_no=$_GET['bill_no'];
               $query=mysqli_query($con, "SELECT
               quick_orders.*, 
               quick_order_menu.m_name_l, 
               quick_order_menu.m_name_e, 
               quick_order_menu.m_type, 
               quick_order_menu.m_size, 
               quick_order_menu.m_img
               FROM
               quick_orders LEFT JOIN quick_order_menu ON quick_orders.od_menu_id=quick_order_menu.m_id WHERE quick_orders.od_bill_no='$bill_no' AND quick_orders.od_status='true' ORDER BY quick_orders.on_aprovalTime ASC");

               // QUERY TOTAL
               $sumTotal=mysqli_query($con,"SELECT SUM(od_qty*od_price)as total FROM quick_orders WHERE od_bill_no='$bill_no' AND od_status='true'");
               $total=mysqli_fetch_assoc($sumTotal);
               // QUERY FOOD
               $sumTotalForFood=mysqli_query($con,"SELECT SUM(od_qty*od_price)as total FROM quick_orders WHERE od_bill_no='$bill_no' AND od_status='true' AND od_part='KITCHEN'");
               $food=mysqli_fetch_assoc($sumTotalForFood);
               // QUERY FOOD
               $sumTotalForDrink=mysqli_query($con,"SELECT SUM(od_qty*od_price)as total FROM quick_orders WHERE od_bill_no='$bill_no' AND od_status='true' AND od_part='BAR'");
               $drink=mysqli_fetch_assoc($sumTotalForDrink);
          ?>

          <?php 
        // GET RATE
        $selectRate =$_SQL($con,"SELECT * FROM quick_order_rate WHERE rate_createdAt=(SELECT max(rate_createdAt)FROM quick_order_rate) ORDER BY rate_id DESC LIMIT 1");
        $rate=$_ASSOC($selectRate);
        mysqli_close($con);
        ?>
          <div class="section wallet-card-section pt-1">
               <div class="session-list">
                    <div class="wallet-card">
                         <!-- Balance -->
                         <div class="balance center">
                              <div class="blog text-right">
                                   <h1 class="txt">ໂຕະ <?php echo $res['tb_title']?></h1>
                              </div>
                              <div class="block">
                                   <p class="txt">THB</p>
                                   <p><?php echo number_format($rate['rate_THB'])?></p>
                              </div>
                              <div class="blog text-right">
                                   <p class="txt">USD</p>
                                   <p><?php echo number_format($rate['rate_USD'])?></p>
                              </div>
                         </div>
                         <!-- * Balance -->
                         <button type="button" class="btn btn-primary btn-block">
                              <b style="font-size:18px"> Bill No: <?php echo $bill_no ?></b>
                         </button>
                    </div>
                    <!-- Wallet Card -->
                    <!-- Stats -->
                    <div class="section mt-2 mb-2  bg-white">
                         <div class="listed-detail mt-2">
                              <div class="icon-wrapper pt-2">
                                   <div class="iconbox">
                                        <i class="icon-receipt fa-2x"></i>
                                   </div>
                              </div>
                              <h3 class="text-center mt-2">ການຊຳລະ</h3>
                         </div>
                         <table class="table table-hover" style="font-size:11px;">
                              <tr>
                                   <th>#</th>
                                   <th>ລາຍການ</th>
                                   <th>ຈຳນວນ</th>
                                   <th>ລາຄາ</th>
                                   <th>ເປັນເງິນ</th>
                              </tr>
                              <?php $i=1; foreach ($query as $key) {?>
                              <tr>
                                   <td><?php echo $i ?></td>
                                   <td><?php echo $key['m_name_l']?></td>
                                   <td><?php echo $key['od_qty']?></td>
                                   <td class="text-right">
                                        <?php echo number_format($key['od_price'])?>
                                   </td>
                                   <td class="text-right">
                                        <?php echo number_format($key['od_qty']*$key['od_price'])?>
                                   </td>
                              </tr>
                              <?php $i++;} ?>
                              <tr style="border-top:1px black solid!important">
                                   <th class="text-center" colspan="3">THB</th>
                                   <th class="text-center" colspan="2">USD</th>
                              </tr>
                              <tr>
                                   <th class="text-center" colspan="3">
                                        <?php echo number_format($total['total']/$rate['rate_THB'])?></th>
                                   <th class="text-center" colspan="2">
                                        <?php echo number_format($total['total']/$rate['rate_USD'])?></th>
                              </tr>
                              <tr>
                                   <th colspan="3">ລວມຄ່າອາຫານ</th>
                                   <th class="text-right" colspan="2"><?php echo number_format($food['total'])?></th>
                              </tr>
                              <tr>
                                   <th colspan="3">ລວມຄ່າເຄື່ອງດື່ມ</th>
                                   <th class="text-right" colspan="2"><?php echo number_format($drink['total'])?></th>
                              </tr>
                              <tr>
                                   <th colspan="3">ລວມໝົດບິນ</th>
                                   <th class="text-right" colspan="2"><?php echo number_format($total['total'])?></th>
                              </tr>
                         </table>
                    </div>
               </div>
               <!-- Send Action Sheet -->
          </div>
          <!-- Wallet Card -->
          <div class="modal fade action-sheet inset" id="actionSheetIconed" tabindex="-1" role="dialog">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h5 class="modal-title">ໝວດອາຫານ</h5>
                         </div>
                         <div class="modal-body p-2" style="overflow-y:auto;height:50vh">
                              <ul class="action-button-list">
                                   <?php 
                                   $callTypeMenu=mysqli_query($con,"SELECT*FROM quick_order_category");
                                   foreach ($callTypeMenu as $key) { ?>
                                   <li>
                                        <a href="./list-menu.php?tb_id=<?php echo $tb_id ?>&cate_id=<?php echo $key['cate_id'];?>"
                                             class="btn btn-list text-primary">
                                             <span>
                                                  <i class="icon-graphic_eq mr-2"></i>
                                                  <?php echo $key['cate_name_l'];?>
                                             </span>
                                        </a>
                                   </li>
                                   <?php } ?>
                              </ul>
                              <a href="./list-menu.php?tb_id=<?php echo $tb_id ?>"
                                   class="btn btn-primary btn-block text-center">
                                   ທັງໝົດ
                              </a>
                         </div>
                    </div>
               </div>
          </div>


          <?php include('../../components/src/bottombar.php')?>
          <script src="app.js"></script>
     </div>
     <script>
     $('#home').addClass('active');

     function _confirmOrder() {


     }
     </script>
</body>

</html>