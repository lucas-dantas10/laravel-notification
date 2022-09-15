<template>
    <div>
        <a class="dropdown-item" href="#">
            {{notification.user.name}} - {{ notification.title }}
        </a>
    </div>
</template>

<script>
export default {
    props: ['notification']
}
</script>