<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('assets/css/pablocamara-loader-2.css') }}">

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
                margin-bottom: 10px;
            }

            .menu {
                color: #FFFFFF;
                width: 300px;
                margin: auto;
            }

            .menu .menu-item {
                padding: 10px;
                border-bottom: 1px solid #002e3d;
                display: block;
                color: #FFFFFF;
                text-decoration: none;
                background-color: #00202b;
                margin-bottom: 10px;
            }

            .menu .menu-item:hover {
                font-weight: bold;
            }

            .profile-picture {
                width: 200px;
                height: 200px;
                border-radius: 50%;
                overflow: hidden;
                position: relative;
                margin: auto;
                margin-top: 14px;
                margin-bottom: 14px;
            }

            .profile-picture img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
            }

            .section {
                margin: 10px;
                padding: 10px;
            }

            .section.about-me-container {
                max-width: 748px;
                margin: auto;
            }

            h2 {
                margin: 0;
                color: #00202b;
            }

            h3 {
                margin: 0;
                color: #00202b;
            }

            .section h2 {
                margin-bottom: 10px;
            }

            .section h3 {
                margin-bottom: 10px;
            }

            .item-list {
                margin-top: 8px;
            }

            .item-list .item {
                min-width: 300px;
                min-height: 180px;
                margin-bottom: 12px;
            }

            .item-list .item .item-image {
                height: 142px;
                overflow: hidden;
            }

            .item-list .item .item-image img {
                width: 107%;
                margin: auto;
            }

            .item-list .item .item-title {
                padding: 10px;
                background-color: #00202b;
                color: #FFFFFF;
                font-size: 14px;
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

        <div class="menu" id="main-menu">
            <a href="javascript:void(0);"
                style="text-align: center; display: none"
                class="menu-item" id="menu-toggler">MENU</a>
            <a href="javascript:void(0);" class="menu-item" id="about-me-menu-item">About me</a>
            <a href="#" class="menu-item">Projects</a>
            <a href="#" class="menu-item">Contact</a>
        </div>

        <div id="about-me-container"
            class="section about-me-container"
            style="display: none">
            <div class="profile-picture">
                <img id="profile-picture-img" data-profile-picture="0" src="assets/img/profile-picture-1.jpeg">
            </div>

            <h2>About me</h2>
            <div>
                I'm first of all, a human being, a friend and an eternal student of life.
                <br/><br/>
            </div>
            <h3>My interest in technology</h3>
            <div>
                At some point, very early in my life, around 12, I had my first, much desired computer, until then, I had only seen my friends use such a machine, and sometimes had the privilege of playing games with them in their computers.
                <br><br/>
                Since the first day I received my first computer, the interest was high, and soon I was exploring computer configurations, local offline games and anything I could click on... and of course it did not take long until I discovered the internet!
                <br/><br/>
            </div>
            <h3>Evolving with the Internet</h3>
            <div>
                Since I've discovered the internet I started digging deep into the worlds of information.
                <br/><br/>
                I soon found out I enjoyed reading and learning and also creating and sharing digital content.
                <br><br/>
                God only knows how much information / software I've explored since I found out the internet!
                <br/><br/>
            </div>
            <h3>Becoming a professional</h3>
            <div>
                It did not only take countless hours of freely and randomly exploring subjects on my machine but I also went through 2 different IT courses during my academic education.
                <br><br/>
                One of them - Installation and Operation of Informatic Systems - with the duration of 2 years , and another one - Managing and Programming Informatic Systems - with the duration of 3 years.
                <br/><br/>
                I started working officially just after finishing the second course, and I have been working for different companies since then.. I have more than 10 years of experience as a web developer!
                <br/><br/>
            </div>
            <h3>Other interests</h3>
            <div>
                Outside the IT world, I have a deep attraction for sports and nature.
                <br/><br/>
                One of my favorite sports is Calisthenics / Street Workout, which is basically gymnastics / working out with our own bodyweight.
                <br/><br/>
                You can check out below some "special" bodyweight exercises I've got in my bag
                <br/><br/>
                <div class="video-container" style="text-align: center">
                    <video id="videoPlayer" style="max-width: 320px" controls>
                        <source src="{{ asset('assets/video/specialmoves.mov') }}" type="video/mp4">
                        <!-- Add additional <source> tags for other video formats if needed -->
                    </video>
                    <br>
                    ( by the way, I have sped up the video )
                </div>
                <br/><br/>
                I've also had the privilege of participating in / practicing Martials Arts throughout my life, and I love watching UFC!
                <br/><br/>
                I enjoy wheels...I don't have my driver's license yet but I do enjoy alot riding my BMX or my skate sometimes.. Roller skating is cool too!
                I've also had the privilege of trying skiing in the past and it was quite an experience!
                <br/><br/>
                heres a video of me skating around / pedaling:
                <br/><br/>
                <div class="video-container" style="text-align: center">
                    <video id="videoPlayer" style="max-width: 320px" controls>
                        <source src="{{ asset('assets/video/riding-skate-9.mp4') }}" type="video/mp4">
                        <!-- Add additional <source> tags for other video formats if needed -->
                    </video>
                </div>
                <br/><br/>
                I also love the sea, specially when there are nice waves around to catch! I have no surf board but I can catch them with my own body!
                <br/><br/>
                Well that is just the tip of the iceberg, there is alot of things in this life that I enjoy, it is not worth mentioning them all..I will just keep on living and trying my best to enjoy life as much as I can in the best possible way! - and - I hope you can do that too!!
                <br/><br/>
            </div>
        </div>

        <!-- <div class="section">
            <h2>Latest projects</h2>
            <div class="item-list">
                <div class="item">
                    <div class="item-image">
                        <img src="assets/img/item1.png" />
                    </div>
                    <div class="item-title">URL Shortner</div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="assets/img/tictactoe.png" />
                    </div>
                    <div class="item-title">Tic Tac Toe game using object oriented native / vanilla javascript</div>
                </div>
            </div>
        </div> -->

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


            setTimeout(function (show = true) {
                var pabloCamara = document.getElementById('pablocamara');
                var oldClass = show ? 'start' : 'end';
                var newClass = show ? 'end' : 'start';
                toggleClassFromChildren(pabloCamara, ['div'], oldClass, newClass);
            }, 100);


            setInterval(function() {
                var pictures = [
                    'assets/img/profile-picture-1.jpeg',
                    'assets/img/profile-picture-26.jpg',
                    'assets/img/profile-picture-2.jpg',
                    'assets/img/profile-picture-3.jpg',
                    'assets/img/profile-picture-4.jpg',
                    'assets/img/profile-picture-5.jpg',
                    'assets/img/profile-picture-6.jpg',
                    'assets/img/profile-picture-7.jpg',
                    'assets/img/profile-picture-8.jpg',
                    'assets/img/profile-picture-9.jpg',
                    'assets/img/profile-picture-10.jpg',
                    'assets/img/profile-picture-11.jpg',
                    'assets/img/profile-picture-12.jpg',
                    'assets/img/profile-picture-13.jpg',
                    'assets/img/profile-picture-14.jpg',
                    'assets/img/profile-picture-15.jpg',
                    'assets/img/profile-picture-16.jpg',
                    'assets/img/profile-picture-17.jpg',
                    'assets/img/profile-picture-18.jpg',
                    'assets/img/profile-picture-19.jpg',
                    'assets/img/profile-picture-20.jpg',
                    'assets/img/profile-picture-21.jpg',
                    'assets/img/profile-picture-22.jpg',
                    'assets/img/profile-picture-23.jpg',
                    'assets/img/profile-picture-24.jpg',
                    'assets/img/profile-picture-25.jpg',
                ];

                const pictureImgEl = document.getElementById('profile-picture-img');
                var currentPictureIndex = pictureImgEl.getAttribute('data-profile-picture');

                var totalPictures = pictures.length;

                if (currentPictureIndex >= totalPictures) {
                    currentPictureIndex = 0;
                }

                pictureImgEl.setAttribute('src', pictures[currentPictureIndex]);
                currentPictureIndex++;
                pictureImgEl.setAttribute('data-profile-picture', currentPictureIndex);

            }, 2500);


            function toggleMainMenuItemsDisplay(display = 'none') {
                const mainMenuItemEl = document.getElementById("main-menu");
                const mainMenuItems = mainMenuItemEl.querySelectorAll("a.menu-item");
                for (let i = 0; i < mainMenuItems.length; i++) {
                    const mainMenuItem = mainMenuItems[i];
                    mainMenuItem.style.display = display;
                }
            }

            function toggleMenuTogglerDisplay(display = 'none') {
                const menuTogglerItemEl = document.getElementById('menu-toggler');
                menuTogglerItemEl.style.display = display;
            }

            function toggleAboutMeContainerDisplay(display = 'none') {
                const aboutMeContainerEl = document.getElementById('about-me-container');
                aboutMeContainerEl.style.display = display;
            }

            const aboutMeMenuItemEl = document.getElementById('about-me-menu-item');
            aboutMeMenuItemEl.onclick = function (e) {
                toggleMainMenuItemsDisplay('none');
                toggleMenuTogglerDisplay('block');

                // show about me container
                toggleAboutMeContainerDisplay('block');
            };


            const menuTogglerItemEl = document.getElementById('menu-toggler');
            menuTogglerItemEl.onclick = function (e) {
                toggleMainMenuItemsDisplay('block');
                toggleMenuTogglerDisplay('none');

                // hide visible containers
                toggleAboutMeContainerDisplay('none');
            }
        </script>
    </body>
</html>
