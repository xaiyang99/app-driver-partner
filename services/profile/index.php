<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../../components/lib/library.php') ?>
</head>

<body ng-app="app">
     <!-- App Capsule -->
     <div id="appCapsule">
          <!-- Wallet Card -->
          <!-- App Header -->
          <?php include('../../components/src/header.php') ?>
          <!-- * App Header -->
          <div class="section wallet-card-section pt-1">
               <div class="session-list" ng-controller="profile">
                    <div class="section mt-3 text-center">
                         <div class="avatar-section">
                              <a href="#">
                                   <img src="../../assets/img/sample/avatar/avatar1.jpg" alt="avatar"
                                        class="imaged w100 rounded">
                                   <span class="button">
                                        <i class="icon-camera"></i>
                                   </span>
                              </a>
                         </div>
                    </div>

                    <div class="listview-title mt-1">Notifications</div>
                    <ul class="listview image-listview text">
                         <li>
                              <div class="item">
                                   <div class="in">
                                        <div>
                                             Payment Alert
                                             <div class="text-muted">
                                                  Send notification when new payment received
                                             </div>
                                        </div>
                                        <div class="custom-control custom-switch">
                                             <input type="checkbox" class="custom-control-input" id="customSwitch4"
                                                  checked />
                                             <label class="custom-control-label" for="customSwitch4"></label>
                                        </div>
                                   </div>
                              </div>
                         </li>
                         <li>
                              <a href="#" class="item">
                                   <div class="in">
                                        <div>Notification Sound</div>
                                        <span class="text-primary">Beep</span>
                                   </div>
                              </a>
                         </li>
                    </ul>

                    <div class="listview-title mt-1">Profile Settings</div>
                    <ul class="listview image-listview text">
                         <li>
                              <a href="#" class="item">
                                   <div class="in">
                                        <div>Change Username</div>
                                   </div>
                              </a>
                         </li>
                         <li>
                              <a href="#" class="item">
                                   <div class="in">
                                        <div>Update E-mail</div>
                                   </div>
                              </a>
                         </li>
                         <li>
                              <a href="#" class="item">
                                   <div class="in">
                                        <div>Address</div>
                                        <span class="text-primary">Edit</span>
                                   </div>
                              </a>
                         </li>
                         <li>
                              <div class="item">
                                   <div class="in">
                                        <div>
                                             Private Profile
                                        </div>
                                        <div class="custom-control custom-switch">
                                             <input type="checkbox" class="custom-control-input" id="customSwitch2" />
                                             <label class="custom-control-label" for="customSwitch2"></label>
                                        </div>
                                   </div>
                              </div>
                         </li>
                    </ul>

                    <div class="listview-title mt-1">Security</div>
                    <ul class="listview image-listview text mb-2">
                         <li>
                              <a href="#" class="item">
                                   <div class="in">
                                        <div>Update Password</div>
                                   </div>
                              </a>
                         </li>
                         <li>
                              <div class="item">
                                   <div class="in">
                                        <div>
                                             2 Step Verification
                                        </div>
                                        <div class="custom-control custom-switch">
                                             <input type="checkbox" class="custom-control-input" id="customSwitch3"
                                                  checked />
                                             <label class="custom-control-label" for="customSwitch3"></label>
                                        </div>
                                   </div>
                              </div>
                         </li>
                         <li>
                              <a href="#" class="item">
                                   <div class="in">
                                        <div>Log out all devices</div>
                                   </div>
                              </a>
                         </li>
                    </ul>
               </div>

          </div>
          <!-- Wallet Card -->
          <div class="modal fade modalbox" id="addMember" tabindex="-1" role="dialog">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h5 class="modal-title"><i class="icon-user-plus"></i> ລົງທະບຽນ</h5>
                              <a href="javascript:;" data-dismiss="modal"><i class="icon-x"></i></a>
                         </div>
                         <div class="modal-body">

                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-primary btn-block btn-lg">
                                   <i class="icon-check-circle"></i>&nbsp; ບັນທຶກ
                              </button>
                         </div>
                    </div>
               </div>
          </div>
          <!-- App Bottom Menu -->
          <?php include('../../components/src/bottombar.php')?>
     </div>
     <script>
     $('#profile').addClass('active');
     $('.bubbler-menu-loader').click(function() {
          $('#addMember').modal('show');
     })
     </script>
</body>

</html>