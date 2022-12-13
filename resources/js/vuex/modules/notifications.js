import Axios from "axios"

export default {
    state: {
        items: []
    },

    mutations: {

        LOAD_NOTIFICATION (state, notifications) {
            state.items = notifications
        },

        MARK_AS_READ (state, id) {
            let index = state.items.filter(notification => {
                notification.id == id;
            });

            state.items.splice(index, 1);
        },

        MARK_ALL_AS_READ (state) {
            state.items = [];
        },

        ADD_NOTIFICATION (state, notification) {
            state.items.push(notification);
        }
        
    },

    actions: {
        loadNotifications (context) {
            Axios.get('/notifications')
                .then(response => {
                    context.commit('LOAD_NOTIFICATION', response.data)
                })
        },

        markAsRead (context, params) {
            console.log(context);
            Axios.put('/notification-read', params).then(() => context.commit('MARK_AS_READ', params))
        },

        markAllAsRead (context) {
            console.log(context);
            Axios.put('/notification-all-read')
                    .then(() => context.commit('MARK_ALL_AS_READ'));
        }
    }
}