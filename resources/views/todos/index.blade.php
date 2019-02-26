@extends('layouts.app')

@section('title')
Todos List
@endsection

@section('content')
  <h1 class="text-center my-5">TODOS PAGE</h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">
          Todos
        </div>

        <div class="card-body">
          <ul class="list-group">
            @foreach($todos as $todo)
              <li class="list-group-item">
                {{ $todo->name }}

                @if(!$todo->completed)
                  <a href="/todos/{{ $todo->id }}/complete" style="color: white;" class="btn btn-warning btn-sm float-right">Complete</a>
                @endif
                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
