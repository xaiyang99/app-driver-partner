<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../../components/lib/library.php') ?>
</head>

<body ng-app="app">
     <!-- App Capsule -->
     <div id="appCapsule">
          <!-- App Header -->
          <?php include('../../components/src/header.php') ?>
          <!-- * App Header -->
          <div class="section mt-2">
               <div class="section-title">Today</div>
               <div class="transactions">
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                         <div class="detail">
                              <img src="../../assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                              <div>
                                   <strong>Amazon</strong>
                                   <p>Shopping</p>
                              </div>
                         </div>
                         <div class="right">
                              <div class="price text-danger"> - $ 150</div>
                         </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                         <div class="detail">
                              <img src="../../assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                              <div>
                                   <strong>Apple</strong>
                                   <p>Appstore Purchase</p>
                              </div>
                         </div>
                         <div class="right">
                              <div class="price text-danger">- $ 29</div>
                         </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                         <div class="detail">
                              <img src="../../assets/img/sample/avatar/avatar3.jpg" alt="img"
                                   class="image-block imaged w48">
                              <div>
                                   <strong>Alex Ljung</strong>
                                   <p>Transfer</p>
                              </div>
                         </div>
                         <div class="right">
                              <div class="price">+ $ 1,000</div>
                         </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                         <div class="detail">
                              <img src="../../assets/img/sample/avatar/avatar4.jpg" alt="img"
                                   class="image-block imaged w48">
                              <div>
                                   <strong>Beatriz Brito</strong>
                                   <p>Transfer</p>
                              </div>
                         </div>
                         <div class="right">
                              <div class="price text-danger">- $ 186</div>
                         </div>
                    </a>
                    <!-- * item -->
               </div>
          </div>
          <!-- App Bottom Menu -->
          <?php include('../../components/src/bottombar.php')?>
     </div>
     <script>
     $('#agency').addClass('active');
     $('.bubbler-menu-loader').click(function() {
          $('#addMember').modal('show');
     })
     </script>
</body>

</html>