function animatePabloCamaraLoader(show) {
    var pabloCamara = document.getElementById('pablocamara');
    var oldClass = show ? 'start' : 'end';
    var newClass = show ? 'end' : 'start';
    toggleClassFromChildren(pabloCamara, ['div'], oldClass, newClass);
}
setTimeout(function () {
    animatePabloCamaraLoader(true);
}, 100);
