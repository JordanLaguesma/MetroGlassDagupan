<nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-0">
        <a class="navbar-brand font-weight-bolder ms-3" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
            Soft UI Design System
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item px-3">
                    <a class="nav-link">
                        Pages
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">
                        Utilities
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">
                        Blocks
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link">
                        Docs
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <form action="#" method="post">
                    <div class="input-group">
                        <button type="submit" class="btn btn-sm bg-gradient-dark mb-0" data-bs-display="static" aria-expanded="false">
                            <span class="btn-inner--icon"><ion-icon name="search-outline"></ion-icon></span>
                            <span class="btn-inner--text">Search</span>
                        </button>
                        <input type="text" name="" id="" class="form-control mb-0">
                    </div>
                </form>
                <a class="btn btn-icon-only btn-2 mb-0 ms-2">
                    <span class="btn-inner--icon"><ion-icon name="cart-outline"></ion-icon></span>
                </a>
                <div class="dropdown dropdown-center ms-2">
                    <a href="#" class="btn btn-round bg-gradient-dark dropdown-toggle mb-0 me-1" id="account" data-bs-toggle="dropdown"><?php echo session()->get('username'); ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="account">
                        <li>
                            <a href="#" class="dropdown-item">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('logout'); ?>" class="dropdown-item">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</nav>