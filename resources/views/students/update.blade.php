@extends('layout.app')

@section('content')

          <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Update Employee Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm"method="POST" action="{{route('emp.update',$data->id)}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
                  </div>
                  <div class="form-group">
                    <label for="fname">Father Name</label>
                    <input type="text" name="fname" class="form-control" id="fname" value="{{$data->fname}}">
                  </div>

                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" name="contact" class="form-control" id="contact"value="{{$data->contact}}">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address"value="{{$data->address}}">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-danger">Submit</button>
                </div>
              </form>
            </div>



    @endsection
