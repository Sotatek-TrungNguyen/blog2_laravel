@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{--@include('common.errors')--}}

        <!-- New Task Form -->
        <form action="{{ url('/1/todolist') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="content" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current Tasks -->
    @if (count($todolist) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th> </th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($todolist as $todolist)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $todolist->content }}</div>
                                </td>
                                 <!-- Change Button -->
                                <td>
                                    <form action="{{ url('/1/todolist/change/'.$todolist->id) }}" method="POST" class="form-horizontal">
                                    {!! csrf_field() !!}

                                        <!-- Task Name -->
                                        <div class="form-group">
                                            <label for="task" class="col-sm-3 control-label">Task</label>

                                            <div class="col-sm-6">
                                                <input value='{{$todolist->content}}' type="text" name="content" id="task-name" class="form-control">
                                            </div>
                                            <button>Update</button>
                                        </div>
                                    </form>
                                </td>

                                <!-- Delete Button -->
                                <td>
                                    <form action="{{ url('/1/todolist/'.$todolist->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}

                                        <button>Delete Task</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection