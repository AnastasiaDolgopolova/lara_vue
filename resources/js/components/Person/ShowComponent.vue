<template>
    <div v-if="person">
        <div class="mt-3">Name: {{ person.name }}</div>
        <div class="mt-3">Age: {{ person.age }}</div>
        <div class="mt-3">Job: {{ person.job }}</div>
        <div class="mt-3"><router-link :to="{name: 'person.edit', params: {id: person.id}}" class="btn btn-outline-warning"> Edit</router-link></div>
    </div>
</template>

<script>

export default {
    name: "ShowComponent",

    mounted() {

       this.$store.dispatch('getPerson', this.$route.params.id)
    },

    computed: {
        person() {
            return this.$store.getters.person
        }
    },
}

</script>

<style scoped>

</style>
