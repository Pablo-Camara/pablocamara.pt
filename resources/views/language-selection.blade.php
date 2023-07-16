<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('assets/css/pablocamara-loader-2.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/language-selection.css') }}">

        <title>Pablo Câmara</title>

        <style>
            html,body {
                margin: 0;
                padding: 0;
                font-family: Verdana;
            }

            .header {
                width: 100%;
                background: #00202B;
            }


            /* putting these opacity transitions css here
            because of a bug in google chrome
            that would show images with full opacity on the first load
            in incognito mode, next loads would be fine
            but I assume first load is the more important
            so this is the fix.

            also for the copyright text,
            opacity transitions has bugs in chrome.
            */
            #language-selector .language .flag img.load-pt-flag {
                will-change: opacity;
                transition: opacity 3s;
                transition-timing-function: ease-in-out;
            }
            #language-selector .language .flag img.load-pt-flag.start {
                opacity: 0;
            }
            #language-selector .language .flag img.load-pt-flag.end {
                opacity: 1;
                transition-delay: 3.5s;
            }
            #language-selector .language .flag img.load-en-flag {
                will-change: opacity;
                transition: opacity 3s;
                transition-timing-function: ease-in-out;
            }
            #language-selector .language .flag img.load-en-flag.start {
                opacity: 0;
            }
            #language-selector .language .flag img.load-en-flag.end {
                opacity: 1;
                transition-delay: 3.5s;
            }
            #language-selector .language .flag img.load-es-flag {
                will-change: opacity;
                transition: opacity 2s;
                transition-timing-function: ease-in-out;
            }
            #language-selector .language .flag img.load-es-flag.start {
                opacity: 0;
            }
            #language-selector .language .flag img.load-es-flag.end {
                opacity: 1;
                transition-delay: 4s;
            }

            /* copyright opacity transitions */
            #language-selector #lang-copyright.load-copyright {
                transition: opacity 1s;
                transition-timing-function: ease-in;
            }
            #language-selector #lang-copyright.load-copyright.start {
                opacity: 0;
            }
            #language-selector #lang-copyright.load-copyright.end {
                opacity: 1;
                transition-delay: 3.8s;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <div id="pablocamara">
                <!-- First letter P -->
                <div class="loadLeftP start"></div>
                <div class="loadUpperP start"></div>
                <div class="loadLowerP start"></div>
                <div class="loadRightP start"></div>

                <!-- First letter A -->
                <div class="loadLeftA start"></div>
                <div class="loadRightA start"></div>
                <div class="loadTopA start"></div>
                <div class="loadBottomA start"></div>



                <!-- First letter B -->
                <div class="loadLeftB start"></div>
                <div class="loadTopB start"></div>
                <div class="loadTopRightB start"></div>
                <div class="loadMiddleB start"></div>
                <div class="loadBottomB start"></div>
                <div class="loadBottomRightB start"></div>

                <!-- First letter L -->
                <div class="loadLeftL start"></div>
                <div class="loadBottomL start"></div>

                <!-- First letter O -->
                <div class="loadLeftO start"></div>
                <div class="loadRightO start"></div>
                <div class="loadTopO start"></div>
                <div class="loadBottomO start"></div>


                <!-- First letter C -->
                <div class="loadTopC start"></div>
                <div class="loadLeftC start"></div>
                <div class="loadBottomC start"></div>

                <!-- Second letter A -->
                <div class="loadA2Hat1 start"></div>
                <div class="loadA2Hat2 start"></div>
                <div class="loadA2Hat3 start"></div>
                <div class="loadA2Hat4 start"></div>
                <div class="loadA2Hat5 start"></div>
                <div class="loadLeftA2 start"></div>
                <div class="loadRightA2 start"></div>
                <div class="loadTopA2 start"></div>
                <div class="loadBottomA2 start"></div>

                <!-- First letter M -->
                <div class="loadLeftM start"></div>
                <div class="loadMiddleM1 start"></div>
                <div class="loadMiddleM2 start"></div>
                <div class="loadMiddleM3 start"></div>
                <div class="loadMiddleM4 start"></div>
                <div class="loadMiddleM5 start"></div>
                <div class="loadRightM start"></div>

                <!-- Third letter A -->
                <div class="loadLeftA3 start"></div>
                <div class="loadRightA3 start"></div>
                <div class="loadTopA3 start"></div>
                <div class="loadBottomA3 start"></div>

                <!-- First letter R -->
                <div class="loadLeftR start"></div>
                <div class="loadUpperR start"></div>
                <div class="loadMiddleR start"></div>
                <div class="loadTopRightR start"></div>
                <div class="loadBottomRightR1 start"></div>
                <div class="loadBottomRightR2 start"></div>
                <div class="loadBottomRightR3 start"></div>

                <!-- Fourth letter A -->
                <div class="loadLeftA4 start"></div>
                <div class="loadRightA4 start"></div>
                <div class="loadTopA4 start"></div>
                <div class="loadBottomA4 start"></div>
            </div>
        </div>

        <div id="language-selector" style="display: none;">
            <div class="language first-item" id="select-pt">
              <div class="v-connector load-pt-v-conn start"></div>
              <div class="h-connector load-pt-h-conn start"></div>
              <div class="content load-pt-content start">
                <div class="flag"><img class="load-pt-flag start" src="assets/img/flags/flag-pt.png" /></div>
                <div class="text load-pt-text start">Português</div>
              </div>
            </div>

            <div class="language second-item" id="select-en">
              <div class="v-connector load-en-v-conn start"></div>
              <div class="h-connector load-en-h-conn start"></div>
              <div class="content load-en-content start">
                <div class="flag"><img class="load-en-flag start" src="assets/img/flags/flag-en.png" /></div>
                <div class="text load-en-text start">English</div>
              </div>
            </div>


            <div class="language third-item" id="select-es">
              <div class="v-connector load-es-v-conn start"></div>
              <div class="h-connector load-es-h-conn start"></div>
              <div class="content load-es-content start">
                <div class="flag"><img class="load-es-flag start" src="assets/img/flags/flag-es.png" /></div>
                <div class="text load-es-text start">Español</div>
              </div>
            </div>

            <div id="lang-copyright" class="load-copyright start">
              Copyright @ <?= date('Y'); ?>
            </div>
          </div>

        <script type="text/javascript">
            function toggleClassFromChildren(element, childrenTagNames, oldClass, newClass, extraOptions) {
              var totalReplaces = 0;
              for (var x = 0; x < childrenTagNames.length; x++) {
                var childrenToChange = element.getElementsByTagName(childrenTagNames[x]);
                for (var i = 0; i < childrenToChange.length; i++) {
                  if (!childrenToChange[i].classList.contains(oldClass)) {
                    continue;
                  }
                  childrenToChange[i].classList.replace(oldClass, newClass);
                  totalReplaces++;
                }
              }
              return totalReplaces;
            };

            function callbackOnChildrenWithClass (element, childrenTagNames, className, callback) {
                var totalAdded = 0;
                for (var x = 0; x < childrenTagNames.length; x++) {
                    var childrenToChange = element.getElementsByTagName(childrenTagNames[x]);
                    for (var i = 0; i < childrenToChange.length; i++) {
                        if (!childrenToChange[i].classList.contains(className)) {
                            continue;
                        }
                        callback(childrenToChange[i]);
                        totalAdded++;
                    }
                }
                return totalAdded;
            }

            var languageSelectionTotalTransitionsEnded = 0;
            var languageSelectionAddedTransitionEndListener = false;
            function animateLanguageSelection(show, callbackHidingLanguageSelection) {
                var languageSelector = document.getElementById('language-selector');
                languageSelector.style.display = 'block';
                var oldClass = show ? 'start' : 'end';
                var newClass = !show ? 'start' : 'end';
                var targetTagNames = ['div', 'img'];

                this.totalTransitionsEnded = 0;
                if (languageSelectionAddedTransitionEndListener === false) {
                    callbackOnChildrenWithClass(languageSelector, targetTagNames, oldClass, function (child) {
                        var listener = function (event) {
                            if (child.classList.contains('start')) {
                                languageSelectionTotalTransitionsEnded++;
                                // TODO: Grab total transitions dynamically
                                if (languageSelectionTotalTransitionsEnded >= 25) {
                                    languageSelector.style.display = 'none';
                                    if (typeof callbackHidingLanguageSelection === 'function') {
                                        callbackHidingLanguageSelection();
                                    }
                                }
                            }
                        };

                        child.addEventListener('transitionend', listener);
                    });

                    languageSelectionAddedTransitionEndListener = true;
                }

                setTimeout(function () {
                    toggleClassFromChildren(languageSelector, targetTagNames, oldClass, newClass);
                }, 100);
            }

            setTimeout(function (show = true) {
                var pabloCamara = document.getElementById('pablocamara');
                var oldClass = show ? 'start' : 'end';
                var newClass = show ? 'end' : 'start';
                toggleClassFromChildren(pabloCamara, ['div'], oldClass, newClass);

                animateLanguageSelection(true);
            }, 100);
        </script>
    </body>
</html>
