<template>
    <div class="child">
        <h4>{{ message }}</h4>
        <p class="text-info"> {{ msg }} </p>
    </div>
</template>

<script>
    export default {
        props: ["message", "msg"],
        data() {
            return {};
        },
        mounted() {
            console.log(this);
        }
    };
</script>

<style lang="scss" scoped>
</style>
