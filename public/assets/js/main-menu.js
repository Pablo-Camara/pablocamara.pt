function animateMainMenuItems(visible, msTimeInBetween, callbackAfter) {
    const mainMenu = document.getElementById('main-menu');
    const mainMenuItems = mainMenu.getElementsByTagName('a');

    if (typeof callbackAfter === 'function') {
        setTimeout (function() {
            callbackAfter();
        }, (mainMenuItems.length+1) * msTimeInBetween);
    }


    for (var i = 1; i <= mainMenuItems.length; i++) {
        const mainMenuItem = mainMenuItems[i-1];

        if (mainMenuItem.classList.contains('menu-toggler')) {
            continue;
        }

        setTimeout (function() {
            mainMenuItem.style.display = visible ? 'block' : 'none';
        }, i * msTimeInBetween);
    }
}
