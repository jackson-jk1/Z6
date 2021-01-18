@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {!!Button::primary('elojobs')->asLinkTo(route('booster.customers.index')) !!}
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <product-component products="{{ $products }}"></product-component>
    </div>
    @if (Auth::user())
        <div class="container mt-5">
            <div class="row justify-content-center">
            <button type="button" class="btn btn-info btn-flat email-fixo" data-toggle="modal" data-target="#modalForm">
               <h3><i>Seguir para Compra</i></h3>
            </button>
            <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mb-5">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><h3>Seu nick</h3></label>
                                    <input id="nick" type="text" class="form-control @error('nick') is-invalid @enderror" name="email" value="{{ old('text') }}" required autocomplete="email">

                                    @error('nick')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Campo Obrigatório</strong>
                                    </span>
                                    @enderror
                                    <label for="exampleFormControlInput1"><h3>Telefone para Contato</h3></label>
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="name" value="{{ old('phone') }}" required autocomplete="name" autofocus>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Campo Obrigatório</strong>
                                    </span>
                                    @enderror
                                    <input id="modal_to" name="to" type="hidden">
                                    <input id="modal_from" name="from" type="hidden">

                                </div>
                                <button type="submit" class="btn btn-success"><h3>Finalizar Compra</h3></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
      </div>
    @endif

</div>
@endsection
