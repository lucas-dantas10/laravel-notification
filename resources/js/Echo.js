if (Laravel.user) {
    console.log(`App.Models.User.${Laravel.user}`);
    window.Echo.private(`App.Models.User.${Laravel.user}`)
            .notification(notification => {
                console.log(notification);
            })
}

