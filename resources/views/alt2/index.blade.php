@extends('layouts.main')

@section('content')
    @include('alt2.sections.heading', [
        "shapes" => [
            [ "aos" => "fade-down-right", "duration" => "1500", "delay" => "100" ],
            [ "aos" => "fade-down", "duration" => "1000", "delay" => "100" ],

            [ "aos" => "fade-up-left", "duration" => "500", "delay" => "200" ],
            [ "aos" => "fade-up", "duration" => "500", "delay" => "200" ],

            [ "aos" => "fade-up-right", "duration" => "1000", "delay" => "200" ],
            [ "aos" => "fade-up", "duration" => "1000", "delay" => "200" ],
            [ "aos" => "fade-down-left", "duration" => "1000", "delay" => "100" ],

            [ "aos" => "fade-down-left", "duration" => "1000", "delay" => "100" ],
            [ "aos" => "zoom-in", "duration" => "1000", "delay" => "300" ]
        ]])
    @include('alt2.sections.partners', [
        "features" => [
            [ "icon" => "paint-bucket", "title" => "themes made easy",  "description" => "Our astonishing style structure makes your customization process a breeze" ],
            [ "icon" => "diamond",      "title" => "powerful design",   "description" => "With ready-to-use content you'll deploy your implementation in no time" ],
            [ "icon" => "light",        "title" => "creative content",  "description" => "Repetitive styles all across the web? Nevermind that! Shine with unique styles" ]
    ]])
    @include('alt2.sections.features', [
        "elements" => [
            [ "icon" => "pe-7s-diamond", "title" => "Powerful Design", "description" => "Ab ad aliquam assumenda beatae commodi distinctio dolore dolorum earum error et, exercitationem" ],
            [ "icon" => "pe-7s-tools", "title" => "Professional Tools", "description" => "Blanditiis cumque, eius error est et exercitationem, explicabo hic natus nobis odit porro quia" ],
            [ "icon" => "pe-7s-light", "title" => "Creative Content", "description" => "A animi aperiam cupiditate eum incidunt, magni mollitia nam nemo non officia omnis, quasi quisquam" ]
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
