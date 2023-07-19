@extends('layouts.main')
@section('menu')
    @include('menus.back-to-main-menu')
@endsection
@section('content')
    <div id="about-me-container"
        class="section about-me-container">
        <div class="profile-picture">
            <img id="profile-picture-img" data-profile-picture="0" src="{{ $profilePictures[0] }}">
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
                {{-- <video id="videoPlayer" style="max-width: 320px" controls>
                    <source src="{{ asset('assets/video/specialmoves.mov') }}" type="video/mp4">
                    <!-- Add additional <source> tags for other video formats if needed -->
                </video> --}}
                <iframe width="300" height="534" src="https://www.youtube.com/embed/PebONhbdES8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                {{-- <video id="videoPlayer" style="max-width: 320px" controls>
                    <source src="{{ asset('assets/video/riding-skate-9.mp4') }}" type="video/mp4">
                    <!-- Add additional <source> tags for other video formats if needed -->
                </video> --}}
                <iframe width="300" height="534" src="https://www.youtube.com/embed/YXjYa_jIwD8" title="Short video of me riding / pedalling my skate" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <br/><br/>
            {{ trans('pages.about-me.other_interests_txt_8') }}
            <br/><br/>
            {{ trans('pages.about-me.other_interests_txt_9') }}
            <br/><br/>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

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
@endsection
