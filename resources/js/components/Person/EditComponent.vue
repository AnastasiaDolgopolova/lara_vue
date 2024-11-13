<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="age" id="age" placeholder="age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="job" id="job" placeholder="job">
        </div>
        <div class="mb-3">
            <input @click.prevent="updatePerson" class="btn btn-primary" value="Update">
        </div>
    </div>
</template>

<script>
export default {
    name: "EditComponent",
    data() {
        return {
            id: null,
            name: null,
            age: null,
            job: null
        }
    },

    mounted() {
       // console.log(this.$route.params.id);
        this.id = this.$route.params.id;
        this.getPerson(this.id);
    },

    methods: {
        getPerson(id) {
            axios.get(`/api/people/${id}`)
                .then( res => {
                    this.name = res.data.name;
                    this.age = res.data.age;
                    this.job = res.data.job;
                })
                .catch( error => {
                })
                .finally({
                })
        },
        updatePerson() {
            this.$parent.editPersonId = null;
            axios.patch(`/api/people/${this.id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$router.push({name: 'person.show', params: {id: this.id}});
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
