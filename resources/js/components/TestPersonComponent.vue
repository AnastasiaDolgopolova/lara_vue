<template>
    <div class="container">
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{name}}</div>
        <div>Job: {{vasyaJob}}</div>
        <button @click="sayHi">Hi</button>


        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
<!--            <template v-for="person in persons">-->
<!--            <tr v-if="person.age > 20">-->
<!--                <th scope="row">{{person.id}}</th>-->
<!--                <td>{{person.name}}</td>-->
<!--                <td>{{person.age}}</td>-->
<!--                <td>{{person.job}}</td>-->
<!--            </tr>-->
<!--            </template>-->
                    <tr v-for="person in personAgeMoreTwenty">
                        <th scope="row">{{person.id}}</th>
                        <td>{{person.name}}</td>
                        <td>{{person.age}}</td>
                        <td>{{person.job}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </template>

    <script>
    import SinglePostComponent from "@/components/SinglePostComponent.vue";
    export default {
        name: "TestPersonComponent",

        data() {
            return {
                name: 'Vasya',
                age: 20,
                boolean: false,
                someNull: null,
                persons: [
                    {
                        id: 1,
                        name: 'Anna',
                        age: 20,
                        job: 'coach'
                    },
                    {
                        id: 2,
                        name: 'Dan',
                        age: 34,
                        job: 'seller'
                    },
                    {
                        id: 3,
                        name: 'Iris',
                        age: 26,
                        job: 'traveler'
                    },
                    {
                        id: 4,
                        name: 'Petya',
                        age: 28,
                        job: 'teacher'
                    },
                    {
                        id: 5,
                        name: 'Anna',
                        age: 17,
                        job: 'rest'
                    },
                ],
                someObj: {
                    personName: 'Ivan'
                }
            }
        },

        methods: {
            sayHello() {
                console.log('Hello');
            },
            sayHi() {
                console.log('Hi');
            }
        },

        computed: {
            vasyaJob() {
                return this.name + ' works in office'
            },
            personAgeMoreTwenty() {
                return this.persons.filter(function(person) {
                    // if(person.age > 20){
                    //     return person;
                    // }
                    return person.age > 20;
                })
            },
            personAgeLessTwenty() {
                return this.persons.filter(function(person) {
                    return person.age < 20;
                })
            },
        },

        components: {
            SinglePostComponent
        }
    }
    </script>

    <style scoped>

    </style>

