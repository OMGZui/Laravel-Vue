<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <child message="我是子组件" :style="attr" :msg="parentMsg"></child>
            </div>
            <div class="col-sm-3">
                <p class="text-info"> {{ parent }} </p>
            </div>
            <div class="col-sm-3">
                <input v-model="parentMsg" class="input-sm">
                <my-component></my-component>
            </div>
            <div class="col-sm-3">
                <p>{{ total }}</p>
                <button-counter @increment="incrementTotal" class="btn btn-info"></button-counter>
                <button-counter @increment="incrementTotal" class="btn btn-info"></button-counter>
            </div>
        </div>
    </div>
</template>

<script>
    let Child2 = {
        template: "<div>我是局部组件</div>"
    };

    Vue.component("button-counter", {
        template: '<button @click="incrementCounter">{{ counter }}</button>',
        data() {
            return {
                counter: 0
            };
        },
        methods: {
            incrementCounter() {
                this.counter += 1;
                this.$emit("increment");
            }
        }
    });
    export default {
        components: {
            "my-component": Child2
        },
        data() {
            return {
                parent: "我是父组件",
                parentMsg: "父",
                attr: {
                    color: "red",
                    border: "1px solid pink"
                },
                total: 0
            };
        },
        methods: {
            incrementTotal() {
                this.total += 1;
            }
        }
    };
</script>

<style lang="scss" scoped>
</style>
