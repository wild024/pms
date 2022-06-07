@extends('layout.app')

@section('content')

                <div class="ro <div class="card-body table-responsive p-0">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>All Users</strong>
                    </p>

                <table class="table table-hover text-nowrap text-center">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th colspan='2'>Action</th>

                    </tr>
                  </thead>

                  <tbody>

                  @foreach($all as $std)
                    <tr>
                      <td>{{$std->id}}</td>
                      <td>{{$std->name}}</td>
                      <td><a class="btn btn-outline-danger" href="{{route('class.findclass',$std->id)}}">Edit</a></td>
                      <td><a class="btn btn-outline-warning" href="{{route('class.out',$std->id)}}">Delete</a></td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>

                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
    @endsection
