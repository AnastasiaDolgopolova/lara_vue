<template>
    <div class="container">
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>

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
          //  console.log(this.$refs.index.indexLog());
           // console.log(this.$refs.index.name);
        },

        methods: {
            parentLog() {
                console.log('this is parent component');
            }
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

