<template>
    <div class='col-lg-12'>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">{{nome}}<br>{{valor}}<br>{{link}}</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        props:['link','cor'],
        data: function(){
            return{
                valor:'30',
                nome:'renato'
            }

        }
    }
</script>
