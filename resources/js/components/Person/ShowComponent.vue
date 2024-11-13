<template>
    <div v-if="person">
        <div class="mt-3">Name: {{ this.person.name }}</div>
        <div class="mt-3">Age: {{ this.person.age }}</div>
        <div class="mt-3">Job: {{ this.person.job }}</div>
        <div class="mt-3"><router-link :to="{name: 'person.edit', params: {id: this.person.id}}" class="btn btn-outline-warning"> Edit</router-link></div>
    </div>
</template>

<script>
export default {
    name: "ShowComponent",
    data() {
        return {
            id: null,
            person: null,
        }
    },
    mounted() {
        this.id = this.$route.params.id;
        this.getPerson(this.id);
    },
    methods: {
        getPerson(id) {
            axios.get(`/api/people/${id}`)
                .then( res => {
                    this.person = res.data.data;
                })
                .catch( error => {
                })
                .finally({
                })
        },
    }
}

</script>

<style scoped>

</style>
