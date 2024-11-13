import * as VueRouter from "vue-router";

//import TagComponent from "@/components/TagComponent.vue";

export default VueRouter.createRouter ({

    history: VueRouter.createWebHistory('/'),
    routes: [
        {
            path: '/people',
            component: () => import('./components/Person/IndexComponent.vue'),
            name: 'person.index'
        },
        {
            path: '/people/create',
            component: () => import('./components/Person/CreateComponent.vue'),
            name: 'person.create'
        },
        {
            path: '/people/:id/edit',
            component: () => import('./components/Person/EditComponent.vue'),
            name: 'person.edit'
        },
        {
            path: '/people/:id',
            component: () => import('./components/Person/ShowComponent.vue'),
            name: 'person.show'
        },

    ],
})
