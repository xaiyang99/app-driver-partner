  <div class="appHeader bg-primary text-light" style="background-color:#c92a2a !important;">
       <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                 <i class="icon-menu1 fa-2x"></i>
            </a>
       </div>
       <div class="pageTitle">
            <!-- <h2 class="text-white" id="app_titles">ຢືນຢັນຖ້ຽວລົດ</h2> -->
       </div>
       <div class="right">
            <!-- <a href="app-notifications.html" class="headerButton">
                 <i class="icon-bell" style="font-size:25px"></i>
                 <span class="badge badge-danger">0</span>
            </a> -->
            <a href="#" class="headerButton">
                 <img src="../../img/user_null.png" alt="image" class="imaged w32 rounded" />
            </a>
       </div>
  </div>

  <div class="modal fade action-sheet" id="addMember" tabindex="-1" role="dialog">
       <div class="modal-dialog" role="document">
            <div class="modal-content">
                 <div class="modal-header">
                      <!-- <h5 class="modal-title">ກະລຸນາປ້ອນຂໍ້ມູນຕົວແທນຂອງທ່ານ</h5> -->
                 </div>
                 <div class="modal-body">
                      <div class="action-sheet-content">
                           <form>
                                <div class="form-group basic">
                                     <div class="input-wrapper">
                                          <label class="label" for="name3">Name</label>
                                          <input type="text" class="form-control" id="name3" placeholder="Enter your name">
                                          <i class="clear-input">
                                               <ion-icon name="close-circle"></ion-icon>
                                          </i>
                                     </div>
                                     <div class="input-info">Enter your full name</div>
                                </div>

                                <div class="form-group basic">
                                     <div class="input-wrapper">
                                          <label class="label" for="password3">Password</label>
                                          <input type="password" class="form-control" id="password3" placeholder="Type a password">
                                          <i class="clear-input">
                                               <ion-icon name="close-circle"></ion-icon>
                                          </i>
                                     </div>
                                     <div class="input-info">Your password must be between 8 to 16 chars</div>
                                </div>
                                <div class="form-group basic">
                                     <button type="button" class="btn btn-primary btn-block btn-lg" data-dismiss="modal"><i class="icon-check-circle"></i>&nbsp; ບັນທຶກ
                                     </button>
                                </div>
                           </form>
                      </div>
                 </div>
            </div>
       </div>
  </div>