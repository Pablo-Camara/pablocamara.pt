<div class="menu" id="main-menu">
    <a href="javascript:void(0);"
        style="text-align: center; display: none"
        class="menu-item" id="menu-toggler">MENU</a>
    <a
        href="{{ route(trans('routes.about-me')) }}"
        class="menu-item"
        id="about-me-menu-item">
        {{ trans('menus.main-menu.about-me') }}
    </a>
    <a href="#" class="menu-item">
        {{ trans('menus.main-menu.projects') }}
    </a>
    <a href="#" class="menu-item">
        {{ trans('menus.main-menu.contact') }}
    </a>
</div>
