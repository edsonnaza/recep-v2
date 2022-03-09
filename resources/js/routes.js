// importamos los componentes para motivo:
const mostrarMotivos = () =>
    import ('./components/motivo/mostrarMotivos.vue');
const crearMotivo = () =>
    import ('./components/motivo/Crear.vue');
const modificarMotivo = () =>
    import ('./components/motivo/Modificar.vue');


export const routes = [{
        name: mostrarMotivos,
        path: '/mostrarMotivos',
        component: mostrarMotivos
    }, {
        name: crearMotivo,
        path: '/crearMotivo',
        component: crearMotivo,
    }, {
        name: modificarMotivo,
        path: '/modificarMotivo/:id',
        component: modificarMotivo
    },



];