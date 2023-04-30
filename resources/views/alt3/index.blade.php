@extends('layouts.main')

@section('content')
    @include('alt3.sections.heading', [
        "shapes" => [
            [ "aos" => "fade-down-left", "duration" => 1500, "delay" => 100 ],
            [ "aos" => "fade-down", "duration" => 1000, "delay" => 100 ],
            [ "aos" => "fade-up-right", "duration" => 1000, "delay" => 200 ],
            [ "aos" => "fade-up", "duration" => 1000, "delay" => 200 ],
            [ "aos" => "fade-down-left", "duration" => 1000, "delay" => 100 ],
            [ "aos" => "fade-down-left", "duration" => 1000, "delay" => 100 ],
            [ "aos" => "zoom-in", "duration" => 1000, "delay" => 300 ],
            [ "aos" => "fade-down-right", "duration" => 500, "delay" => 200 ],
            [ "aos" => "fade-down-right", "duration" => 500, "delay" => 100 ],
            [ "aos" => "zoom-out", "duration" => 2000, "delay" => 500 ],
            [ "aos" => "fade-up-right", "duration" => 500, "delay" => 200 ],
            [ "aos" => "fade-down-left", "duration" => 500, "delay" => 100 ],
            [ "aos" => "fade-up", "duration" => 500, "delay" => 0 ],
            [ "aos" => "fade-down", "duration" => 500, "delay" => 0 ],
            [ "aos" => "fade-up-right", "duration" => 500, "delay" => 100 ],
            [ "aos" => "fade-down-left", "duration" => 500, "delay" => 0 ]
        ]])
    @include('alt3.sections.isometric-mockups', [
        "mockups" => [
        [ "class" => "tablet ipad landscape", "img" => "tablet/1.png", "button" => "button" ],
        [ "class" => "iphone light phone-big", "img" => "app/4.png", "button" => "notch" ],
        [ "class" => "iphone light phone-small", "img" => "app/2.png", "button" => "notch" ],
        [ "class" => "tablet ipad portrait", "img" => "tablet/2.png", "button" => "button" ]
    ]])
    @include('alt3.sections.partners')

    @include('shared.powerful-features', [
        "cards" => [
            [ "class" => "mt-6 mt-6 mx-lg-auto", "icon" => "paint-bucket", "title" => "Customizable", "animation" => [ "effect" => "fade-down", "delay" => "0" ], "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit" ],
            [ "class" => "mx-lg-auto", "icon" => "light", "title" => "Creative", "animation" => [ "effect" => "fade-down", "delay" => "800" ], "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit" ],
            [ "class" => "mr-lg-auto", "icon" => "diamond", "title" => "Powerful Design", "animation" => [ "effect" => "fade-down", "delay" => "500" ], "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit" ],
            [ "class" => "mt-6n mr-lg-auto", "icon" => "cash", "title" => "Affordable", "animation" => [ "effect" => "fade-down", "delay" => "1200" ], "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit" ]
        ]
    ])
    @include('shared.design-blocks')
    @include('shared.features-cant-miss')
    @include('shared.pricing', [
        "plans" => [
            [ "name" => "basic", "desc" => "For individuals", "class" => "order-md-first", "price" => [ "monthly" => 0, "yearly" => 0 ], "items" => [] ],
            [ "name" => "enterprise", "desc" => "For large companies", "class" => "order-md-last", "price" => [ "monthly" => 19.99, "yearly" => 14.99 ], "items" => [] ],
            [ "name" => "business", "desc" => "For small business", "price" => [ "monthly" => 49.99, "yearly" => 39.99 ], "best" => true, "items" => [] ],
        ]
    ])
    @include('shared.integration', [
        "bubbles" => [
            [ "icon" => "apx", "name" => "Autoprefixer" ],
            [ "icon" => "bs", "name" => "Bootstrap" ],
            [ "icon" => "cordova", "name" => "Cordova" ],
            [ "icon" => "css", "name" => "CSS" ],
            [ "icon" => "fa", "name" => "Fontawesome" ],
            [ "icon" => "html", "name" => "HTML" ],
            [ "icon" => "js", "name" => "Javascript" ],
            [ "icon" => "npm", "name" => "Npm" ],

            [ "icon" => "sass", "name" => "SASS" ],
            [ "icon" => "apx", "name" => "Autoprefixer" ],
            [ "icon" => "bs", "name" => "Bootstrap" ],
            [ "icon" => "cordova", "name" => "Cordova" ],
            [ "icon" => "css", "name" => "CSS" ],
            [ "icon" => "fa", "name" => "Fontawesome" ],
            [ "icon" => "html", "name" => "HTML" ],
            [ "icon" => "js", "name" => "Javascript" ]
        ]
    ])
    @include('shared.why-us', [
        "features" => [
            [ "name" => "Integrations", "icon" => "plug", "description" => "Aut debitis deserunt ea explicabo hic id incidunt, minus" ],
            [ "name" => "Marketing", "icon" => "heart", "description" => "Aliquam amet assumenda debitis dicta distinctio eaque enim" ],
            [ "name" => "Support", "icon" => "headphones", "description" => "Consequatur doloremque illum libero nam. Hic, vitae?" ]
        ]
    ])
    @include('shared.faqs', [
        "faqs" => [
            [ "question" => "What does the package include?", "answer" => "When you buy Dashcore, you get all you see in the demo but the images. We include SASS files for styling, complete JS files with comments, all HTML variations. Besides we include all mobile PSD mockups." ],
            [ "question" => "What is the typical response time for a support question?", "answer" => "Since you report us a support question we try to make our best to find out what is going on, depending on the case it could take more or les time, however a standard time could be minutes or hours." ],
            [ "question" => "What do I need to know to customize this template?", "answer" => "Our documentation give you all you need to customize your copy. However you will need some basic web design knowledge (HTML, Javascript and CSS)" ],
            [ "question" => "Can I suggest a new feature?", "answer" => "Definitely <span class='bold'>Yes</span>, you can contact us to let us know your needs. If your suggestion represents any value to both we can include it as a part of the theme or you can request a custom build by an extra cost. Please note it could take some time in order for the feature to be implemented." ],
        ]
    ])
    @include('shared.start-free', [
        "icons" => [
            [ "icon" => "7s-hourglass", "prefix" => "pe" ],
            [ "icon" => "7s-magic-wand", "prefix" => "pe" ],
            [ "icon" => "7s-rocket", "prefix" => "pe" ],
            [ "icon" => "7s-plugin", "prefix" => "pe" ],
            [ "icon" => "7s-like", "prefix" => "pe" ],
            [ "icon" => "7s-clock", "prefix" => "pe" ],
            [ "icon" => "7s-smile", "prefix" => "pe" ],
            [ "icon" => "7s-piggy", "prefix" => "pe" ],
            [ "icon" => "7s-shield", "prefix" => "pe" ],
            [ "icon" => "7s-server", "prefix" => "pe" ],
        ]
    ])
    @include('shared.subscribe')
@endsection

@section('footer')
    @include('includes.footer')
@endsection
