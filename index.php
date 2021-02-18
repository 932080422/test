<?php
namespace CC;
function getA(){
    return "a is exit";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/vue.js"></script>
    <script src="js/vue-router.js"></script>
</head>
<body>
    <div id="app">
        <router-link to="/foo" replace>go to foo</router-link>
        <router-link to="/bar" append>go to bar</router-link>
        <router-view></router-view>
    </div>
</body>
<script>
    //定义路由组件
    const foo = {template:'<div class="foo">foo</div>'};
    const bar = {template:'<div class="bar">bar</div>'};
    //定义路由
    const routes = [
        {path:'/foo',component:foo},
        {path:'/bar',component:bar}
    ];
    //创建router实例
    const router = new VueRouter({
        routes:routes,
    });
    //创建和挂载根实例
    var vm = new Vue({
        el:"#app",
        router,
    });
</script>
</html>