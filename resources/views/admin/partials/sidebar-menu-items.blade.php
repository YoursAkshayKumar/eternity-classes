<ul class="main-menu" id="all-menu-items" role="menu">
    <li class="menu-title" role="presentation" data-lang="hr-title-main">Main</li>
    <li class="slide">
        <a href="#!" class="side-menu__item" role="menuitem">
            <span class="side_menu_icon"><i class="ri-home-2-line"></i></span>
            <span class="side-menu__label" data-lang="hr-dashboards">Admin Users</span>
            <i class="ri-arrow-down-s-line side-menu__angle"></i>
        </a>
        <ul class="slide-menu" role="menu">
            <li class="slide">
                <a href="{{ url(env('ADMIN_URL_PREFIX'). '/admin-users') }}" class="side-menu__item" role="menuitem" data-lang="hr-dashboards-ecommerce">Users</a>
            </li>
        </ul>
    </li>

    <li class="slide">
        <a href="#!" class="side-menu__item" role="menuitem">
            <span class="side_menu_icon"><i class="ri-file-list-3-line"></i></span>
            <span class="side-menu__label" data-lang="hr-blogs">Blogs</span>
            <i class="ri-arrow-down-s-line side-menu__angle"></i>
        </a>
        <ul class="slide-menu" role="menu">
            <li class="slide">
                <a href="{{ url(env('ADMIN_URL_PREFIX'). '/blogs') }}" class="side-menu__item" role="menuitem" data-lang="hr-blogs-list">Blogs List</a>
            </li>
        </ul>
    </li>
</ul>
