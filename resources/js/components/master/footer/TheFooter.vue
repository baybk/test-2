<template>
    <div class="footer">
        
        <section id="footer-section" class="bg-dark py-3 mt-3">
            <div class="container">
                <div class="text-center text-white">
                <div class="h4" >Healthy</div>
                </div>
            </div>
        </section>

        <div class="modal" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" action="">
                    <p v-if="!isValidated" class="text-red">Login data wrong!!</p>
                    <div class="modal-body">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" placeholder="Email" name="email" class="form-control" v-model.trim="email">
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" name="password"  class="form-control" v-model.trim="password">
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-primary" @click="login" >Login</button>
                    </div>
                </form>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
export default {
    data() {
        return {
            email: null,
            password: null,
            isValidated: true
        }
    },
    methods: {
        async login() {
            if (this.email === '' || this.password === '') {
                this.isValidated = false;
                return false;
            }

            const isLogin =  await this.$store.dispatch('login', {
                email: this.email,
                password: this.password
            });

            if (isLogin === true) {
                console.log('Login success');
            } else {
                console.log('Login fail');
            }
        }
    }
}
</script>