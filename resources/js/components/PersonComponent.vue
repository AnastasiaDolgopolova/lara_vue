<template>
    <div class="container">
        <SinglePostComponent></SinglePostComponent>
        <CreateComponent></CreateComponent>


<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">#</th>-->
<!--                <th scope="col">Name</th>-->
<!--                <th scope="col">Age</th>-->
<!--                <th scope="col">Job</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                    <tr v-for="person in persons">-->
<!--                        <th scope="row">{{person.id}}</th>-->
<!--                        <td>{{person.name}}</td>-->
<!--                        <td>{{person.age}}</td>-->
<!--                        <td>{{person.job}}</td>-->
<!--                    </tr>-->
<!--                </tbody>-->
<!--            </table>-->
        </div>
    </template>

    <script>
    import SinglePostComponent from "@/components/SinglePostComponent.vue";
    import CreateComponent from "@/components/CreateComponent.vue";
    import axios from "axios";
    export default {
        name: "PersonComponent",

        data() {
            return {
                persons: null
            }
        },

        mounted() {
          //  this.getPersons();
        },

        methods: {
            // getPersons() {
            //     axios.get('/persons')
            //     .then( res => {
            //         this.persons = res.data;
            //     })
            //     .catch( error => {
            //
            //     })
            //     .finally({
            //
            //     })
            // },
        },

        computed: {
        },

        components: {
            SinglePostComponent,
            CreateComponent
        }
    }
    </script>

    <style scoped>

    </style>

