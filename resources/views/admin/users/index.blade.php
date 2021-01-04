@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Bossters</h3>
        <div class="row ml-1">
        {!!Button::primary('Novo Booster')->asLinkTo(route('admin.users.create')) !!}
        </div>

        <div class="row">
            @foreach($users as $user)
            <div class="col-4">
        <div class="card text-center mt-3">
            <div class="card-header">
                <img src="cinqueterre.jpg" class="rounded-circle">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <p class="card-text">{{$user->email}}</p>

                <form method="POST" action="{{route('admin.users.destroy',['user' => $user->id])}}">
                    @csrf
                    @method('DELETE')
                    {!!Button::primary('editar')->asLinkTo(route('admin.users.edit',['user' => $user->id])) !!}
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>

        </div>
                {!! $users->links() !!}
            @endforeach
        </div>

    </div>

@endsection
