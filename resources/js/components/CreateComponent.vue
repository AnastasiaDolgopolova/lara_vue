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
            <input @click.prevent="addPerson" class="btn btn-primary" value="Add">
        </div>
<!--        <SomeComponent color="black" number="29" is-published="true"></SomeComponent>-->
        <SomeComponent :obj="obj"></SomeComponent>
    </div>

</template>

<script>
import SomeComponent from "@/components/SomeComponent.vue";
export default {
    name: "CreateComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null,
            obj: {
                color: 'green',
                number: '12',
                isPublished: false,
            }
        }
    },

    mounted() {
      //  console.log(this.$parent.$refs.index.indexLog());
    },

    methods: {
        addPerson() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                .then( res => {
                    this.name = null;
                    this.age = null;
                    this.job = null;
                    this.$parent.$refs.index.getPeople();
                })
                .catch( error => {

                })
                .finally({

                })
        }
    },

    components: {
        SomeComponent,
    }

}

</script>

<style scoped>

</style>
