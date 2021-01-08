@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Jobs</h3>
        <div class="row ml-1">
        </div>

        <div class="row">
            @foreach($users as $user)
                    <div class="col-md-4">
                        <div class="card text-center mt-3">
                            <div class="card-title">
                                <h3 class="card-title mt-3">{{$user->service->nick}}</h3>
                            </div>
                            <div class="card-header">
                                <h5> Elo atual</h5>
                                <h5 class="card-title mb-3">{{$user->service->division_now}}</h5>
                                <h5> Elo Desejado</h5>
                                <h5 class="card-title">{{$user->service->division_job}}</h5>
                                <h5> Telefone</h5>
                                <h5 class="card-title">{{$user->service->phone}}</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>

                                <form method="POST" action="{{route('booster.customers.destroy',['customer' =>$user->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-success">Finalizar</button>
                                </form>
                            </div>
                        </div>

                    </div>

            @endforeach
        </div>

    </div>

@endsection
