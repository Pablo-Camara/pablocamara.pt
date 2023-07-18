@extends('layouts.main')
@section('content')
    <div id="home-copyright" style="display: none">
        Copyright @ {{ date('Y') }}
    </div>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        animateMainMenuItems(true, function () {
            const homeCopyright = document.getElementById('home-copyright');
            homeCopyright.style.display = 'block';
        });
    </script>
@endsection
