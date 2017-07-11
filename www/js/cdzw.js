/**
 * Created by lxl on 2017/7/6.
 */

Vue.component('todo-item', {
    props: ['todo'],
    template: '<li ><a v-on:click="activemenu(todo.id)" v-bind:id="todo.id">{{ todo.name }}</a></li>',
    methods: {
        activemenu:function (id) {

            this.$emit('activemenu',[id])

        }

    }
})


var app1 = new Vue({
    el: '#app',
    data: {
        activeName: 'second',
        menu: {

            list: [{
                id: 0, name:'首页',awidth:'88px',atransform: 'translateX(0px)',css1:'zitem'
            },
                {
                    id: 1, name: '服务中心',awidth:'116px',atransform: 'translateX(88px)',css1:'zitem'
                },
                {
                    id: 2, name: '个人中心',awidth:'116px',atransform: 'translateX(204px)',css1:'zitem'
                }],
            currwidth:'88px',
            currtransform:'translateX(0px)'

        }

    },
    methods: {
        changemenu:function (data) {

             this.menu.currwidth=this.menu.list[data[0]].awidth;
             this.menu.currtransform=this.menu.list[data[0]].atransform;

        }

    }
});

