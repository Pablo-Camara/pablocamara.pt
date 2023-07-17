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

        @include('menus.main-menu')

        <div id="about-me-container"
            class="section about-me-container">
            <div class="profile-picture">
                <img id="profile-picture-img" data-profile-picture="0" src="assets/img/profile-picture-1.jpeg">
            </div>

            <h2>{{ trans('pages.about-me.about_me') }}</h2>
            <div>
                {{ trans('pages.about-me.about_me_text') }}
                <br/><br/>
            </div>
            <h3>{{ trans('pages.about-me.my_interest_in_tech') }}</h3>
            <div>
                {{ trans('pages.about-me.my_interest_in_tech_txt_1') }}
                <br><br/>
                {{ trans('pages.about-me.my_interest_in_tech_txt_2') }}
                <br/><br/>
            </div>
            <h3>{{ trans('pages.about-me.evolving_with_the_internet') }}</h3>
            <div>
                {{ trans('pages.about-me.evolving_with_the_internet_txt_1') }}
                <br/><br/>
                {{ trans('pages.about-me.evolving_with_the_internet_txt_2') }}
                <br><br/>
                {{ trans('pages.about-me.evolving_with_the_internet_txt_3') }}
                <br/><br/>
            </div>
            <h3>{{ trans('pages.about-me.becoming_a_pro') }}</h3>
            <div>
                {{ trans('pages.about-me.becoming_a_pro_txt_1') }}
                <br><br/>
                {{ trans('pages.about-me.becoming_a_pro_txt_2') }}
                <br/><br/>
                {{ trans('pages.about-me.becoming_a_pro_txt_3') }}
                <br/><br/>
            </div>
            <h3>{{ trans('pages.about-me.other_interests') }}</h3>
            <div>
                {{ trans('pages.about-me.other_interests_txt_1') }}
                <br/><br/>
                {{ trans('pages.about-me.other_interests_txt_2') }}
                <br/><br/>
                {{ trans('pages.about-me.other_interests_txt_3') }}
                <br/><br/>
                <div class="video-container" style="text-align: center">
                    <video id="videoPlayer" style="max-width: 320px" controls>
                        <source src="{{ asset('assets/video/specialmoves.mov') }}" type="video/mp4">
                        <!-- Add additional <source> tags for other video formats if needed -->
                    </video>
                    <br>
                    {{ trans('pages.about-me.other_interests_txt_4') }}
                </div>
                <br/><br/>
                {{ trans('pages.about-me.other_interests_txt_5') }}
                <br/><br/>
                {{ trans('pages.about-me.other_interests_txt_6') }}
                <br/><br/>
                {{ trans('pages.about-me.other_interests_txt_7') }}
                <br/><br/>
                <div class="video-container" style="text-align: center">
                    <video id="videoPlayer" style="max-width: 320px" controls>
                        <source src="{{ asset('assets/video/riding-skate-9.mp4') }}" type="video/mp4">
                        <!-- Add additional <source> tags for other video formats if needed -->
                    </video>
                </div>
                <br/><br/>
                {{ trans('pages.about-me.other_interests_txt_8') }}
                <br/><br/>
                {{ trans('pages.about-me.other_interests_txt_9') }}
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

        <script type="text/javascript" src="{{ asset('assets/js/helpers.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/pablocamara-loader-2.js') }}"></script>

        <script type="text/javascript">
            setInterval(function() {
                var pictures = {!! json_encode($profilePictures) !!};

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
        </script>
    </body>
</html>
