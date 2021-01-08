@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Jobs</h3>
        <div class="row ml-1">
        </div>

        <div class="row">
            @foreach($users as $user)
                @if($user->id_booster ==  '')
                <div class="col-md-4">
                    <div class="card text-center mt-3">
                        <div class="card-title">
                            <h3 class="card-title mt-3">{{$user->service->nick}} {{$user->service->nick}}</h3>
                        </div>
                        <div class="card-header">
                            <h5> Elo atual</h5>
                            <h5 class="card-title mb-3">{{$user->service->division_now}}</h5>
                            <h5> Elo Desejado</h5>
                            <h5 class="card-title">{{$user->service->division_job}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>

                            <form method="POST" action="{{route('booster.customers.update',['customer' =>$user->id, 'id' => Auth::user()->userble_id])}}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Aceitar</button>
                            </form>
                        </div>
                    </div>

                </div>
                @endif
            @endforeach
        </div>

    </div>

@endsection
