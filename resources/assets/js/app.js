require('./bootstrap');

const app = new Vue({
    el: '#app',

    data() {
        return {
            despesas: [
                {descricao: "Teste 1", valores: [10.5, 13.4, 12.3, 12, 10, 99.2, 23.43, 4, 5, 6, 6, 3]},
                {descricao: "Teste 2", valores: [10.5, 14.4, 13.2, 12, 10, 99.2, 23.43, 5, 5, 6, 6, 3]},
                {descricao: "Teste 3", valores: [10.5, 15.4, 14.1, 12, 10, 99.2, 23.43, 6.7, 5, 6, 6, 3]},
                {descricao: "Teste 4", valores: [10.5, 16.4, 15.2, 12, 10, 99.2, 23.43, 4.4, 5, 6, 6, 3]},
                {descricao: "Teste 5", valores: [10.5, 17.4, 16.3, 12, 10, 99.2, 23.43, 4.3, 5, 6, 6, 3]}
            ]
        }
    },

    methods() {

    }
});
