<!--<template>

<div class="row">
    <div class="col-lg-12">
        
        
        <div class="card-body "> 
            
             
        <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
      <!--      <router-link :to='{name:"crearMotivo"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-default text-black">
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="motivo in motivos" :key="motivo.id">
                                    <td>{{ motivo.id }}</td>
                                    <td>{{ motivo.nombre_motivo }}</td>
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                 <!--                       <router-link :to='{name:"editarMotivo",params:{id:motivo.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarBlog(motivo.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    </div>                     
  
            </div>
        </div>
</div>
 
    
</template>
<!--
<script>
export default {
    name:"motivos",
    data(){
        return {
            motivos:[]
        }
    },
    mounted(){
        this.mostrarMotivos()
    },
    methods:{
        async mostrarMotivos(){
            await this.axios.get('/api/motivos').then(response=>{
                this.motivos = response.data
            }).catch(error=>{
                console.log(error)
                this.motivos = []
            })
        },
        borrarMotivo(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/motivo/${id}`).then(response=>{
                    this.mostrarMotivos()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>