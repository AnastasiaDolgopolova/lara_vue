<template>
    <div class="mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <tr>
                    <td>
                        <router-link :to="{name: 'person.show', params: {id: person.id}}">{{person.name}}</router-link>
                        </td>
                    <td>{{person.age}}</td>
                    <td>{{person.job}}</td>
                    <td>
                        <router-link :to="{name: 'person.edit', params: {id: person.id}}" class="btn btn-outline-warning"> Edit</router-link>
                    </td>
                    <td><a href="#" @click.prevent="$store.dispatch('deletePerson',person.id)" class="btn btn-outline-danger">Delete</a></td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "IndexComponent",

    mounted() {
      //  this.getPeople();
        this.$store.dispatch('getPeople')
    },

    computed: {
        people() {
            return this.$store.getters.people
        }
    },
}
</script>

<style scoped>

</style>
