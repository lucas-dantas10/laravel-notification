import Axios from 'axios';

export default {
    state: {
        items: []
    },

    mutations: {
        LOAD_NOTIFICATION(state, notifications) {
            state.items = notifications
        }
    },

    actions: {
        loadNotifications(context) {
            Axios.get('/notifications')
                .then(response => {
                    context.commit('LOAD_NOTIFICATION', response.data)
                })
        },
    }
}