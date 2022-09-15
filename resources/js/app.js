require('./bootstrap');
import store from './vuex/store.js'

window.Vue = require('vue');

Vue.component('notifications', require('./components/notifications/Notifications').default);
Vue.component('notification', require('./components/notifications/Notification').default);

const app = new Vue({
    store,
    el: '#app'
});
