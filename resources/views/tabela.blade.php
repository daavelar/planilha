@extends('layout')

@section('content')
<h2>Tabela</h2>

<div class="btn-group">
    <button class="btn btn-sm btn-primary">2013</button>
    <button class="btn btn-sm btn-primary">2014</button>
    <button class="btn btn-sm btn-primary">2015</button>
    <button class="btn btn-sm btn-primary">2016</button>
</div>
<button class="btn btn-sm btn-success" @click="adicionarDespesa">+ despesa</button>
<div class="row">
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
            <td v-for="valor in despesa.valores">@{{ valor | currency }}</td>
        </tr>
    </table>
</div>
@endsection
