<!DOCTYPE html>
<html lang="en">
<?php include('../../access.php'); ?>

<head>
    <?php include('../../components/lib/library.php') ?>
</head>
<style>
    .control-label {
        color: black;
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
        <?php
        $_id = $_SESSION['userID'];
        $sql = "SELECT * FROM tb_users LEFT JOIN tb_vehicle ON tb_users._id = tb_vehicle._id WHERE tb_users._id='$_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center">
                    <img src="../../img/profiles.png" alt="" width="100px"><br>
                    <?php echo $row['first_name']; ?>
                </h3>

            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">ຊື່ ແລະ ນາມສະກຸນ:</label><br>
                            <label class="control-label"><?php echo $row['first_name'] . " ";
                                                            echo $row['last_name']; ?></label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">ເພດ:</label><br>
                            <label class="control-label">
                                <?php
                                $gender = $row['gender'];
                                if ($gender == "MALE") {
                                    echo "ຊາຍ";
                                } else {
                                    echo "ຍິງ";
                                }
                                ?>
                            </label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">ເບີໂທ:</label><br>
                            <label class="control-label"><?php echo $row['phoneNumber'] ?></label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">ລົດທີ່ຂັບ:</label><br>
                            <label class="control-label"><?php echo $row['vehicleName'] ?></label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">ປ້າຍລົດ:</label><br>
                            <label class="control-label"><?php echo $row['passID'] ?></label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">ທີ່ຢູ່:</label><br>
                            <label class="control-label"><?php echo $row['address'] ?></label>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>

        </div>


    </div>


    <?php include('../../components/src/bottombar.php') ?>
    </div>
    <script>
        $('#profile_users').addClass('active');
    </script>
</body>

</html>