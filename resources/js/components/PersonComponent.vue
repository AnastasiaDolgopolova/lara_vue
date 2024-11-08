<template>
    <div class="container">
        <CreateComponent></CreateComponent>
        <IndexComponent></IndexComponent>

        </div>
    </template>

    <script>
    import CreateComponent from "@/components/CreateComponent.vue";
    import IndexComponent from "@/components/IndexComponent.vue";
    import axios from "axios";
    export default {
        name: "PersonComponent",

        data() {
            return {
                persons: null
            }
        },

        mounted() {

        },

        methods: {

        },

        computed: {
        },

        components: {
            CreateComponent,
            IndexComponent
        }
    }
    </script>

    <style scoped>

    </style>

