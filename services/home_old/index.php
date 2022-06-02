<!DOCTYPE html>
<html lang="en">
<?php include('../../access.php');?>

<head>
     <?php include('../../components/lib/library.php') ?>
</head>

<body ng-app="app">
     <!-- App Capsule -->
     <div id="appCapsule">
          <!-- Wallet Card -->
          <!-- App Header -->
          <?php include('../../components/src/header.php') ?>
          <?php include('../../connection.php') ?>
          <!-- * App Header -->

          <div class="section wallet-card-section pt-1">
               <div class="session-list" ng-controller="home">
                    <div class="wallet-card">
                         <div class="wallet-footer">
                              <div class="item">
                                   <a href="#">
                                        <div class="icon-wrapper bg-secondary">
                                             <i class="icon-view_carousel"></i>
                                        </div>
                                        <h4>ໂຕະວ່າງ</h4>
                                   </a>
                              </div>
                              <div class="item">
                                   <a href="#">
                                        <div class="icon-wrapper bg-success">
                                             <i class="icon-view_carousel"></i>
                                        </div>
                                        <h4>ໂຕະເຕັມ</h4>
                                   </a>
                              </div>
                              <div class="item">
                                   <a href="#">
                                        <div class="icon-wrapper bg-primary">
                                             <i class="icon-view_carousel"></i>
                                        </div>
                                        <h4>ກຳລັງເຊັກບິນ</h4>
                                   </a>
                              </div>
                         </div>
                         <!-- * Wallet Footer -->
                    </div>
                    <!-- Wallet Card -->
                    <!-- Stats -->
                    <div class="row mt-3">
                         <?php 
                    $callTable=mysqli_query($con,"SELECT*FROM quick_order_table");
                    foreach ($callTable as $key) { ?>
                         <div class="col-6 mb-2">
                              <button type="button"
                                   onclick="window.location='./list-menu.php?tb_id=<?php echo $key['tb_id']?>'"
                                   style="font-size:23px!important"
                                   class="btn btn-lg btn-<?php  if($key['tb_status']=="EMPTY"){echo ' bg-white';}else if($key['tb_status']=="FULL"){echo 'success';}else{echo 'primary';}?> btn-block">
                                   ໂຕະ <?php echo $key['tb_title']?>
                              </button>
                         </div>
                         <?php } ?>
                    </div>
                    <!-- Send Action Sheet -->
                    <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
                         <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                   <div class="modal-header">
                                        <h5 class="modal-title">Send Money</h5>
                                   </div>
                                   <div class="modal-body">
                                        <div class="action-sheet-content">
                                             <form>
                                                  <div class="form-group basic">
                                                       <div class="input-wrapper">
                                                            <label class="label" for="account2">From</label>
                                                            <select class="form-control custom-select" id="account2">
                                                                 <option value="0">Savings (*** 5019)</option>
                                                                 <option value="1">Investment (*** 6212)</option>
                                                                 <option value="2">Mortgage (*** 5021)</option>
                                                            </select>
                                                       </div>
                                                  </div>

                                                  <div class="form-group basic">
                                                       <div class="input-wrapper">
                                                            <label class="label" for="text11">To</label>
                                                            <input type="email" class="form-control" id="text11"
                                                                 placeholder="Enter bank ID" />
                                                            <i class="clear-input">
                                                                 <ion-icon name="close-circle"></ion-icon>
                                                            </i>
                                                       </div>
                                                  </div>

                                                  <div class="form-group basic">
                                                       <label class="label">Enter Amount</label>
                                                       <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                 <span class="input-group-text" id="input14">$</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-lg"
                                                                 placeholder="0" />
                                                       </div>
                                                  </div>

                                                  <div class="form-group basic">
                                                       <button type="button" class="btn btn-primary btn-block btn-lg"
                                                            data-dismiss="modal">
                                                            Deposit
                                                       </button>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- Wallet Card -->

          <?php include('../../components/src/bottombar.php')?>
     </div>
     <script>
     $('#home').addClass('active');
     </script>
</body>

</html>