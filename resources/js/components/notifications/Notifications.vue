<template>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Notificações ({{notifications.length}})<span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <notification 
                v-for="notification in notifications" 
                :key="notification.id"
                :notification="notification">            
            </notification>

            <a class="dropdown-item" href="#" @click.prevent="markAllAsRead">
                Limpar Notificações
            </a>
            
        </div>
    </li>
</template>

<script>
    export default {
        created () {
            // console.log(this.$store);
            this.$store.dispatch('loadNotifications');
        },

        computed: {
            notifications() {
                console.log(this.$store.state.notifications.items);
                return this.$store.state.notifications.items;
            }
        },

        methods: {
            markAllAsRead() {
                this.$store.dispatch('markAllAsRead');
            }
        }
    }
</script>