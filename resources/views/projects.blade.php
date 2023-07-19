@extends('layouts.main')
@section('menu')
    @include('menus.back-to-main-menu')
@endsection
@section('content')
    <div id="projects" class="section centered-300">
        <h2>{{ trans('pages.projects.projects') }}</h2>
        <div class="item-list">
            <a href="https://wsu.pt" target="_blank" class="item">
                <div class="item-image">
                    <img src="{{ asset('assets/img/item1.png') }}" />
                </div>
                <div class="item-title">Will Shorten URLs - URL Shortner em Português - wsu.pt</div>
            </a>
        </div>
    </div>
@endsection
