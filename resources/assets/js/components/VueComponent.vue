<template>
    <div class="container">
        <div class="row" :style="borderObj">
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
        <div class="row" :style="borderObj">
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>处理用户输入</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-danger">{{ message_0 }}</p>
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
                        <h4>计算属性</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-info"> 元数据：{{ message_4 }} </p>
                        <p class="text-danger"> 计算属性：{{ reverseMessageComputed }} </p>
                        <p class="text-danger"> 方法：{{ reverseMessageFunc() }} </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>Class 与 Style 绑定</h4>
                    </div>
                    <div class="panel-body">
                        <a class="btn" :class="{'btn-info': isBtn, 'text-danger': isText}"> {{ message }} </a>
                        <a class="text" :class="textObj"> {{ message }} </a>
                        <a class="text" :style="aObj"> {{ message }} </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" :style="borderObj">
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>条件渲染</h4>
                    </div>
                    <div class="panel-body">
                        <div v-if="type === 'A'">
                            A
                        </div>
                        <div v-else-if="type === 'B'">
                            B
                        </div>
                        <div v-else-if="type === 'C'">
                            C
                        </div>
                        <div v-else>
                            Not A/B/C
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>列表渲染</h4>
                    </div>
                    <div class="panel-body">
                        <h5>数组列表</h5>
                        <li class="list-group" v-for="(item, index) in items" :key="item.id">
                            {{ index }}=>{{ item.message }}
                        </li>
                        <h5>对象列表</h5>
                        <li class="list-group" v-for="(item, index, key) in object" :key="item.id">
                            {{ key }}=>{{ index }}=>{{ item }}
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>事件处理</h4>
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-info" @click="counterNum">Add 1</button>
                        <p>The button above has been clicked
                            <strong>{{ counter }}</strong> times.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" :style="borderObj">
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>表单输入绑定</h4>
                    </div>
                    <div class="panel-body">
                        <input class="form-control" v-model="message_5" placeholder="edit me">
                        <p>Message is: {{ message_5 }}</p>
                        <br>

                        <input type="radio" class="radio-inline" id="male" value="男" v-model="picked">
                        <label for="male">男</label>
                        <input type="radio" class="radio-inline" id="female" value="女" v-model="picked">
                        <label for="female">女</label>
                        <span class="text-danger">Picked: {{ picked }}</span>

                        <select v-model="selected" class="custom-select-sm">
                            <option v-for="option in options" v-bind:value="option.value" :key="option.item">
                                {{ option.text }}
                            </option>
                        </select>
                        <span class="text-danger">Selected: {{ selected }}</span>
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
                message_0: 'Hello Vue!',
                message_1: 'Hello Vue!',
                message_2: '页面加载于 ' + new Date().toLocaleString(),
                message_3: 'Hello Vue!',
                message_4: 'Hello Vue!',
                message_5: 'Hello Vue!',
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
                ],
                isBtn: true,
                isText: false,
                textObj: {
                    'text-danger': true,
                    'btn-info': false
                },
                aObj: {
                    fontSize: '24px',
                    color: 'red'
                },
                type: 'F',
                borderObj: {
                    border: '1px solid pink',
                    margin: '0 0 20px 0'
                },
                items: [{
                        message: 'Foo'
                    },
                    {
                        message: 'Bar'
                    }
                ],
                object: {
                    firstName: 'John',
                    lastName: 'Doe',
                    age: 30
                },
                counter: 1,
                picked: '男',
                selected: 'A',
                options: [{
                        text: 'One',
                        value: 'A'
                    },
                    {
                        text: 'Two',
                        value: 'B'
                    },
                    {
                        text: 'Three',
                        value: 'C'
                    }
                ]
            }
        },
        mounted() {
            console.log('Vue正式开始！')
        },
        methods: {
            reverseMessage() {
                this.message_0 = this.message_0.split('').reverse().join('')
            },
            reverseMessageFunc() {
                return this.message_4.split('').reverse().join('')
            },
            counterNum() {
                return this.counter += 1
            }
        },
        computed: {
            reverseMessageComputed() {
                return this.message_4.split('').reverse().join('')
            }
        }
    }
</script>