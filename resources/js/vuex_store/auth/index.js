import actionsAuth from './actions'
import gettersAuth from './getters'
import mutationsAuth from './mutations'

let auth_module = {
    state() {
        return {
            userIsAuth: false,
            userId: null,
            token: null
        }
    },
    mutations: mutationsAuth,
    actions: actionsAuth,
    getters: gettersAuth 
};

export default auth_module;