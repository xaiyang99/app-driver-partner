<!doctype html>
<html lang="en">


<!-- Mirrored from egemem.com/theme/finapp/view/app-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 06:38:13 GMT -->

<head>
     <meta charset="utf-8" />
     <meta http-equiv="finddev" content="IE=edge">
     <title>Login</title>
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/font/font-style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="finddev">
     <meta name="keywords" content="finddev" />
     <link rel="shortcut icon" href="img/ans_logo_new.jpeg">
     <style>
          .appHeader {
               background-color: #c92a2a;
               height: 250px;
               z-index: -999;
               border-bottom-left-radius: 25%;
               border-bottom-right-radius: 25%;
               color: #ffff !important;
               -webkit-box-shadow: -1px 7px 30px 0px rgba(95, 97, 94, 1);
               -moz-box-shadow: -1px 7px 30px 0px rgba(95, 97, 94, 1);
               box-shadow: -1px 7px 30px 0px rgba(95, 97, 94, 1);
          }

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

          .btn-primary {
               position: fixed;
               bottom: 0 !important;
               border-radius: 0;
               font-size: 20px;
          }

          .headerButton {
               font-size: 25px;
          }

          .validate {
               color: red;
          }
     </style>
</head>

<body class="bg-light" ng-app="app" ng-controller="login">
     <!-- loader -->
     <div id="loader">
          <img src="img/loading.gif" alt="icon" class="loading-icon">
     </div>
     <!-- * loader -->
     <!-- App Header -->
     <div class="left mt-2 ml-3">
          <a href="./splash.php" class="headerButton text-white">
               <ion-icon name="chevron-back-outline"></ion-icon>
          </a>
     </div>
     <div class="appHeader no-border">
          <div class="pageTitle"></div>
          <div class="right">
          </div>
     </div>
     <!-- * App Header -->

     <!-- App Capsule -->
     <div id="appCapsule">
          <form ng-submit="submitForm()">
               <div class="section app-logo text-center">
                    <img src="img/logo.jpeg" alt="" width="300px" class="rounded mb-2">
                    <h1 class="text-white"></h1>
                    <h3 class="text-white">ເຂົ້າສູ່ລະບົບ</h3>
               </div>
               <div class="section mt-5 mb-5">
                    <div class="form-group basic">
                         <div class="input-wrapper">
                              <input type="text" class="form-control mt-2" ng-model="username" ng-enter="submitForm()" placeholder="ຊື່ ຫຼື ເບີໂທ">
                              <i class="clear-input">
                                   <ion-icon name="close-circle"></ion-icon>
                              </i>
                              <span class="validate" ng-hide="_reqUsername">ກະລຸນາປ້ອນຊື່ ຫຼື ເບີໂທກ່ອນ</span>
                         </div>
                    </div>
                    <div class="form-group basic">
                         <div class="input-wrapper">
                              <input type="password" class="form-control mt-2" ng-model="password" ng-enter="submitForm()" placeholder="ລະຫັດຜ່ານ">
                              <i class="clear-input">
                                   <ion-icon name="close-circle"></ion-icon>
                              </i>
                              <span class="validate" ng-hide="_reqPassword">ກະລຸນາປ້ອນລະຫັດຜ່ານກ່ອນ</span>
                         </div>
                    </div>

                    <div class="form-links mt-2">
                         <!-- <div>
                              <a href="./sign-up.php">
                                   <ion-icon name="person-add-outline"></ion-icon> ລົງທະບຽນ
                              </a>
                         </div> -->
                         <!-- <div><a href="app-forgot-password.html" class="text-muted">ລືມລະຫັດຜ່ານ?</a></div> -->
                    </div>
               </div>

     </div>
     <button type="submit" ng-click="_onLogin()" id="submit" class="btn btn-danger btn-block btn-lg">
          ເຂົ້າສູ່ລະບົບ
     </button>
     </form>
     <!-- * App Capsule -->
     <!-- Jquery -->
     <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
     <script src="assets/angularjs.1.4.0/angular.min.js"></script>
     <!-- Bootstrap-->
     <script src="assets/js/lib/popper.min.js"></script>
     <script src="assets/js/lib/bootstrap.min.js"></script>
     <script src="assets/AIO/notiflix-aio-2.4.0.min.js"></script>
     <!-- Owl Carousel -->
     <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
     <!-- Base Js File -->
     <script src="assets/js/base.js"></script>

     <script>
          var app = angular.module('app', []);
          app.directive('ngEnter', function() {
               return function(scope, element, attrs) {
                    element.bind("keydown keypress", function(event) {
                         if (event.which === 13) {
                              scope.$apply(function() {
                                   scope.$eval(attrs.ngEnter);
                              });
                              event.preventDefault();
                         }
                    });
               };
          });
          app.controller('login', function($scope, $http) {
               $scope._reqUsername = true;
               $scope._reqPassword = true;
               $scope.submitForm = function() {
                    if (!$scope.username & !$scope.password) {
                         $scope._reqUsername = false;
                         $scope._reqPassword = false;
                    } else if (!$scope.username) {
                         $scope._reqUsername = false;
                    } else if (!$scope.password) {
                         $scope._reqUsername = true;
                         $scope._reqPassword = false
                    } else {
                         $scope._reqUsername = true;
                         $scope._reqPassword = true;
                         data = {
                              username: $scope.username,
                              password: $scope.password
                         }

                         $.post('./authorize.php', data, function(res) {
                              console.log(res);
                              if (res == 200) {
                                   $("#loader").fadeToggle(100);
                                   setTimeout(function() {
                                        window.location = 'services/home/'
                                   }, 1000);
                              } else {
                                   Notiflix.Report.Failure('ຜິດພາດ',
                                        'ຊື່ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ !',
                                        'ປິດ',
                                        function() {
                                             $scope.username = null;
                                             $scope.password = null
                                        })
                              }
                         })

                    }
               }

          })
     </script>
</body>

</html>