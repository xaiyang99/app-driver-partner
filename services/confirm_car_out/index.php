<!DOCTYPE html>
<html lang="en">
<?php include('../../access.php'); ?>

<head>
    <?php include('../../components/lib/library.php') ?>
</head>
<style>
    .card-footer{
        height: 300px;
    }
</style>

<body ng-app="app">
    <!-- App Capsule -->
    <div id="appCapsule">
        <!-- Wallet Card -->
        <!-- App Header -->
        <?php include('../../components/src/header.php') ?>
        <?php include('../../connection.php') ?>
        <!-- * App Header -->
        <!-- Confirm the car out -->
        <div class="card">
            <div class="card-header text-center">
                <img src="../../img/images.png" alt="" />
            </div>
            <div class="card-body">
                <div class="col-12">
                    <div class="stat-box">
                        <table>
                            <thead>
                                <?php
                                    $_id = $_SESSION['userID'];
                                    $sql = "SELECT * FROM tb_vehicle LEFT JOIN tb_shipping_routes ON tb_vehicle._id=tb_shipping_routes.vehicleID
                                    LEFT JOIN tb_users ON tb_vehicle._id=tb_users._id WHERE tb_users._id='$_id'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_array($result);
                                ?>
                                <tr>
                                    <th width="100px">
                                        <h2>
                                            <div class="title" class="text-center">
                                                <h3>ຊື່ລົດ</h3>
                                            </div>
                                        </h2>
                                    </th>
                                    <th width="100px">
                                        <div class="title">
                                            <h3>ສະຖານະ</h3>
                                        </div>
                                    </th>
                                    <th class="text-center">
                                        <h3>ຢືນຢັນ</h3>
                                    </th>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="value text-success"><?php echo $row['vehicleName'] ?></div>
                                    </td>
                                    <td>
                                        <div class="value text-success"><?php 
                                        $runStatus = $row['runStatus'];
                                        if($runStatus == "RUNNING"){
                                            echo "ກຳລັງແລ່ນ";
                                        }else{
                                            echo "ຈອດ";
                                        }
                                        ?></div>
                                    </td>
                                    <td>
                                        <button type="submit" ng-click="_onLogin()" id="submit" class="btn btn-danger">
                                            ອອກລົດ
                                        </button>
                                    </td>
                                </tr>

                            </thead>

                        </table>

                    </div>
                </div>

            </div>
            <div class="card-footer">

            </div>

        </div>



        <?php include('../../components/src/bottombar.php') ?>
    </div>
    <script>
        $('#confirm_car_out').addClass('active');
    </script>
</body>

</html>