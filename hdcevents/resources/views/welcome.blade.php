@extends('layouts.main')

@section('title', 'HDC Events')
    
@section('content')

<h1>Algum titulo</h1>

<img src="/img/banner.jpg" alt="Banner">

@if(10 > 15)
    <p>a condição e true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Pedro")
    <p> O nome é pedro </p>
@elseif($nome == "Matheus")
    <p> O nome é {{ $nome }} e ele tem {{ $idade }} anos e trabalha como {{ $profissao }} </p>
@else
    <p>O nome não é Pedro</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p> {{ $arr[$i] }} - {{ $i }} </p> 
@endfor

@foreach($nomes as $nomes)
    <p> {{ $nomes }} </p>
    <p> {{ $loop->index }}</p>
@endforeach

@endsection