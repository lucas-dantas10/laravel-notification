require('./bootstrap');

window.Vue = require('vue');
import store from './vuex/store';

Vue.component('notifications', require('./components/notifications/Notifications').default);
Vue.component('notification', require('./components/notifications/Notification').default);

const app = new Vue({
    store,
    el: '#app'
});
