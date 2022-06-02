<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <meta http-equiv="finddev" content="IE=edge">
     <title>Login</title>
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/font/font-style.css">
     <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="finddev">
     <meta name="keywords" content="finddev" />
     <link rel="shortcut icon" href="img/logo.png">
     <style>
     .app-logo {
          margin-top: -20px;
          color: #ffff !important;
          z-index: 9999;

     }

     .h1,
     .h2 {
          color: #ffff !important;
          z-index: 9999;
     }

     .label,
     .form-control {
          font-size: 16px !important;
     }

     .form-control {
          margin-top: 5px !important;
          margin-right: 3px;
          border-radius: 10px !important;
          padding-left: 20px !important;
          padding-right: 20px !important;
          background-color: transparent !important;
     }
     </style>
</head>


<body class="bg-light" ng-app="app" ng-controller="splash" ng-init="page='0'">
     <!-- * loader -->

     <!-- App Header -->
     <div class="appHeader no-border">
          <div class="left">
               <a href="#" class="headerButton goBack">
                    <ion-icon name="chevron-back-outline"></ion-icon>
               </a>
          </div>
          <div class="pageTitle">
               ຄຳແນະນຳ
          </div>
          <div class="right mr-3">
               <a href="login.php">
                    ຂ້າມ
               </a>
          </div>
     </div>
     <!-- * App Header -->

     <!-- App Capsule -->
     <div id="appCapsule">
          <div class="section">
               <div class="splash-page mt-5 mb-5">
                    <div class="mb-3">
                         <img src="{{img}}" alt="image" class="imaged square" style="height:220px!important;width:auto">
                    </div>
                    <h3 class="mb-2">ຍິນດີຕ້ອນຮັບທຸກທ່ານທີ່ກຳລັງນຳໃຊ້ແອັບຂອງເຮົາ</h3>
                    <p>
                         ພວກເຮົາມີຄຳແນະນຳວິທີການນຳໃຊ້ ແລະ ຂໍ້ກຳນົດຕ່າງໆຂອງລະບົບຢູ່ຮູບຂ້າງເທິງຢ່າງລະອຽດແລ້ວ<br>
                         ຂອບໃຈທີ່ທ່ານໃຊ້ບໍລິການ
                    </p>
               </div>
          </div>
          <div class="row">
               <div class="col-md-12 text-center">
                    <div class="btn-group">
                         <a href="#" ng-hide="forward" ng-click="_onBack(page)"> Back</a> &nbsp; &nbsp;
                         <span ng-bind="page"></span>
                         &nbsp; &nbsp;

                         <a href="#" ng-hide="next" ng-click="_onNext(page)"> Next</a>
                    </div>
               </div>
          </div>

          <div class="fixed-bar">
               <div class="row">
                    <div class="col-12">
                         <a href="./sign-up.php" class="btn btn-lg btn-primary btn-block">ລົງທະບຽນ</a>
                    </div>
               </div>
          </div>

     </div>
     <!-- * App Capsule -->
     <!-- Jquery -->
     <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
     <!-- Bootstrap-->
     <script src="assets/js/lib/popper.min.js"></script>
     <script src="assets/js/lib/bootstrap.min.js"></script>
     <script src="assets/angularjs.1.4.0/angular.min.js"></script>
     <!-- Ionicons -->
     <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
     <!-- Owl Carousel -->
     <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
     <!-- Base Js File -->
     <script src="assets/js/base.js"></script>
     <script>
     var app = angular.module('app', []);
     app.controller('splash', function($scope) {
          var img = [
               'img/splash/undraw_accept_tasks_po1c.svg',
               'img/splash/undraw_Access_account_re_8spm.svg',
               'img/splash/undraw_access_denied_re_awnf.svg',
               'img/splash/undraw_develop_app_re_bi4i.svg',
               'img/splash/undraw_insert_block_re_4t4l.svg',
               'img/splash/undraw_Mobile_app_re_catg.svg',
               'img/splash/undraw_Mobile_apps_re_3wjf.svg',
               'img/splash/undraw_my_app_re_gxtj.svg',
               'img/splash/undraw_My_location_re_r52x.svg',
               'img/splash/undraw_my_notifications_rjej.svg',
               'img/splash/undraw_Online_article_re_daq5.svg',
          ];
          $scope.img = img[0]
          $scope._onNext = function(i) {
               var page = Number(i + 1)
               $scope.forward = false
               if (page >= img.length) {
                    $scope.next = true
                    return false
               } else {
                    $scope.img = img[page]
                    $scope.page = page
                    $scope.next = false
               }
          }

          $scope._onBack = function(i) {
               $scope.forward = true
               $scope.next = false
               var page = Number(i - 1)
               if (page <= 0) {
                    return false;
               } else {
                    $scope.forward = false
                    $scope.img = img[page]
                    $scope.page = page
               }
          }
     })
     </script>
</body>

</html>