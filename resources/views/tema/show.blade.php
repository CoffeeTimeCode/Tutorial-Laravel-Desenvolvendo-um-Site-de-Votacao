@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>{!! $tema->titulo !!}</h4></div>
                <div class="panel-body text-justify">
                    {!! $tema->descricao !!}
                </div>
                <form class="" action="{!! url()->current() !!}" method="post">
                  {!! csrf_field() !!}
                  <div class="panel-body">
                      <p>Selecione um das opções abaixo:</p>
                      <?php foreach ($opcoes as $key => $value): ?>
                        <p><input type="radio" name="opcao" value="{!! $value->id !!}"> {!! $value->opcao !!} </p>
                      <?php endforeach; ?>
                  </div>

                  <div class="panel-footer">
                    <button type="submit" class="btn btn-sm btn-success">Votar</button>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
@endsection
