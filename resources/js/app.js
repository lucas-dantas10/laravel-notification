require('./bootstrap');

window.Vue = require('vue');

Vue.component('notifications', require('./components/notifications/Notifications').default);
Vue.component('notification', require('./components/notifications/Notification').default);

const app = new Vue({
    el: '#app'
});
