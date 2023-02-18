@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="title">TODO LIST</h1>
            </div>
            <div class="col-lg-12 mt-5">
                <form action="{{ route('todo.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" name="title" type="text" placeholder="Enter Task">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 mt-5">
            </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $key=> $task)
                    <tr>
                        <th scope="row">{{ $key++ }}</th>
                        <td>{{ $task->title }}</td>
                        <td>
                            @if ($task->Done == 0)
                                <span class="badge bg-warning">Pending</span>
                            @else
                                <span class="badge bg-success">Completed</span>
                            @endif
                        </td>
                        <td>
                            <a href={{ route('todo.delete',$task->id) }} class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            <a href={{ route('todo.Done',$task->id) }} class="btn btn-warning"><i class="bi bi-arrow-up-circle"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .title {
            text-align: center;
            font-size: 5rem;
            color: rgb(0, 255, 195);
        }
    </style>
@endpush
