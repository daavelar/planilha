require('./bootstrap');

const app = new Vue({
    el: '#app',

    data() {
        return {
            despesas: [
                {descricao: "Carro", valores: [1108,1108,1108,1108,1108,1108,1108,1108,1108,1108,1108,1108]},
                {descricao: "Vivo", valores: [170,170,170,170,170,170,170,170,170,170,170,170]},
                {descricao: "Seguro do carro", valores: [99,99,99,99,99,99,99,99,99,99,99,99]},
                {descricao: "Guardar", valores: [2000,2000,2000,2000,2000,2000,2000,2000,2000,2000,2000,2000]},
                {descricao: "Empréstimo", valores: [845,845,845,845,845,845,845,845,845,845,845,845]}
            ]
        }
    },

    methods() {
        return {
            adicionarDespesa () {
                console.log('adicionando despesa...');
            }
        }
    }
});
