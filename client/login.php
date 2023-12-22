<?php
session_start();
include_once __DIR__ .  '/../classes/product.class.php';
include_once __DIR__ .  '/../classes/user.class.php';

$user = new user();

$product = new product();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $login = $user->login($_POST);
}
if (isset($_SESSION['clone_user_id'])) {
    header('Location: ../client/home.php');
    echo $_SESSION['clone_user_id'];
    # code...
}

?>

<!DOCTYPE HTML>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Suruchi Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <base href="http://localhost/market_update/">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.ico">
    <!-- Template CSS -->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <header class="main-header style-2 navbar">
            <div class="col-brand">
                <a href="index.php" class="brand-wrap">
                    <img src="assets/imgs/theme/nav-log.png" class="logo" alt="Suruchi Dashboard">
                </a>
            </div>
            <div class="col-nav">

            </div>
        </header>
        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <h4 class="card-title mb-4">Đăng nhập</h4>
                    <form action="" method="post">
                        <div class="mb-3">
                            <input class="form-control" placeholder="Tên người dùng" type="text" name="username">
                        </div>
                        <!-- form-group// -->
                        <div class="mb-3">
                            <input class="form-control" placeholder="Mật khẩu" type="password" name="password">
                        </div>
                        <!-- form-group// -->
                        <div class="mb-3">
                            <a href="#" class="float-end font-sm text-muted">Quên mật khẩu?</a>
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" checked="">
                                <span class="form-check-label">Ghi nhớ mật khẩu</span>
                            </label>
                        </div>
                        <!-- form-group form-check .// -->
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary w-100" name="login"> Đăng nhập </button>
                        </div>
                        <!-- form-group// -->
                    </form>

                </div>
            </div>
        </section>