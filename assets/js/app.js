var mainApp = angular.module("app", ["ngRoute"]);

mainApp.controller("home", function ($scope, $http) {
  $("#app_titles").html("ໜ້າຫຼັກ");
  $("#list").removeClass("active");
  $("#profile").removeClass("active");
  $("#home").addClass("active");
});
mainApp.controller("list", function ($scope, $http) {
  $("#app_titles").html("ລາຍການ");
  $("#home").removeClass("active");
  $("#profile").removeClass("active");
  $("#list").addClass("active");
});
mainApp.controller("profile", function ($scope, $http) {
  $("#app_titles").html("ໂປຣໄຟລ໌");
  $("#home").removeClass("active");
  $("#list").removeClass("active");
  $("#profile").addClass("active");
});

mainApp.config(function ($routeProvider) {
  $routeProvider
    .when("/", {
      controller: "home",
      templateUrl: "services/home/index.php"
    })
    .when("/profile", {
      controller: "profile",
      templateUrl: "services/profile/index.php"
    })
    .when("/list", {
      controller: "list",
      templateUrl: "services/list"
    })
    .otherwise({
      redirectTo: "/"
    });
});
