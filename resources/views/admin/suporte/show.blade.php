@extends('admin.layouts.app')

@section('title', "Detalhes da Dúvida {$suporte->assunto}")

@section('header')
<h1 class="text-lg text-black-500">Dúvida {{ $suporte->assunto }}</h1>
@endsection

@section('content')
<ul>
    <li>assunto: {{$suporte->assunto}}</li>
    <li>Status: {{$suporte->status}}</li>
    <li>Descrição: {{$suporte->descricao}}</li>

</ul>
<form action="{{route('suporte.destroy', $suporte->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded"> Deletar</button>

</form>
@endsection