<template>
    <div>
        <section id="showcase">
            <div class="overlay">
                <div class="row">
                <div class="col-md-5 text-sm-center" style="padding-right: 0;padding-left: 0;">
                    <img src="../../../../public/img/arenttest/top-img.png" class="img-fluid h-100 w-100" alt="">
                    <div class="d-inline-block text-white" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 0.9rem;"><span>{{ pageData['day_now'] }}</span> <span style="font-size: 1.2rem">{{ pageData['day_now_percentage']}}%</span></div>
                </div>
                <div class="col-md-7" style="padding-left: 0;padding-right: 0;">
                    <img src="../../../../public/img/arenttest/chart.png" class="img-fluid d-none d-md-block" alt="">
                </div>
                </div>
            </div>
        </section>

        <section id="section-four-box" class="bg-white">
            <div class="container">
            <div class="row py-3 text-center">
                <div class="col-3">
                <div style="position: relative">
                    <img src="../../../../public/img/arenttest/shortcut.png" class="img-fluid" width="80px" alt="">
                    <div class="d-inline-block text-white" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 0.9rem;">Morning</div>
                </div>
                </div>
                <div class="col-3">
                <div style="position: relative">
                    <img src="../../../../public/img/arenttest/shortcut.png" class="img-fluid" width="80px" alt="">
                    <div class="d-inline-block text-white" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 0.9rem;">Lunch</div>
                </div>
                </div>
                <div class="col-3">
                <div style="position: relative">
                    <img src="../../../../public/img/arenttest/shortcut.png" class="img-fluid" width="80px" alt="">
                    <div class="d-inline-block text-white" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 0.9rem;">Dinner</div>
                </div>
                </div>
                <div class="col-3">
                <div style="position: relative">
                    <img src="../../../../public/img/arenttest/shortcut.png" class="img-fluid" width="80px" alt="">
                    <div class="d-inline-block text-white" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 0.9rem;">Snack</div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <section id="dishes">
            <div class="container">
            <div class="row">
                <div v-for="meal in pageData['meals_data']" :key="meal.id" class="col-sm-6 col-lg-3 pb-2">
                    <div class="card">
                        <img class="card-img" src="../../../../public/img/arenttest/dish.png" alt="">
                        <div class="card-img-overlay">
                            <div class="card-text bg-primary px-3 py-1" style="position: absolute; bottom: 0; left: 0; color: #fff;">
                                <small>{{ meal['datetime_at_formatted'] + meal['type_formatted'] }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-primary text-white">コラムをもっと見る</button>
            </div>
            </div>
        </section>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            pageData: {},
            isLoading: true,
            isApiError: false,
        }
    },
    beforeMount() {
        this.loadData();
    },
    methods: {
        loadData() {
            this.isLoading = true;
            const token =  this.$store.getters.getToken;
            const config = {
                headers: { Authorization: `Bearer ${token}` }
            }
            axios.get('http://localhost:8000/api/toppage', config)
            .then((response) => {
                this.isLoading = false;
                this.isApiError = false;
                const pageData = response.data.data;
                this.pageData = pageData;
            }).catch((error) => {
                console.log(error);
                this.isLoading = false;
                this.isApiError = true;
            });
          }
    }
}
</script>