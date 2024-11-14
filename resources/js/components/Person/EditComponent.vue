<template>
    <div class="w-25 mt-3" v-if="person">
        <div class="mb-3">
            <input type="text" class="form-control" v-model="person.name" id="name" placeholder="name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="person.age" id="age" placeholder="age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="person.job" id="job" placeholder="job">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('updatePerson',{id: person.id, name: person.name, age: person.age, job: person.job})" class="btn btn-primary" value="Update">
        </div>
    </div>
</template>

<script>
export default {
    name: "EditComponent",

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },

    computed: {
        isDisabled() {
            return this.person.name && this.person.age && this.person.job;
        },
        person() {
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
