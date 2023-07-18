@extends('layouts.main')
@section('content')
<div id="latest-projects" class="section centered-300" style="display: none">
    <h2>Latest projects</h2>
    <div class="item-list">
        <a href="https://wsu.pt" target="_blank" class="item">
            <div class="item-image">
                <img src="{{ asset('assets/img/item1.png') }}" />
            </div>
            <div class="item-title">Will Shorten URLs - URL Shortner em Português - wsu.pt</div>
        </a>

        <a class="item" style="display: none">
            <div class="item-image">
                <img src="{{ asset('assets/img/tictactoe.png') }}" />
            </div>
            <div class="item-title">Tic Tac Toe game using object oriented native / vanilla javascript</div>
        </a>
    </div>
</div>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        animateMainMenuItems(true, function () {
            const latestProjects = document.getElementById('latest-projects');
            latestProjects.style.display = 'block';
        });
    </script>
@endsection
