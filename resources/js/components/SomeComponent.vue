<template>
    <div>
<!--        <div>Color: {{ color }}</div>-->
<!--        <div>Number: {{ number > 10 ? 'more 10' : 'less 10'}}</div>-->
<!--        <div>Is published: {{ isPublished ? 'published' : 'not published'}}</div>-->
        <div>Color: {{ obj.color }}</div>
        <div>Number: {{ obj.number > 10 ? 'more 10' : 'less 10'}}</div>
        <div>Is published: {{ obj.isPublished ? 'published' : 'not published'}}</div>
    </div>

</template>

<script>

export default {
    name: "SomeComponent",

    data() {

    },

    props: [
       // 'color', 'number', 'isPublished'
        'obj'
    ],

    mounted() {
       //console.log(this.$parent.$parent.parentLog());
    },

    methods: {

    }

}

</script>

<style scoped>

</style>
