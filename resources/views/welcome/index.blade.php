@extends('layouts.main')

@section('content')
    @include('welcome.sections.heading', [
        'bubbles' => [
             [ "icon" => "apx" ],
             [ "icon" => "bs" ],
             [ "icon" => "cordova" ],
             [ "icon" => "css" ],
             [ "icon" => "fa" ],
             [ "icon" => "html" ],
             [ "icon" => "js" ],
             [ "icon" => "npm" ],

             [ "icon" => "sass" ],
             [ "icon" => "apx" ],
             [ "icon" => "bs" ],
             [ "icon" => "cordova" ],
             [ "icon" => "css" ],
             [ "icon" => "fa" ],
             [ "icon" => "html" ],
             [ "icon" => "js" ]
            ]
    ])

    @include ('welcome.sections.color-palette')
    @include ('welcome.sections.selection')
    @include ('welcome.sections.why')
    @include ('welcome.sections.not-what-you-need')
    @include ('welcome.sections.cta')

@endsection

@section('footer')
    @include('welcome.sections.footer')
@endsection
