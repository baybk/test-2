import axios from 'axios';
export default {
    async login(context, payload) {
        const response = await axios.post('http://localhost:8000/api/login',  {
                email: payload.email,
                password: payload.password
            });
        if (response.status === 200) {
                const loginData = response.data.data;
                context.commit('setAuth', {
                    userIsAuth: true,
                    userId: loginData.user.id,
                    token: loginData.access_token
                });
                localStorage.setItem('userId', loginData.user.id);
                localStorage.setItem('token', loginData.access_token);
                return true;
        } else {
            return false;
        };
    },
    logout(context) {
        localStorage.removeItem('userId')
        localStorage.removeItem('token');
        context.commit('setAuth', {userIsAuth: false, userId: null, token: null});
    },
    tryLogin(context) {
        const token = localStorage.getItem('token', null);
        const userId = localStorage.getItem('userId', null);

        if (token !== null && userId !== null) {
            context.commit('setAuth', {
                userIsAuth: true,
                userId: userId,
                token: token
            });
        } else {
            context.commit('setAuth', {
                userIsAuth: false,
                userId: null,
                token: null
            });
        }
    }
}