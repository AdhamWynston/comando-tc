<script>
    import VcPagination from './pagination.vue'
    export default {

        components:{
            VcPagination
        },

        data: {
            clients: []
        },
        data(){
            return {
                pagination: {}
            }
        },
        computed: {
            client: function () {
              return this.clients
          }
        },
        methods:{
            navigate (page){
                var urlClients = 'clients/api/list?page='+page;
                axios.get(urlClients).then(response => {
                    this.clients = response.data.data;
                    this.pagination = response.data;
                })
            },
            desactiveClient: function (){
                toastr.success('Desativado com sucesso!')
            }
        },
         mounted (){
             var urlClients = 'clients/api/list';
             axios.get(urlClients).then(response => {
                 this.clients = response.data.data;
                 this.pagination = response.data;
             })
        },
    }
</script>
<template>

    <div class="row ">
        <div class="">
        <table class="highlight bordered " border="1">
            <thead>
            <tr>
                <th width="100px"><a href="#"></a>ID</th>
                <th class="center-align"><a href="#"></a>Nome</th>
                <th width="">Ação</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="c in clients">
                <td>{{ c.id }}</td>
                <td class="center-align">{{ c.name }}</td>
                <td>
                    <a href="" class="tooltipped waves-effect waves-circle waves-light btn-floating blue" data-tooltip="Visualizar cliente" data-position="top" data-delay="50"><i class="material-icons">remove_red_eye</i></a>
                    <a href="" class="tooltipped waves-effect waves-circle waves-light btn-floating orange" data-tooltip="Editar cliente" data-position="top" data-delay="50"><i class="material-icons">edit</i></a>
                    <a href="" id="toastrSuccess" class="tooltipped waves-effect waves-circle waves-light btn-floating green" data-tooltip="Editar cliente" data-position="top" data-delay="50" v-on:click.prevent="desactiveClient()"><i class="material-icons">lock_open</i></a>
                </td>

            </tr>
            </tbody>
        </table>
            <div class="centered">
                <vc-pagination :source="pagination" @navigate="navigate" ></vc-pagination>
            </div>
        </div>
    </div>

</template>
<style scoped="">

</style>