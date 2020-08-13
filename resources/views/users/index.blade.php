@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">users</div>
                    <table class="table">
                        <thread>
                            <tr>
                                <th scope="col"> # </th>
                                <th scope="col"> name </th>
                                <th scope="col"> email </th>
                                <th scope="col"> roles </th>
                                <th scope="col"> action </th>
                            </tr>
                        </thread>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td> {{ $user->name}}</td>
                                <td> {{ $user->email}}</td>
                                <td> {{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user) }}"><button type="button"> Edit </button></a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" >
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="button"> Delete </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
