@extends('admin.layouts.app')
@section('content')
<ul class="list-group">
  <li class="list-group-item"><h4 class="text-center">{!! $titulo !!}</h3></li>
    <li class="list-group-item">
      <a href="{!! url('/painel') !!}">Painel</a> -> {!! strtolower(str_replace(" ","-",$titulo)) !!}
    </li>
</ul>

<h4 class="text-center">Temas</h4>

<div class="panel panel-default">
  <div class="panel-body" style="padding:0px;">
    <div class="table-responsive">
      <table class="table">
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Data</th>
          <th></th>
        </tr>
        <?php foreach ($temas as $key => $value): ?>
        <tr>
          <td>{!! $value->id !!}</td>
          <td>{!! $value->titulo !!}</td>
          <td>{!! $value->created_at !!}</td>
          <td>
            <a href="{!! url('painel/deletar-tema/'.$value->id) !!}" class="btn btn-xs btn-danger">Deletar</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
@endsection
