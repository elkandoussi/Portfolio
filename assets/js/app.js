/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
const $ = require('jquery');
// the bootstrap module doesn't export/return anything
require('bootstrap');

//fontawesome
require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');

//Moving letters
require('../css/animation.scss');
require('./animation.js');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

var heightScreen = window.innerHeight;

var header = document.getElementById('header');
console.log(heightScreen);

