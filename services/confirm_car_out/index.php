<!DOCTYPE html>
<html lang="en">
<?php include('../../access.php'); ?>

<head>
    <?php include('../../components/lib/library.php') ?>
</head>

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
                <table>
                    <thead>
                        <tr>
                            <th>
                                <h2>ຊື່ລົດ:</h2>
                            </th>
                            <td>
                                <h2>A002</h2>
                            </td>

                        </tr>
                        <tr>
                            <th>
                                <h2>ສະຖານະ:</h2>
                            </th>
                            <td>
                                <h2>ກຳລັງແລ່ນ</h2>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h2>ສາຍຂົນສົ່ງ:</h2>
                            </th>
                            <td>
                                <h2>ສາຍລ້ອງແຈ້ງ</h2>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h2>ເວລາທີ່ຈະອອກ:</h2>
                            </th>
                            <td>
                                <h2>8:30 AM</h2>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h2>ສູນທີ່ຈະໄປ:</h2>
                            </th>
                            <td>
                                <h2>ສູນປາກເຊ</h2>
                            </td>
                        </tr>
                        <tr>
                            <th><h2>ການອະນຸມັດ</h2></th>
                            <td><h2>ຍັງບໍ່ໄດ້ອະນຸມັດ</h2></td>
                        </tr>
                    </thead>

                </table>
            </div>
            <div class="card-footer text-center">
                <button type="submit" ng-click="_onLogin()" id="submit" class="btn btn-danger btn-block btn-lg">
                    ຢືນຢັນການອອກລົດ
                </button>
            </div>
        </div>



        <?php include('../../components/src/bottombar.php') ?>
    </div>
    <script>
        $('#confirm_car_out').addClass('active');
    </script>
</body>

</html>