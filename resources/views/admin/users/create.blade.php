@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                {!! form($form->add('Enviar','submit',
                       ['attr'=>['class'=>' btn btn-primary']]
                ))!!}
            </div>

        </div>

    </div>

@endsection
