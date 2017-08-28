<script>
    export default {
        props: ['clients'],
        data(){
            return {
            }
        },
        methods:{
            desactiveClient: function (){

                toastr.success('Desativado com sucesso!')
            }
        },
         mounted (){
             var urlClients = 'clients/api/list';
             axios.get(urlClients).then(response => {
                 this.clients = response.data
             });
        },
    }
</script>
<template>

    <div class="row">
        <table class="highlight" border="1">
            <thead>
            <tr>
                <th><a href="#"></a>ID</th>
                <th><a href="#"></a>Nome</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="c in clients">
                <td>{{ c.id }}</td>
                <td>{{ c.name }}</td>
                <td>
                    <a href="" class="tooltipped waves-effect waves-circle waves-light btn-floating blue" data-tooltip="Visualizar cliente" data-position="top" data-delay="50"><i class="material-icons">remove_red_eye</i></a>
                    <a href="" class="tooltipped waves-effect waves-circle waves-light btn-floating orange" data-tooltip="Editar cliente" data-position="top" data-delay="50"><i class="material-icons">edit</i></a>
                    <a href="" id="toastrSuccess" class="tooltipped waves-effect waves-circle waves-light btn-floating green" data-tooltip="Editar cliente" data-position="top" data-delay="50" v-on:click.prevent="desactiveClient()"><i class="material-icons">lock_open</i></a>
                </td>

            </tr>
            </tbody>
        </table>
    </div>

</template>
<style scoped="">

</style>