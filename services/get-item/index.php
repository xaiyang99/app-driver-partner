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
          <div class="extraHeader pr-0 pl-0">
               <ul class="nav nav-tabs lined" role="tablist">
                    <li class="nav-item">
                         <a class="nav-link active" data-toggle="tab" href="#waiting" role="tab">
                              ກຳລັງກວດສອບ
                         </a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#paid" role="tab">
                              ກວດສອບແລ້ວ
                         </a>
                    </li>
               </ul>
          </div>
          <!-- App Capsule -->
          <div class="section tab-content pt-2">
               <!-- waiting tab -->
               <div class="tab-pane fade show active mt-5" id="waiting" role="tabpanel">
                    <div class="row">
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/1.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 14</div>
                                   <p>Prime Monthly Subscription</p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                              </div>
                         </div>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/2.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 8</div>
                                   <p>Monthly Payment </p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                              </div>
                         </div>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/3.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 15</div>
                                   <p>Envato Elements Subscription</p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                              </div>
                         </div>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/4.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 49</div>
                                   <p>Subscription Fees</p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                              </div>
                         </div>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/5.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 12</div>
                                   <p>Pro Membership</p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                              </div>
                         </div>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/1.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 14</div>
                                   <p>Prime Monthly Subscription</p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                              </div>
                         </div>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/2.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 8</div>
                                   <p>Monthly Payment </p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                              </div>
                         </div>
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/3.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 15</div>
                                   <p>Envato Elements Subscription</p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                              </div>
                         </div>
                    </div>
               </div>
               <!-- * waiting tab -->

               <!-- paid tab -->
               <div class="tab-pane fade mt-5" id="paid" role="tabpanel">
                    <div class="row">
                         <div class="col-6 mb-2">
                              <div class="bill-box">
                                   <div class="img-wrapper">
                                        <img src="../../assets/img/sample/brand/1.jpg" alt="img"
                                             class="image-block imaged w48">
                                   </div>
                                   <div class="price">$ 14</div>
                                   <p>Prime Monthly Subscription</p>
                                   <a href="#" class="btn btn-primary btn-block btn-sm">DETAIL</a>
                              </div>
                         </div>
                    </div>
               </div>
               <!-- * paid tab -->

          </div>

     </div>
     <!-- App Bottom Menu -->
     <?php include('../../components/src/bottombar.php')?>
     </div>
     <script>
     $('#get-item').addClass('active');
     $('.bubbler-menu-loader').click(function() {
          $('#addMember').modal('show');
     })
     </script>
</body>

</html>