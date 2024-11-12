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
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              @if ($errors->any())
                  <div class="alert alert-warning">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              <!-- form start -->
              <form id="addCategory" enctype='multipart/form-data'>
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" value="{{$category->category_name}}" name="category_name" id="category_name" placeholder="Enter name">
                      </div>
                      <div id ="category_name_error" class="error"></div>
                      @if($errors->has('category_name'))
                        <div class="error">{{ $errors->first('category_name') }}</div>
                      @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Wish Date</label>
                        <input type="date" class="form-control" value="{{$category->wish_date}}" name="wish_date" id="wish_date" placeholder="Enter name">
                      </div>
                      <div id ="wish_date_error" class="error"></div>
                      @if($errors->has('wish_date'))
                        <div class="error">{{ $errors->first('wish_date') }}</div>
                      @endif
                    </div>
                  </div>
                 

                  <div class="mb-4 form-group profile_image">
                  <label for="exampleInputFile">Category Image</label>
                  <div class="input-group">
                  <img src="{{$category->category_image}}" id="click_on_image" alt="" style="cursor:pointer;">
                <input type="file" name="category_image" id="category_image" upload_status="false" style="display: none;">
                  </div>
                
              </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="submitButton" class="btn btn-primary">Update</button>
                </div>
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
    $(document).ready(function() {
    
      $("#category_name").blur(function() {
        $.ajax({
          type:"POST",
          url:"{{route('admin.check_category_name')}}",
          
          data: {
            "_token": "{{ csrf_token() }}",
            category_name: $(this).val(),
            id : "{{$category_id}}"
          },
          success: function(result) {
            if(result) {
              console.log("resultdata",result)
              $("#category_name_error").html("This Category Name is already exists.");
            }
            else {
              $("#category_name_error").html("");
            }
          }
        });
      });

      var addCategory = $( "#addCategory" );
      addCategory.validate({
        ignore: [],
        debug: false,
        rules: {
          category_name: {
            required: true,
            maxlength:30,
            minlength:2
          },
          wish_date: {
            required: true,
            
          },
          
          
        },
        messages: {
          category_name: {
            required: "The Category Name field is required."
          },
          wish_date: {
            required: "The Wish date field is required."
          },
         
                    
        },
        submitHandler:function(form){
                $("#lodaerModal").modal("show");
                $("#submitButton").attr('disabled', "true");


                let checkUploadFile = $("#category_image").attr("upload_status");

                // if(checkUploadFile == "false"){
                //   toastr.warning('Please upload image')
                 
                //   setTimeout(() => {
                //     $("#lodaerModal").modal("hide");
                //     $("#submitButton").removeAttr('disabled');
                //   }, 500);
                  
                //   return false;
                // }


                var fd = new FormData();
                var other_data = $('#addCategory').serializeArray();
                
                $.each(other_data, function(key, input) {
                  console.log("keyhhhh",key)
                  console.log("innnnnn",input)
                    fd.append(input.name, input.value);
                });

                //console.log("sss", fd)

                //return false;

                let file = $("#category_image")[0].files;
                // console.log("sssss", file)
                // return false;
                fd.append('category_image', file[0]);
                var data = fd;

                $.ajax({
                    url:"{{route('admin.edit_category',$category_id)}}",
                    data: fd,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(res){
                        // console.log("resultback",res);
                        // return false;

                        if(res.status == "true"){
                          toastr.success(res.message);
                          window.location.href="{{route('admin.category')}}";
                            // swal({
                            //     title: "Information",
                            //     text: res.message,
                            //     type: "success",
                            //     showCancelButton: false,
                            // }, function(willDelete) {
                            //   alert('done');
                                
                            // });

                            
                        }else{
                          toastr.error(res.message);
                            // swal("Alert", res.message, "error");
                        }

                        setTimeout(() => {
                            $("#lodaerModal").modal("hide");
                            $("#submitButton").removeAttr('disabled');
                            $("#category_name").val("");
                            $("#wish_date").val("");
                        }, 500);

                        
                        
                        
                    },
                    error: function(data, textStatus, xhr) {
                        if(data.status == 422){
                        
                        } 
                        toastr.error('Something went wrong. Please try again')
                        

                        setTimeout(() => {
                            $("#lodaerModal").modal("hide");
                            $("#submitButton").removeAttr('disabled');
                        }, 500);

                        


                    }
                });
                //form.submit();
            },
        onkeyup: false,
        onblur: true
      });
    });
  </script>

  <script>
$(function () {
  bsCustomFileInput.init();
});

</script>

<script>
    $(document).ready(function(){
      $("#click_on_image").on("click",function(){
        $("#category_image").click();
      })


      $("#category_image").on("change", function(){
        let old_image = "{{url('public/dummy.jpg')}}";
        var file = event.target.files[0];
        var file_nameshow = file.name;
        var valu = file_nameshow;
        var length = valu.length;
        if(length>24){
          var slice_name = valu.slice(0,24)+'...';
        }else{
          var slice_name = valu;
        }
        if(file){

          if(file.type == "image/jpeg" || file.type == "image/png" || file.type == "image/jpg"){

            var size = file.size;
            if(size > 5242880){
              toastr.error('Image should be less than or equal to 5 MB.')
             
              
              $("#category_image").val("");
              $("#category_image").attr("upload_status" , "false");
              $("#click_on_image").attr("src", old_image);
              return false;
            }else{
                var reader = new FileReader();
                reader.onload = function(e){
                  $("#category_image").attr("upload_status" , "true");
                  $("#category_image").attr("src", e.target.result);
                  $("#click_on_image").attr("src", e.target.result);
                }
            }
          
            reader.readAsDataURL(file);
            
          }else{
            toastr.warning('Image should be .jpg, .jpeg or .png format file only.')
           
            
            $("#category_image").attr("upload_status" , "false");
            $("#category_image").val("");
            $("#click_on_image").attr("src", old_image);
            return false;
            
          }
        }
      })
    })
  </script>
  
@endsection()
@section('js')