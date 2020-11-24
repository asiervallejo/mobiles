@extends('layouts.public')
@section('content')
<table class="table w-50">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Web</th>
      <th scope="col">Link</th>
      <th scope="col">Opinions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($lista_links as $link)
      <th scope="row">{{$link->id}}</th>
      <td>{{$link->opinion_web}}</td>
      <td><a href="{{$link->opinion_url}}">Enlace</a></td>
      <td>{{$link->n_opinion}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection