<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <select>
                        <option></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data (){
            return {
                tipo : ''
            }
        },
        methods: {
            listarEstadoCivil (){
                axios.get('/estadoCivil')
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error){
                    console.log(error)
                })
            }
        },
        mounted() {
            this.listarEstadoCivil
        }
    }
</script>
