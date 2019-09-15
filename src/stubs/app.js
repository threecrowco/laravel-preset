require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
