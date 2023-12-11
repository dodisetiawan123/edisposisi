<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box" style="width: 171px!important">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" height="24" width="160">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" height="24" width="160">
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" height="24" width="160">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" height="24" width="160">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="<?php echo $language["Search"]; ?>" aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

          

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">LOGIN</span>
                </button>
            </div>

        </div>
    </div>
</header>

<!-- <div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo site_url('admin/dashboard') ?>" id="topnav-dashboard" role="button">
                            <i data-feather="home"></i><span data-key="t-dashboards">LIST DOKUMEN</span>
                        </a>
                    </li>
                     

                </ul>
            </div>
        </nav>
    </div>
</div> -->