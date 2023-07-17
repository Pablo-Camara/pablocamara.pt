function animateMainMenuItems(visible) {
    const mainMenu = document.getElementById('main-menu');
    const mainMenuItems = mainMenu.getElementsByTagName('a');
    for (var i = 1; i <= mainMenuItems.length; i++) {
        const mainMenuItem = mainMenuItems[i-1];

        if (mainMenuItem.classList.contains('menu-toggler')) {
            continue;
        }

        setTimeout (function() {
            mainMenuItem.style.display = visible ? 'block' : 'none';
        }, i * 800);
    }
}

animateMainMenuItems(true);
