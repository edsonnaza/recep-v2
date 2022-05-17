<template>
<div>
<button @click="CargarRecep()">Cargar</button>
</div>   
</template>

<script>
export default {
    //el: '#app',

         data:{
                    saludar:'Hola desde la instacia app',
                    numero: 11,
                    lista:['1','2','3','4','100','300'],
                    activo: false,
                    blog: '<h4>Hola mundo!! </h4>',
                    texto: 'Otro hola mundo'

        },
    
        methods: {
            saludando: function(){
                console.log('Saludando desde la consola');
            },

            CargarRecep: function(){
                this.axios.get('127.0.0.1:9000/api/').then(
                        function (response) {
                            console.log(response.data)
                        }
                )
            }
 }
}
</script>
