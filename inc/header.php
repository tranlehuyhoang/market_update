<?php
session_start();

include_once __DIR__ .  '/../classes/product.class.php';
include_once __DIR__ .  '/../classes/user.class.php';

$user = new user();

$product = new product();


if (isset($_SESSION['clone_user_id'])) {
    $getuserbyid = $user->getuserbyid($_SESSION['clone_user_id']);
}
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $user->logout();
?>
<script type="text/javascript">
location.href = '../client/home.php';
</script>
<?php
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
    <base href="http://localhost/market_update/">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.ico">
    <!-- Template CSS -->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.php" class="brand-wrap" style="width: 50px;">
                <img src="assets/imgs/theme/nav-log.png" style="height: 30px; " class="logo" alt="Suruchi Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i>
                </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">

                <li class="menu-item">
                    <a class="menu-link" href="index.php?pg=products-list"> <i
                            class="icon material-icons md-shopping_bag"></i>
                        <span class="text">Sản Phẩm</span>
                    </a>
                </li>


            </ul>
            <br>
            <br>
        </nav>
    </aside>

    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">

                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i
                        class="material-icons md-apps"></i> </button>
                <ul class="nav">



                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount"
                            aria-expanded="false"> <img class="img-xs rounded-circle"
                                src="assets/imgs/people/quantri.jpg" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <?php
                            if (isset($getuserbyid)) {
                                if ($getuserbyid && $getuserbyid->num_rows > 0) {
                                    $i = 0;
                                    while ($result = $getuserbyid->fetch_assoc()) {
                                        # code...
                            ?>
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons md-perm_identity"></i><?php echo  $result['username'] ?></a>
                            <?php
                                        $i++;
                                    }
                                } else {
                                    ?>
                            <?php
                                }
                            }
                            ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="?action=logout"
                                onclick="return  confirm('Xác nhận đăng xuất')"><i
                                    class="material-icons md-exit_to_app"></i>Đăng xuất</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>