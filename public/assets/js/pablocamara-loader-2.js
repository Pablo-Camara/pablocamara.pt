setTimeout(function (show = true) {
    var pabloCamara = document.getElementById('pablocamara');
    var oldClass = show ? 'start' : 'end';
    var newClass = show ? 'end' : 'start';
    toggleClassFromChildren(pabloCamara, ['div'], oldClass, newClass);
}, 100);
