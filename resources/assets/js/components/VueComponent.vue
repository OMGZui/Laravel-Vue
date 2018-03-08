<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>声明式渲染</h4>
                    </div>
                    <div class="panel-body">
                        <h4>{{ message_1 }}</h4>
                        <span :title="message_2">
                            鼠标悬停几秒钟查看此处动态绑定的提示信息！
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>条件与循环</h4>
                    </div>
                    <div class="panel-body">
                        <p v-if="seen">现在你看到我了</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>声明式渲染</h4>
                    </div>
                    <div class="panel-body">
                        <ol>
                            <li v-for="(todo, index) in todos" :key='index'>
                                {{ todo.text }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>处理用户输入</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-danger">{{ message }}</p>
                        <button @click="reverseMessage" class="btn btn-info">逆转消息</button>
                        <hr>
                        <p class="text-danger">{{ message_3 }}</p>                        
                        <input v-model="message_3" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>条件与循环</h4>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>声明式渲染</h4>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Hello Vue!',
                message_1: 'Hello Vue!',
                message_2: '页面加载于 ' + new Date().toLocaleString(),
                message_3: '',
                seen: true,
                todos: [{
                        text: '学习 JavaScript'
                    },
                    {
                        text: '学习 Vue'
                    },
                    {
                        text: '整个牛项目'
                    }
                ]
            }
        },
        mounted() {
            console.log('Vue正式开始！')
        },
        methods: {
            reverseMessage() {
                this.message = this.message.split('').reverse().join('')
            }
        },
    }
</script>