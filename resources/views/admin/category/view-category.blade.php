@extends('admin.layout.layout')
@section('title','Wishpik')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Category</a></li>
              <li class="breadcrumb-item active">Category Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Category</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form id="addCategory" enctype='multipart/form-data'>
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" readonly value="{{$category->category_name}}" name="category_name" id="category_name" placeholder="Enter name">
                  </div>
                  <div id ="category_name_error" class="error"></div>
                 

                  <div class="mb-4 form-group profile_image">
                  <label for="exampleInputFile">Category Image</label>
                  <div class="input-group">
                  <img src="{{$category->category_image}}" id="click_on_image" alt="" style="cursor:pointer;">
                
                  </div>
                
              </div>
                  
                </div>
                <!-- /.card-body -->

              
              </form>
            </div>
            <!-- /.card -->

         

          </div>
          <!--/.col (left) -->
          <!-- right column -->
       
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  

    <script>
        $(function () {
        bsCustomFileInput.init();
        });

    </script>


  
@endsection()
@section('js')