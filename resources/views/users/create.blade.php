@extends('layout.app')

@section('content')

          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">New User Registration</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm"method="POST" action="{{route('user.save')}}">
                @csrf
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-6">

                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control input-sm" id="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group col-md-6">

                    <label for="contact">Contact</label>
                    <input type="text" name="contact" class="form-control input-sm" id="contact" placeholder="Enter contact">
                  </div>
                  <div class="form-group col-md-6">

                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control input-sm" id="email" placeholder="Enter email">
                  </div>

                  <div class="form-group col-md-6">

                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control input-sm" id="password" placeholder="Enter password">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control input-sm" id="address" placeholder="Enter Address">
                  </div>

                  <div class="form-group col-md-6">
                    <label class="" for="gender">Gender </label><br>
                    <div class="form-chek form-check-inline">
                    <input type="radio" class="form-check-input" value="M" name="gender" >
                    <label class="form-check-label">Male </label>
                    </div>
                    <div class="form-chek form-check-inline">
                    <input type="radio" class="form-check-input" value="F" name="gender" >
                    <label class="form-check-label">Female </label>
                  </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="class_id">your Class(if Student)</label>
                    <select  name="class_id" class="form-control input-sm" id="class_id" >
                        <option value="0">No Need</option>
                        @foreach ($get_all_class as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach

                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <input type="text" name="status" class="form-control input-sm" id="status" value='pending' readonly>
                  </div>



                </div>
            </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-danger btn-block">Submit</button>
                </div>
              </form>
            </div>



    @endsection
