@extends('layout.app')

@section('content')

          <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Update Employee Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm"method="POST" action="{{route('class.update',$data->id)}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-danger">Submit</button>
                </div>
              </form>
            </div>



    @endsection
