export default {
    setAuth(state, payload) {
        state.userIsAuth = payload.userIsAuth;
        state.userId = payload.userId;
        state.token = payload.token;
    }
}