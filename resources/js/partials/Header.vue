<script>
export default {
    name:'Header'
}
</script>


<template>
    <header>
        <ul>
            <li> <router-link to="/">home</router-link> </li>
            <li><router-link :to="{name:'about'}">chi siamo</router-link></li>
            <li><router-link :to="{name:'contacts'}">contatti</router-link></li>

        </ul>
    </header>

</template>


<style slang="scss" scoped>

header{
    text-align: center;
    padding: 30px 0;
}
ul{
    list-style: none;
}
li{
    display: inline-block;
    padding: 10px 20px;
}
a{
    text-decoration: none;
    text-transform: uppercase;
    color: black;
    font-size: 30px;
}
a:hover{
    color: brown;
}
a:active{
    color: brown;
}


</style>
