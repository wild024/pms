@extends('layout.app')

@section('content')

          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm"method="POST" action="{{route('student.save')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control input-sm" id="name" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control input-sm" id="address" placeholder="Enter Address">
                  </div>

                  <div class="form-group">
                    <label for="mobile">Contact</label>
                    <input type="text" name="mobile" class="form-control input-sm" id="mobile" placeholder="Enter mobile">
                  </div>
                

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-danger btn-block">Submit</button>
                </div>
              </form>
            </div>



    @endsection
