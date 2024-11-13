<template>
    <div class="m-5">
        <router-link :to="{name: 'person.index'}" class="btn btn-outline-secondary"> People </router-link>
        <router-link :to="{name: 'person.create'}" class="btn btn-outline-success ms-3"> Add </router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
