<div class="appBottomMenu">
     <a href="../../services/order/" class="item pt-2" id="order-list">
          <div class="col">
               <i class="icon-filter_none fa-2x"></i>
               <h5 class="mt-1">ລາຍການຂາຍ</h5>
          </div>
     </a>
     <a href="../../services/home/" class="item pt-2" id="home">
          <div class="col">
               <i class="icon-home fa-2x"></i>
               <h5 class="mt-1">ໜ້າຫຼັກ</h5>
          </div>
     </a>
     <a href="../../services/post-item/" class="item pt-2" id="post-item">
          <div class="col">
               <i class="icon-shopping-cart1 fa-2x"></i>
               <h5 class="mt-1">ລາຍການອໍເດີ່</h5>
          </div>
     </a>
</div>
<?php
$_id = $_SESSION['userID'];
$sql = "SELECT * FROM tb_users WHERE _id='$_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
          <div class="modal-content">
               <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                         <div class="image-wrapper">
                              <img src="../../img//profiles.png" alt="image" class="imaged  w36">
                         </div>
                         <div class="in">
                              <strong><?php echo $row['first_name'] ?></strong>
                              <div class="text-muted"><?php echo $row['phoneNumber'] ?></div>
                         </div>
                         <a href="#" class="btn btn-link btn-icon sidebar-close" data-dismiss="modal">
                              <ion-icon name="close-outline"></ion-icon>
                         </a>
                    </div>
                    <!-- * profile box -->
                    <!-- balance -->
                    <!-- <div class="sidebar-balance">
                         <div class="listview-title">Balance</div>
                         <div class="in">
                              <h1 class="amount">$ 2,562.50</h1>
                         </div>
                    </div> -->
                    <!-- * balance -->

                    <!-- action group -->
                    <!-- <div class="action-group">
                         <a href="app-index.html" class="action-button">
                              <div class="in">
                                   <div class="iconbox">
                                        <ion-icon name="add-outline"></ion-icon>
                                   </div>
                                   Deposit
                              </div>
                         </a>
                         <a href="app-index.html" class="action-button">
                              <div class="in">
                                   <div class="iconbox">
                                        <ion-icon name="arrow-down-outline"></ion-icon>
                                   </div>
                                   Withdraw
                              </div>
                         </a>
                         <a href="app-index.html" class="action-button">
                              <div class="in">
                                   <div class="iconbox">
                                        <ion-icon name="arrow-forward-outline"></ion-icon>
                                   </div>
                                   Send
                              </div>
                         </a>
                         <a href="app-cards.html" class="action-button">
                              <div class="in">
                                   <div class="iconbox">
                                        <ion-icon name="card-outline"></ion-icon>
                                   </div>
                                   My Cards
                              </div>
                         </a>
                    </div> -->
                    <!-- * action group -->

                    <!-- menu -->
                    <div class="listview-title mt-1">ເມນູ</div>
                    <ul class="listview flush transparent no-line image-listview">
                         <li id="main">
                              <a href="../../services/home/" class="item actived">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-home"></i>
                                   </div>
                                   <div class="in">
                                        ໜ້າຫຼັກ
                                   </div>
                              </a>
                         </li>

                         <li id="profile_users">
                              <a href="../../services/profile_users/" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-user"></i>
                                   </div>
                                   <div class="in">
                                        ໂປຣຟາຍ
                                   </div>
                              </a>
                         </li>
                         <li id="confirm_car_out">
                              <a href="../../services/confirm_car_out/" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-truck"></i>
                                   </div>
                                   <div class="in">
                                        ໜ້າຢືນຢັນອອກລົດ
                                   </div>
                              </a>
                         </li>
                         <li id="arrive_at_destination">
                              <a href=" ../../services/arrive_at_destination/" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-location"></i>
                                   </div>
                                   <div class="in">
                                        ໜ້າຢືນຢັນຮອດປາຍທາງ
                                   </div>
                              </a>
                         </li>
                         <li id="car_trip">
                              <a href="../../services/car_trip/" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-format_list_bulleted"></i>
                                   </div>
                                   <div class="in">
                                        ໜ້າລາຍງານຖ້ຽວລົດ
                                   </div>
                              </a>
                         </li>
                         <li id="disbursement">
                              <a href="../../services/disbursement/" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-attach_money"></i>
                                   </div>
                                   <div class="in">
                                        ໜ້າລາຍງານເບີກຈ່າຍ
                                   </div>
                              </a>
                         </li>
                         <!-- <li>
                              <a href="app-components.html" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-box"></i>
                                   </div>
                                   <div class="in">
                                        ປະຫວັດການຮັບເຄື່ອງ
                                   </div>
                              </a>
                         </li> -->
                         <!-- <li>
                              <a href="app-components.html" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-layers2"></i>
                                   </div>
                                   <div class="in">
                                        ປະຫວັດການສົ່ງເຄື່ອງ
                                   </div>
                              </a>
                         </li> -->
                    </ul>
                    <!-- * menu -->
                    <!-- others -->
                    <!-- <div class="listview-title mt-1">ເພີ່ມເຕີມ</div> -->
                    <ul class="listview flush transparent no-line image-listview">
                         <!-- <li>
                              <a href="app-settings.html" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-cog"></i>
                                   </div>
                                   <div class="in">
                                        ຕັ້ງຄ່າ
                                   </div>
                              </a>
                         </li> -->
                         <li>
                              <a href="#" onclick="_logout()" class="item">
                                   <div class="icon-boxs bg-primary">
                                        <i class="icon-log-out"></i>
                                   </div>
                                   <div class="in">
                                        ອອກຈາກລະບົບ
                                   </div>
                              </a>
                         </li>
                    </ul>
                    <!-- * others -->
               </div>
          </div>
     </div>
     <!-- * app footer -->
     <script src="../../assets/js/lib/jquery-3.4.1.min.js"></script>
     <script src="../../assets/angularjs.1.4.0/angular.min.js"></script>
     <script src="../../assets/angularjs.1.4.0/angular-route.js"></script>
     <!-- Bootstrap-->
     <script src="../../assets/js/lib/popper.min.js"></script>
     <script src="../../assets/js/lib/bootstrap.min.js"></script>
     <!-- Owl Carousel -->
     <script src="../../assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
     <!-- Base Js File -->
     <script src="../../assets/js/base.js"></script>
     <script src="../../assets/floating/app.js"></script>
     <script src="../../assets/AIO/notiflix-aio-2.4.0.min.js"></script>
     <script src="https://use.fontawesome.com/bd48d6d264.js"></script>
     <script>
          function _logout() {
               Notiflix.Confirm.Show(
                    "ສະຖານະ",
                    "ທ່ານຕ້ອງການອອກຈາກລະບົບແທ້ ຫຼື ບໍ່?",
                    "ຕົກລົງ",
                    "ຍົກເລີກ",
                    function() {
                         window.location = "../../logout.php";
                    },
                    function() {
                         close();
                    }
               );
          }
     </script>