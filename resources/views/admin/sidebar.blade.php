<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('adminhome') ? 'active' : '' }}" aria-current="page" href="/adminhome">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}" href="/admin/posts">
                    <span data-feather="file" class="align-text-bottom"></span>
                    My Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('transaksi') ? 'active' : '' }}" href="/transaksi">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Transaksi
                </a>
            </li>
        </ul>
    </div>
</nav>