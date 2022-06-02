<!DOCTYPE html>
<html lang="en" ng-app="app" ng-controller="list_menu">

<head>
     <?php include('../../access.php') ?>
     <?php include('../../components/lib/library.php') ?>
     <?php include('../../connection.php') ?>
     <style>
     .menu-price {
          background-color: rgba(0, 0, 0, 0.6);
          color: white;
          text-align: center;
          padding-right: 5px;
          margin-top: -30px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;

     }
     </style>
</head>
<!-- * App Header -->
<?php
$tb_id = $_GET['tb_id'];
$callTable = mysqli_query($con, "SELECT*FROM quick_order_table WHERE tb_id='$tb_id'");
$res = mysqli_fetch_assoc($callTable);

$selectBill = $_SQL($con, "SELECT b_no,b_id FROM quick_order_bill WHERE b_table_id='$tb_id' AND b_status='true'");
$_res = $_ASSOC($selectBill);
$b_NO = $_res['b_no'];
?>

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
                    <h2 class="text-white" id="app_titles">ລາຍການອາຫານ</h2>
               </div>
               <div class="right">
                    <a href="./bill_detail.php?bill_no=<?php echo $b_NO  ?>&tb_id=<?php echo $tb_id ?>"
                         class="headerButton">
                         <i class="icon-receipt" style="font-size:25px"></i>
                    </a>
               </div>
          </div>

          <div class="section wallet-card-section pt-1">
               <div class="session-list">
                    <div class="wallet-card">
                         <!-- Balance -->
                         <div class="balance center">
                              <div class="block">
                                   <h1>ໂຕະ</h1>
                              </div>
                              <div class="blog text-right">
                                   <h1><?php echo $res['tb_title'] ?></h1>
                                   <h5>ບິນເລກທີ: <?php echo $b_NO ?></h5>
                              </div>
                         </div>
                         <!-- * Balance -->
                         <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                              data-target="#actionSheetIconed">ໝວດອາຫານ</button>
                         <div class="form-group basic">
                              <div class="input-wrapper">
                                   <input type="search" id="filter" class="form-control" placeholder="ຄົ້ນຫາ..">
                              </div>
                         </div>
                    </div>
                    <!-- Wallet Card -->
                    <!-- Stats -->
                    <div class="row mt-3" id="data">
                         <div class="col-6 mb-2" id="row" ng-repeat="m in _list_menu">
                              <div class="card" <?php if ($res['tb_status'] == "EMPTY") {
                                                            echo "data-toggle='modal' data-target='#confirmTable'";
                                                       } else { ?> ng-click="_takeOrder(m.m_id)" <?php } ?>>
                                   <div class="card-body p-1">
                                        <img src="../../../img/{{m.m_img?m.m_img : 'photo.jpg'}}" width=" 100%"
                                             height="120px">
                                   </div>
                                   <div class="menu-price">
                                        <b ng-bind='m.m_Sprice | number'></b>
                                   </div>
                                   <div class="card-footer text-center">
                                        <b ng-bind='m.m_name_l'></b>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- Send Action Sheet -->
               </div>
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
                                   $callTypeMenu = mysqli_query($con, "SELECT*FROM quick_order_category");
                                   foreach ($callTypeMenu as $key) { ?>
                                   <li>
                                        <a href="./list-menu.php?tb_id=<?php echo $tb_id ?>&cate_id=<?php echo $key['cate_id']; ?>"
                                             class="btn btn-list text-primary">
                                             <span>
                                                  <i class="icon-graphic_eq mr-2"></i>
                                                  <?php echo $key['cate_name_l']; ?>
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

          <div class="modal fade dialogbox" id="confirmTable" data-backdrop="static" tabindex="-1" role="dialog">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h5 class="modal-title">ເປີດໂຕະ</h5>
                         </div>
                         <div class="modal-body">
                              ທ່ານຕ້ອງການສັ່ງອາຫານເລີຍບໍ່? ຫາກຕ້ອງການໃຫ້ເປີດໂຕະກ່ອນ
                         </div>
                         <div class="modal-footer">
                              <div class="btn-inline">
                                   <a href="#" class="btn btn-text-danger" data-dismiss="modal">
                                        <i class="icon-x-circle mr-1"></i>
                                        ຍົກເລີກ
                                   </a>
                                   <a href="#" class="btn btn-text-success" onclick="_turnOnTable(<?php echo $tb_id ?>)"
                                        data-dismiss="modal">
                                        <i class="icon-check-circle mr-1"></i>
                                        ເປີດໂຕະ
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="modal fade dialogbox" id="confirmOrder" data-backdrop="static" tabindex="-1" role="dialog">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h5 class="modal-title">
                                   <span ng-bind="order_title"></span>
                              </h5>
                         </div>
                         <div class="modal-body">
                              <input type="text" ng-model="m_id" style="display:none">
                              <input type="text" ng-model="m_Sprice" style="display:none">
                              <input type="text" ng-model="m_case" style="display:none">

                              <img src="../../../img/{{m_img?m_img:'photo.jpg'}}" width="100%" height="200px">
                              <div class="input-group p-2">
                                   <div class="input-group-prepend">
                                        <button class="btn btn-danger" type="button" ng-click="_minus()"
                                             id="button-addon1">
                                             <i class="fa fa-minus-circle"></i>
                                        </button>
                                   </div>
                                   <input type="text" class="form-control text-center" ng-model="od_qty" value="1"
                                        id="od_qty" autofocus placeholder="0" aria-describedby="button-addon1" required>
                                   <div class="input-group-prepend">
                                        <button class="btn btn-success" ng-click="_plus()" type="button"
                                             id="button-addon1"><i class="fa fa-plus-circle"></i>
                                        </button>
                                   </div>
                              </div>
                              <textarea rows="3" cols="" class="form-control" ng-model="od_note"
                                   placeholder="ໝາຍເຫດ"></textarea>
                         </div>
                         <div class="modal-footer">
                              <div class="btn-inline">
                                   <a href="#" class="btn btn-text-danger" data-dismiss="modal">
                                        <i class="icon-x-circle mr-1"></i>
                                        ຍົກເລີກ
                                   </a>
                                   <a href="#" class="btn btn-text-success"
                                        ng-click="_confirmOrder('<?php echo $tb_id ?>','<?php echo $b_NO ?>')"
                                        data-dismiss="modal">
                                        <i class="icon-check-circle mr-1"></i>
                                        ຢືນຢັນອໍເດີ່
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <?php include('../../components/src/bottombar.php') ?>
          <script src="./app.js"></script>
     </div>
     <script>
     $('#home').addClass('active');
     // SEARCH DATA GLOBAL
     $("#filter").keyup(function() {
          var filter = $(this).val(),
               count = 0;
          $("#data #row").each(function() {
               if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                    $(this).hide(); // MY CHANGE
               } else {
                    $(this).show(); // MY CHANGE
                    count++;
               }
          });
     });
     </script>
</body>

</html>