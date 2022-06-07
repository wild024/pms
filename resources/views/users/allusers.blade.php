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
                      <th> Name</th>
                      <th>contact</th>
                      <th>email</th>
                      <th>address</th>
                      <th>gender</th>
                      <th>class</th>
                      <th colspan='2'>Action</th>

                    </tr>
                  </thead>

                  <tbody>

                  @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->contact}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->address}}</td>
                      <td>{{$user->gender}}</td>
                      <td>{{$user->stuClass->name}}</td>

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
