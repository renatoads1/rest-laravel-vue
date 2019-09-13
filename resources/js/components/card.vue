<template>
<div>
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="">
        <div class="card-body" v-model="iten">
            <div v-if="iten == null">
            <h5 class="card-title">Card title</h5>
            </div>
            <div v-else>
                <h5 class="card-title">{{iten}} <br> {{iten2}}</h5>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="javascript:void(0)" v-on:click="clicou" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
</template>

<script>
    export default {
         data () {
            return {
            iten: null,
            iten2:null
            }
        },
        methods:{
            clicou:function(){

                 axios
                .get('http://localhost/api/lol')
                .then(response => (
                    this.iten = response.data.msg,
                    this.iten2 = response.data.msg+'2'
                
                ));
 
            }
        }
    }
</script>
