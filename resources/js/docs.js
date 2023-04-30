import './bootstrap';

import './scrolling';
import "./syntax-highlighter.js";

$(() => {
    $('body').scrollspy({ target: '.nav-menu', offset: 50 });
});
