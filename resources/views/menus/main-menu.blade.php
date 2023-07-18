<div class="menu" id="main-menu">
    <a href="javascript:void(0);"
        style="text-align: center; display: none"
        class="menu-item menu-toggler" id="menu-toggler">MENU</a>
    <a
        href="{{ route(trans('routes.about-me')) }}"
        class="menu-item"
        id="about-me-menu-item"
        style="display: none">
        {{ trans('menus.main-menu.about-me') }}
    </a>
    <a
        href="{{ route(trans('routes.projects')) }}"
        class="menu-item"
        style="display: none">
        {{ trans('menus.main-menu.projects') }}
    </a>
    <a href="#" class="menu-item"
        style="display: none">
        {{ trans('menus.main-menu.contact') }}
    </a>
</div>
