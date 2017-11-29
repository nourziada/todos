@extends ('app/layout')

<style>
    .form-div {
        margin: 0 auto;
    }
</style>

@section('content')

    <div class="row">

        <div class="col-lg-6 form-div">
            <form action="/create/todo" method="post">
                {{csrf_field()}}
                <input class="form-control " name="todo" placeholder="Create New Todo">
            </form>

        </div>
    </div>


    @foreach($todos as $todo)

        {{ $todo->todo }} <a href="/todo/delete/{{$todo->id}}" class="btn btn-danger"> x </a>

        <a href="/todo/update/{{$todo->id}}" class="btn btn-info"> Update </a>

        @if($todo->completed == 0)
            <a href="/todo/completed/{{$todo->id}}" class="btn btn-success">Mark as Completed</a>
        @endif

        <hr>

    @endforeach

@stop