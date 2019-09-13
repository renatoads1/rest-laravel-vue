
require('./bootstrap');

window.Vue = require('vue');


// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
Vue.component('cabeca', require('./components/Cabeca.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('compalert', require('./components/compalert.vue').default);
Vue.component('menssagem', require('./components/menssagem.vue').default);
Vue.component('card', require('./components/card.vue').default);

const app = new Vue({
    el: '#app',
});


  

 