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
        <?php
        echo "<h1>ລາຍງານການເບີກຈ່າຍ</h1>";
        ?>


    </div>


    <?php include('../../components/src/bottombar.php') ?>
    </div>
    <script>
        $('#disbursement').addClass('active');
    </script>
</body>

</html>