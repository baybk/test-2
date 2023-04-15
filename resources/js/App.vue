<template>
    <div>
        <TheHeader></TheHeader>
        <TheMainBody></TheMainBody>
        <TheFooter></TheFooter>
    </div>
</template>
  
<script>
    import TheHeader from './components/master/header/TheHeader.vue';
    import TheFooter from './components/master/footer/TheFooter.vue';
    import TheMainBody from './components/master/main-body/TheMainBody.vue';
    
    export default {
        name: 'App',
        components: {
            TheHeader,
            TheFooter,
            TheMainBody
        },
        provide() {
            return {
                selectedPage: this.selectedPage,
                changeSelectedPage: this.changeSelectedPage
            }
        },
        data() {
            return {
                selectedPage: 'HomePage'
            }
        },
        methods: {
            changeSelectedPage(pageName){
                console.log('App.vue > run changeSelectedPage ')
                console.log(pageName)
                this.selectedPage = pageName;
            }
        },
        created() {
            this.$store.dispatch('tryLogin')
        }
    }
</script>