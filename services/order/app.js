var app = angular.module("app", []);
app.controller("orders", function ($scope, $http) {
  $scope._show_detail = async function (e) {
    $("#show_detail").modal("show");
    await $http
      .get("./sql/server.php?list_order&bill_no=" + e)
      .success(function (res) {
        var arr = res.split("/");
        $scope._total = arr[0];
        $scope._order_list = JSON.parse(arr[1]);
      });
  };

  $scope._close_detail = function () {
    $scope._order_list = null;
    $scope._total = null;
    $("#show_detail").modal("hide");
  };

  $scope._call_total = function () {
    $http.get("./sql/server.php?food_and_drink_total").success(function (res) {
      var arg = res.split("/");
      $scope._summary_all = arg[0];
      $scope._summary_of_food = arg[1];
      $scope._summary_of_drinks = arg[2];
    });
  };

  //! call functions
  $scope._call_total();
});
