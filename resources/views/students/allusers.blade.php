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
                      <th>Student Name</th>
                      <th>Address</th>
                      <th>contact</th>
                      <th colspan='2'>Action</th>

                    </tr>
                  </thead>

                  <tbody>

                  @foreach($students as $std)
                    <tr>
                      <td>{{$std->id}}</td>
                      <td>{{$std->name}}</td>
                      <td>{{$std->address}}</td>
                      <td>{{$std->mobile}}</td>
                      <td><a class="btn btn-outline-danger" href="{{route('student.getOne',$std->id)}}">Edit</a></td>
                      <td><a class="btn btn-outline-warning" href="{{route('student.out',$std->id)}}">Delete</a></td>
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
