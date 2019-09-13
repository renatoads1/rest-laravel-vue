<template>
    <div class='col-lg-12'>
        <div :class="alteracor" role="alert">
            componente menssagem 
        </div>
    </div>
    
</template>

<script>
    export default {
        props:['null','cor'],
        data: function(){
            return{
                status:"alert alert-dark"
            }
        },
        computed:{
            alteracor: function(){
                return "alert alert-dark" + (this.cor || "alert alert-primary");
            }
        }
    }
</script>

<style media="screen">
    body{
        background-color: rgb(0, 119, 255);
    }
</style>
