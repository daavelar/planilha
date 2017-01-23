@extends('layout')

@section('content')
    <h2>Tabela de despesas</h2>
    <table class="table table-bordered">
        <tr>
            <th>{{ date('Y') }}</th>
            <th>Janeiro</th>
            <th>Fevereiro</th>
            <th>Março</th>
            <th>Abril</th>
            <th>Maio</th>
            <th>Junho</th>
            <th>Julho</th>
            <th>Agosto</th>
            <th>Setembro</th>
            <th>Outubro</th>
            <th>Novembro</th>
            <th>Dezembro</th>
        </tr>
        <tr v-for="despesa in despesas">
            <td>@{{ despesa.descricao }}</td>
            <td v-for="valor in despesa.valores">@{{ valor }}</td>
        </tr>
    </table>
@endsection
