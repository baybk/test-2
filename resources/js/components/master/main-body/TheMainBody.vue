<template>
    <div class="container">
        <div class="main">

            <div class="content">
                <router-view></router-view>
            </div>

        </div>

        <div class="clear-float"></div>
    </div>
</template>

<script>

export default {
    props: ['selected_page_prop'],
}
</script>