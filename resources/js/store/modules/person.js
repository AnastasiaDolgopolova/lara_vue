import router from "@/router";

const state = {
    person: null,
    people: null,
}

const getters = {
    person: state => state.person,
    people: state => state.people,
}

const actions = {
    getPerson({commit}, id) {
        axios.get(`/api/people/${id}`)
            .then( res => {
                commit('setPerson', res.data.data);
            })
    },

    getPeople({commit}) {
        axios.get('/api/people')
            .then( res => {
                commit('setPeople', res.data.data);
            })
    },
    deletePerson({dispatch},id) {
        axios.delete(`/api/people/${id}`)
            .then(res => {
                dispatch('getPeople');
            })
    },
    updatePerson({},data) {
        axios.patch(`/api/people/${data.id}`, {name: data.name, age: data.age, job: data.job})
            .then(res => {
                router.push({name: 'person.show', params: {id: data.id}});
            })
    },
    storePerson({},data) {
        axios.post('/api/people', {name: data.name, age: data.age, job: data.job})
            .then( res => {
                router.push({name: 'person.index'});
            })
    }
}

const mutations = {
    setPerson(state, person) {
        state.person = person;
    },
    setPeople(state, people) {
        state.people = people;
    }
}

export default {
    state, mutations, getters, actions
}
