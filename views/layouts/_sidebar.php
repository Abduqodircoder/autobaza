<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <?= \yii\helpers\Html::a('<div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AUTOZAPCHAST</div>', \yii\helpers\Url::home(),['class' => 'sidebar-brand d-flex align-items-center justify-content-center'])?>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <?= \yii\helpers\Html::a('<i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bosh sahifa</span>', \yii\helpers\Url::home(),['class' => 'nav-link'])?>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Ombor
    </div>

    <li class="nav-item">
        <?= \yii\helpers\Html::a('<i class="fas fa-fw fa-cog"></i>
            <span>Zapchastlar ro\'yxati</span>',\yii\helpers\Url::to(['product-list/index']),["class" => "nav-link collapsed"])?>
    </li>
    <li class="nav-item">
        <?= \yii\helpers\Html::a('<i class="fas fa-fw fa-cog"></i>
            <span>Bizda bor Zapchastlar ro\'yxati</span>',\yii\helpers\Url::to(['product/index']),["class" => "nav-link collapsed"])?>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Sotuvchilar
    </div>

    <li class="nav-item">
        <?= \yii\helpers\Html::a('<i class="fas fa-fw fa-cog"></i>
            <span>Mahsulot sotish</span>',\yii\helpers\Url::to(['sale/index']),["class" => "nav-link collapsed"])?>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
<!--    <div class="sidebar-card d-none d-lg-flex">-->
<!--        <img class="sidebar-card-illustration mb-2" src="/img/undraw_rocket.svg" alt="...">-->
<!--        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>-->
<!--        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>-->
<!--    </div>-->

</ul>
<!-- End of Sidebar -->