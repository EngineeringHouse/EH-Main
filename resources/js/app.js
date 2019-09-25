require('./bootstrap');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

window.Vue = require('vue');

Vue.use(ElementUI);

Vue.prototype.$http = axios;

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('room', require('./components/Room.vue').default);

const app = new Vue({
    el: '#app'
});
