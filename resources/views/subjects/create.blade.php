@extends('layout.app')

@section('content')

          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Subjects</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm"method="POST" action="{{route('sub.save')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="class_id"> Class  Name</label>
                    <select  name="class_id" class="form-control input-sm" id="class_id" >
                        <option value=" ">Select class</option>
                        @foreach ($get_all_class as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach

                    </select>

                  <div class="form-group">
                    <label for="name">Subject Name</label>
                    <input type="text" name="name" class="form-control input-sm" id="name" placeholder="Enter name">
                  </div>

                  
                

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-danger btn-block">Submit</button>
                </div>
              </form>
            </div>



    @endsection
