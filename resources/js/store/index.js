import { createApp } from 'vue';
import { createStore } from 'vuex';
import Person from './modules/person';

const store = createStore({
    modules: {
        person: Person,
    }
});

export default store;
