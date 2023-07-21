@extends('layouts.main')
@section('menu')
    @include('menus.back-to-main-menu')
@endsection
@section('content')
    <div id="contact-container"
        class="section basic-container">
        <h2>{{ trans('pages.contact.contact') }}</h2>
        <div>
            {{ trans('pages.contact.contact_txt_1') }}
            <ul>
                <li>{{ trans('pages.contact.contact_reason_1') }}</li>
                <li>{{ trans('pages.contact.contact_reason_2') }}</li>
                <li>{{ trans('pages.contact.contact_reason_3') }}</li>
            </ul>
            {{ trans('pages.contact.contact_txt_2') }}
            <br/><br/>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

@endsection
