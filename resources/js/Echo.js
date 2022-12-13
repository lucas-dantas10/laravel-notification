import store from './vuex/store';
import swal from 'sweetalert';

const typesNotifications = {
    postComment: 'App\\Notifications\\PostComment',
}

console.log(Laravel.user);

if (Laravel.user) {
    window.Echo.private(`App.Models.User.${Laravel.user}`)
            .notification(notification => {
                let comment = notification.data.comment;

                if (Laravel.user == comment.post.user.id) {
                    if (notification.type == typesNotifications.postComment) {
                        swal({
                            title: "Novo comentário",
                            text: `O post ${comment.post.title} foi comentado por ${comment.user.name}`,
                            icon: 'info'
                        })

                        store.commit('ADD_NOTIFICATION', notification);
                    }
                }

                
            })
}

