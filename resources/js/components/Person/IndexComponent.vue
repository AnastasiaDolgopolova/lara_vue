<template>
    <div>
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
                    <td><a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-outline-danger">Delete</a></td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "IndexComponent",

    data() {
        return {
            people: null,
            name: '',
            age: null,
            job: '',
        }
    },

    mounted() {
        this.getPeople();
    },
    methods: {
        getPeople() {
            axios.get('/api/people')
                .then( res => {
                    this.people = res.data;
                })
                .catch( error => {
                })
                .finally({
                })
        },
        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPeople();
                })
                .catch(error => {

                })
                .finally({})
        },
    }
}
</script>

<style scoped>

</style>
