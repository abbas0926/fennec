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
            [ "class" => "mt-6 mt-6 mx-lg-auto", "icon" => "paint-bucket", "title" => "Personnalisable", "animation" => [ "effect" => "fade-down", "delay" => "0" ], "description" => "Personnalisez votre site de e-commerce pour répondre à vos besoins et refléter votre marque" ],
            [ "class" => "mx-lg-auto", "icon" => "light", "title" => "Créatif", "animation" => [ "effect" => "fade-down", "delay" => "800" ], "description" => "Libérez votre créativité avec des designs innovants et attrayants pour attirer vos clients" ],
            [ "class" => "mr-lg-auto", "icon" => "diamond", "title" => "Design Puissant", "animation" => [ "effect" => "fade-down", "delay" => "500" ], "description" => "Bénéficiez d'un design de qualité qui optimise l'expérience utilisateur pour augmenter les conversions" ],
            [ "class" => "mt-6n mr-lg-auto", "icon" => "cash", "title" => "Abordable", "animation" => [ "effect" => "fade-down", "delay" => "1200" ], "description" => "Profitez d'une solution de e-commerce de qualité sans sacrifier votre budget" ]
        ]
    ])

    @include('shared.design-blocks')
    @include('shared.features-cant-miss')
    @include('shared.pricing', [
        "plans" => [
            [ "name" => "basic", "desc" => "For individuals", "class" => "order-md-first", "price" => [ "monthly" => 800, "yearly" => 9600 ], "items" => [
             
                
                "Votre sous domaine fennec",
                "dashboard de stock simplifiée",
                "Assistance clientèle 7j/7",
                "Personalisation de theme",
                "Intégration de pexel",
                "Accès aux fonctionnalités de base",
                "Stockage de données limité",
                "30 commande par mois"
            ] ],
            [ "name" => "premium", "desc" => "For large companies", "class" => "order-md-last", "price" => [ "monthly" => 2000, "yearly" => 24000 ], "items" => [
                "3 email professionnels",
                "Votre propre nom de domaine",
                "Dashboard simplifiée",
                "Assistance clientèle 7j/7",
                "Personalisation de theme",
                "Intégration de pexel",
                "Accès aux fonctionnalités de base",
                "Stockage de données limité",
                "100 commande par mois"
            ] ],
            [ "name" => "advanced", "desc" => "For small business", "price" => [ "monthly" => 3200, "yearly" => 38400 ], "best" => true, "items" => [
                "Boites email professionnels illimité",
                "Envoi de courriers électroniques illimité",
                "Votre propre nom de domaine",
                "Dashboard simplifiée",
                "Assistance clientèle 7j/7",
                "Personalisation de theme",
                "Intégration de pexel",
                "Accès aux fonctionnalités de base",
                "Stockage de données limité",
                "Nombre de commande illimité"
            ] ],
        ]
    ])
    {{-- @include('shared.integration', [
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
    ]) --}}
  @include('shared.why-us', [
    "features" => [
    [ "name" => "Intégrations", "icon" => "plug", "description" => "Connectez facilement votre boutique en ligne à des outils de marketing et de gestion grâce à nos intégrations faciles à utiliser." ],
    [ "name" => "Marketing", "icon" => "heart", "description" => "Optimisez vos campagnes de marketing grâce à notre expertise et nos conseils pour atteindre vos objectifs de vente." ],
    [ "name" => "Support", "icon" => "headphones", "description" => "Notre équipe de support est là pour vous aider à résoudre tous vos problèmes et répondre à toutes vos questions, 24 heures sur 24, 7 jours sur 7." ]
    ]
    ])
    @include('shared.faqs', [
        "faqs" => [
        [ "question" => "Que comprend le package?", "answer" => "Lorsque vous achetez Dashcore, vous obtenez tout ce que vous voyez dans la démo, sauf les images. Nous incluons des fichiers SASS pour la mise en forme, des fichiers JS complets avec des commentaires, toutes les variations HTML. En outre, nous incluons tous les maquettes PSD mobiles." ],
        [ "question" => "Quel est le temps de réponse typique pour une question de support?", "answer" => "Dès que vous nous signalez une question de support, nous faisons de notre mieux pour comprendre ce qui se passe. En fonction de la situation, cela peut prendre plus ou moins de temps, cependant, le temps standard peut être de quelques minutes ou quelques heures." ],
        [ "question" => "De quoi ai-je besoin pour personnaliser ce modèle?", "answer" => "Notre documentation vous donne tout ce dont vous avez besoin pour personnaliser votre copie. Cependant, vous aurez besoin de certaines connaissances de base en conception Web (HTML, Javascript et CSS)" ],
        [ "question" => "Puis-je suggérer une nouvelle fonctionnalité?", "answer" => "Absolument <span class='bold'>Oui</span>, vous pouvez nous contacter pour nous faire part de vos besoins. Si votre suggestion représente une valeur pour les deux parties, nous pouvons l'inclure en tant que partie du thème ou vous pouvez demander une construction personnalisée moyennant un coût supplémentaire. Veuillez noter que cela peut prendre un certain temps pour que la fonctionnalité soit implémentée." ],
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
