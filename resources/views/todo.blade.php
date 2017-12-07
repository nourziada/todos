@extends ('app.layout')

<style>
    .form-div {
        margin: 0 auto;
    }
</style>

@section('content')

    <div class="row">

        <div class="col-lg-6 form-div">
            <form action="{{route('create.todo')}}" method="post">
                {{csrf_field()}}
                <input class="form-control " name="todo" placeholder="Create New Todo">
            </form>

        </div>
    </div>




    <div class="panel panel-default">
        <div class="panel-heading">All Todos</div>

        <div class="panel-body">

            <table class="table table-hover">


                <thead>

                <th>Todo</th>
                <th>Delete</th>
                <th>Update</th>
                <th>Complete</th>
                </thead>


                <tbody>

                

                
                     @foreach($todos as $todo)


                        <tr>

                        
                            <td>

                               {{ $todo->todo }}

                            </td>


                            <td>
                              <a href="{{route('delete.todo', ['id' => $todo->id])}}" class="btn btn-danger"> x </a>
                            </td>

                            <td>

                                <a href="{{route('update.todo', ['id' => $todo->id])}}" class="btn btn-info"> Update </a>
                            </td>

                            <td>

                               @if($todo->completed == 0)
                                    <a href="{{route('complete.todo' , ['id' => $todo->id])}}" class="btn btn-success">Mark as Completed</a>
                                @else 

                                    Completed
                                    
                                @endif    


                            </td>


                        </tr>




                    @endforeach

          


                </tbody>




            </table>

        </div>

    </div>

@stop