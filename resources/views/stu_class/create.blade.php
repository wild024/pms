@extends('layout.app')

@section('content')

          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm"method="POST" action="{{route('class.save')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">

                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control input-sm" id="name" placeholder="Enter Name">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-danger btn-block">Submit</button>
                </div>
              </form>
            </div>



    @endsection
