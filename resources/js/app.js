import './bootstrap';
import 'laravel-datatables-vite';

// resources/js/app.js
window.$ = window.jQuery = require('jquery');
require('summernote/dist/summernote-bs4.css');
require('summernote');

$(document).ready(function () {
    $('#summernote').summernote();
});
