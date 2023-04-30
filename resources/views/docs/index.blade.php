@extends("layouts.docs")

@section("content")
<section id="thanks-section" class="section">
    <h2 class="section-title">Thank you for purchasing our template</h2>
    <div class="section-block">
        <p><span class="bold">Laapp</span> is a Bootstrap 4.x App Landing Page built for Laravel 7, it's ready to showcase your <span class="bold">SaaS, Startup and Software</span> solution. The download includes the complete source and configuration files to help you get started from the very beginning.</p>
        <p>If you have any questions that are beyond the scope of this help file, please feel free to write direct to <a href="mailto(support@5studios.net)">support@5studios.net</a>, please include your purchase code in order for us to verify you. <b>Thank you so much !!!</b></p>

        <p><a href="https://themeforest.net/user/5studiosnet/portfolio" target="_blank">Here</a> are some other templates you will surely like.</p>
    </div>
</section>

<section class="section" id="prereq-section">
    <h2 class="section-title">Prerequisites</h2>
    <div class="section-block">
        This version is for Laravel 7, your system needs to meet some prerequisites before you can work with it.
        If you don't already have an Apache local development environment with PHP, here are some useful resources for you:

        <ol>
            <li><a href="https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/">Mac</a> installing MAMP</li>
            <li><a href="https://www.youtube.com/watch?v=-f8N4FEQWyY">Windows</a> Install XAMPP Server</li>
            <li><a href="https://howtoubuntu.org/how-to-install-lamp-on-ubuntu">Linux</a> setting a LAMP Server</li>
        </ol>

        And of course you will need Laravel, we recommend you to follow the official documentation <a href="https://laravel.com/docs/7.x/installation">here.</a>
    </div>
</section>

<section id="installation-section" class="section">
    <h2 class="section-title">Installation</h2>
    <div class="section-block">
        <p>There is actually no need for any fashion installation process, once you have your environment ready for PHP development then you're good to go.</p>
        <p>However, you need to install all the dependencies the project has, please open a terminal console on the root of your project and run:</p>

        <ul class="list">
            <li><code>composer install</code>: this will install all the PHP libraries including Laravel</li>
            <li><code>npm install</code>: we use multiple frontend development stuff such as SASS and Javascript, this will install all of the dependencies for it</li>
        </ul>

        <div class="callout callout-warning">
            <div class="icon-holder">
                <i class="fas fa-exclamation-triangle"></i>
            </div>

            <div class="content">
                <h4 class="callout-title">Important!</h4>
                <p>As for Laravel 7, we're working with <a href="https://laravel.com/docs/7.x/mix">Laravel Mix</a> to buid all of the frontend stuffs. So, getting familiar with it could improve your development process</p>
            </div>
        </div>
    </div>
</section>

<section id="code-section" class="section">
    <h2 class="section-title">Code</h2>
    <div id="html" class="section-block">
        <div class="code-block">
            <h6>Starter Layout structure</h6>

            <p>This template uses a main layout structure which contains pretty much of what you need to get up and ready in minutes. The main layout structure looks like this:</p>

            {!!'
            <pre><code class="language-markup">&lt!doctype html&gt
&lthtml lang="en"&gt
&lthead&gt
    &ltmeta charset="utf-8"&gt
    &ltmeta name="viewport" content="width=device-width, initial-scale=1"&gt
    &ltmeta name="csrf-token" content="&#123&#123 csrf_token() &#125&#125"&gt
    &lttitle&gt@yield("title", config("app.name").config("app.desc"))&lt/title&gt
    &ltmeta name="description" content=""&gt
    &ltmeta name="author" content="@@yield("meta_author", "5studios.net")"&gt
    @@yield("meta")

    &ltlink href="https://fonts.googleapis.com/css?family=Lato:100,300,400,600,700,900" rel="stylesheet"&gt
    &ltlink rel="stylesheet" href="&#123&#123 mix("/css/laapp.css") &#125&#125"&gt
&lt/head&gt
&ltbody&gt
@@include("includes.nav")

&ltmain&gt
    @@yield ("content");
&lt/main&gt

@@yield("footer")

&ltscript src="&#123&#123 mix("/js/manifest.js") &#125&#125"&gt&lt/script&gt
&ltscript src="&#123&#123 mix("/js/vendor.js") &#125&#125"&gt&lt/script&gt
&ltscript src="&#123&#123 mix("/js/app.js") &#125&#125"&gt&lt/script&gt

&lt/body&gt
&lt/html&gt</code></pre>'  !!}

            <p>Note we're including our frontend files such as css and javascript using the <code>mix</code> function, this is because of
                <a href="https://laravel.com/docs/7.x/mix#versioning-and-cache-busting">versioning</a>, in order to automatically append a unique hash to the filenames of compiled files.</p>
        </div>
    </div>

    <div id="sass" class="section-block">
        <div class="code-block">
            <h6>Compiling SCSS</h6>
            <p>This template uses <a href="http://sass-lang.com/" target="_blank">SCSS</a> for stylesheets. For more information about SCSS, visit <a href="http://sass-lang.com/guide">http://sass-lang.com/guide</a>.</p>
            <p>The template's SCSS files are located in the <b>/SASS</b> directory under resources.</p>
            <p>We need to compile SCSS files to CSS to make them usable. All compiled files are located in the <b>/css</b> folder.</p>
            <p>All SCSS files are separated by component types for easy customization.
                There is a main file for the theme <code>laapp.scss</code> file which has references to all <b>.scss</b> files that compose the theme.
                Those files use <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> variables and mixins in order to compile to CSS.</p>
            <p>You can modify those files to include additional style or remove any unwanted reference, one use case could be to leave the variation of a section you like and remove references to the others.</p>

            <div class="callout callout-warning">
                <div class="icon-holder">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>

                <div class="content">
                    <h4 class="callout-title">Important!</h4>
                    <p>Do not remove references to Bootstrap and FontAwesome components as it will not compile.</p>
                </div>
            </div>

            <pre><code class="language-css">// Overriding Bootstrap
@import "themes/living-coral/variables/override";
@import "laapp/bootstrap";

// Import third party libraries. Do not remove these references.
@import '~@fortawesome/fontawesome-free/scss/fontawesome';
@import '~@fortawesome/fontawesome-free/scss/solid';
@import '~@fortawesome/fontawesome-free/scss/regular';
@import '~@fortawesome/fontawesome-free/scss/brands';

@import "~angled-edges/angled-edges";
@import "~pe7-icon/dist/scss/pe-icon-7-stroke";

// Import theme variables here,
@import "laapp/reset";
@import "themes/living-coral/variables";

// Template Styles
@import "laapp/__variables";
@import "laapp/__core";
@import "laapp/__pages";

// Override some core stuff
@import "laapp/custom";

// Theme you want to use
@import "themes/living-coral";</code></pre>

            <p>Please pay special attention to the directory structure, we've included two main folders: <b>laapp</b> and <b>themes</b>. The former is intended to have all core and particular pages/sections styles. The idea is to keep the components, utilities, sections and pages ease to customize and ease to remove or add particular elements you want.</p>
            <p>The SASS structure may seem overworked at the beginning, but once you get into it, it becomes right straightforward to customize.</p>

            <p>The themes directory is used to hold all components and variables for use with a particular theme, it should define the palette for the theme.</p>

            <div class="callout callout-info">
                <div class="icon-holder">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="content">
                    <h4 class="callout-title">Bootstrap reference</h4>
                    <p>Note Bootstrap styles are included withing your main style file, this will help us compile Bootstrap itself to customize any of the aspects of the framework</p>
                </div>
            </div>

            <p>All Bootstrap defaults overrides should be located inside <b>themes/[your-theme]/variables/_override.scss</b> to keep a standard behavoir.</p>
        </div>
    </div>

    <div id="javascript" class="section-block">
        <div class="code-block">
            <h6>JavaScript</h6>

            <p>This template uses several JS files. Those files are loaded at the bottom of the page to increase the site speed and rendering.</p>
            <p>We've extracted some of the javascript files used:</p>
            <ul class="list list-code">
                <li><b>jquery.js</b> - Javascript framework library. Used for almost every javascript code.</li>
                <li><b>bootstrap.js</b> - Bootstrap framework functions.</li>
                <li><b>popper.js</b> - Bootstrap dependency to work with tooltips.</li>
            </ul>

            <div class="callout callout-info">
                <div class="icon-holder">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="content">
                    <h4 class="callout-title">Credits</h4>
                    <p class="scrollto">Please refer to <a href="#credits-section" class="scrollto">Credits</a> section to see the complete list of js files.</p>
                </div>
            </div>

            Besides those, we have created multiple files to give the template some uniqueness, some other are for working with the plugins we've included with the template. All of those are referenced from the <code>app.js</code> file
        </div>
    </div>

    <div id="compiling-sass" class="section-block">
        <div class="code-block">
            <h6>Compiling Assets</h6>
            <p>As stated earlier we use <a href="https://laravel.com/docs/7.x/mix">mix</a> to work with frontend stuffs, please go through it's docs to fully understand how it works, for the sake of the template you only need to run once command:</p>

            <ul>
                <li>npm run dev</li>
            </ul>

            <p>After the process ends you should end-up with all the files generated (css, js, fonts) inside public folder</p>

            <div class="callout callout-warning">
                <div class="icon-holder">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="content">
                    <h4 class="callout-title">Important</h4>
                    <p>Please make sure you have node.js installed before running those commands. You can check your node version by running <code>node --version</code> from the terminal.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="mailchimp" class="section-block">
        <div class="code-block">
            <h6>MailChimp Integration</h6>
            <p>
                We have plans to include in the short term OOTB functionality to work with <b>MailChimp API 3.0</b> to connect to the service, our implementation will only include
                <a href="http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/" target="_blank">Adding a member to a list</a>.
            </p>
        </div>
    </div>
</section>

<section id="credits-section" class="section">
    <h2 class="section-title">Credits</h2>
    <div class="section-block">
        <p>The following resources were used to create this template. We are much obligated to their developers.</p>
        <h3>Scripts</h3>
        <ul class="list">
            <li><a href="http://jquery.com" target="_blank">jQuery</a> for almost everything written in javascript.</li>
            <li><a href="http://getbootstrap.com" target="_blank">Bootstrap framework</a> for user interface interactions.</li>
            <li><a href="http://jqueryvalidation.org" target="_blank">jQuery validation plugin</a> to validate contact form submission.</li>
            <li><a href="https://github.com/nolimits4web/Swiper.git">Swiper</a> for image slider elements.</li>
            <li><a href="git://github.com/michalsnik/aos.git">AOS</a> for animate elements when scrolling.</li>
            <li><a href="https://gijsroge.github.io/tilt.js/">Tilt js</a> lightweight parallax hover tilt effect for jQuery.</li>
            <li><a href="https://github.hubspot.com/odometer/docs/welcome/">Odometer</a> Transition numbers with ease.</li>
        </ul>

        <h3>CSS</h3>
        <ul class="list">
            <li><a href="http://getbootstrap.com">Bootstrap framework</a> for CSS styles and SASS integration.</li>
            <li><a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a> awesome icons font.</li>
        </ul>

        <h3>Images</h3>
        <p>Any Images or logos used in previews are not included in this item or final purchase and you need to contact authors to get permission in case you want to use them in your commercial or non-commercial projects.</p>
        <p>For some of them we are allowed to make reference, in case you wanted to use them in your design</p>
        <ul class="list">
            <li><a href="https://freepik.com" target="_blank">Freepik</a> for the images you see across sections.</li>
            <li><a href="https://svgporn.com" target="_blank">SVGPorn</a> for some of the SVG logos.</li>
        </ul>
    </div>
</section>

@endsection
