<template>
    <div class="sidebar sidebar-left" id="sidebar-left-id">
        <h2>Sidebar left here</h2>
        <p>
            Danh sách các menu item truy cập nhanh
        </p>

        <div class="left-menu-ctn-flex">
            <div class="left-menu-ctn-item left-menu-item-home">
                <router-link style="color: black" to="/">Trang chủ</router-link>
            </div>
            <div class="left-menu-ctn-item">
                <router-link style="color: black" to="/lesson1">Lesson Resource App</router-link>
            </div>
            <div class="left-menu-ctn-item">
                <router-link style="color: black" to="/lesson2">Lesson Form Page</router-link>
            </div>
            <div class="left-menu-ctn-item">
                <router-link style="color: black" :to="{name: 'experiences'}">Lesson Send Request</router-link>
            </div>
            <div class="left-menu-ctn-item">
                <router-link style="color: black" :to="{name: 'lesson_animation'}">Lesson Animation</router-link>
            </div>
            <div class="left-menu-ctn-item">
                <router-link style="color: black" :to="{name: 'lesson_vuex'}">Lesson Vuex</router-link>
            </div>
            <div class="left-menu-ctn-item">
                <router-link style="color: black" :to="{name: 'app_random'}">App Random Text</router-link>
            </div>
            <div class="left-menu-ctn-item">
                <router-link style="color: black" :to="{name: 'create_voca'}">Create Vocabulary</router-link>
            </div>
            <div class="left-menu-ctn-item">
                <router-link style="color: black" to="/lesson4">Tin tức</router-link>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    
}
</script>