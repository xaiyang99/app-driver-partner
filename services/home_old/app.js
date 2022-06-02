var app = angular.module("app", []);
app.controller("list_menu", function ($scope, $http) {
  $scope._callMenu = function () {
    $http.get("sql/query_menu.php?list_menu").success(function (res) {
      $scope._list_menu = res;
    });
  };

  $scope._takeOrder = async function (m_id) {
    $("#confirmOrder").modal("show");
    await $http
      .get(`./sql/query_menu.php?menu_detail&m_id=${m_id}`)
      .success(function (data) {
        console.log(data.m_name_l);
        $scope.order_title = data.m_name_l;
        $scope.m_id = m_id;
        $scope.m_Sprice = data.m_Sprice;
        $scope.m_case = data.m_case;
        $scope.m_img = data.m_img;
      });
  };

  $scope._confirmOrder = async function (tb_id, bill_no) {
    await $http
      .post("sql/create_order.php", {
        m_id: $scope.m_id,
        m_sprice: $scope.m_Sprice,
        m_case: $scope.m_case,
        od_qty: $scope.od_qty,
        tb_id,
        bill_no,
        od_note: $scope.od_note,
      })
      .success(function (res) {
        if (res == 200) {
          $scope.od_note = null;
        } else {
          return false;
        }
      });
  };

  //! QTY CONTROL
  $scope.od_qty = 1;
  $scope._plus = function () {
    $scope.od_qty++;
  };
  $scope._minus = function () {
    if ($scope.od_qty <= 1) {
      _Warning("ທ່ານບໍ່ສາມາດຈຳນວນໜ້ອຍກວ່າ" + $scope.od_qty);
    } else {
      $scope.od_qty--;
    }
  };

  //! CALL FUNCTIONS
  $scope._callMenu();
});

function _turnOnTable(tb_id) {
  $.post("./sql/turn_on_table.php", { tb_id }, function (data) {
    console.log(data);
    if (data == 200) {
      $("#process-success").modal("show");
    } else {
      $("#process-error").modal("show");
    }
  });
}
