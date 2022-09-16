import Vue from 'vue'
import {createStore} from 'vuex'
import Axios from 'axios'

Vue.use(createStore)

export default createStore({
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
})








