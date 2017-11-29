@extends ('app/layout')

<style>
    .form-div {
        margin: 0 auto;
    }

    .form-div input {
       width: 150%;
    }
</style>

@section('content')

    <div class="row">

        <div class="col-md-12 form-div">
            <form action="{{ route('todo.save' , ['id' => $todos->id]) }}" method="post">
                {{csrf_field()}}
                <input class="form-control " name="todo" value="{{ $todos->todo }}" placeholder="Create New Todo">
            </form>

        </div>
    </div>



@stop