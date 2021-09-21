<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista Posts</div>
                   
                    <div class="card-body">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted(){
            this.getPosts();
        },
        methods:{
           getPosts(){
             axios.get('/api/posts').then((response)=> {
               console.log(response)
           });
           }
           
        }
    }
</script>
