@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
@stop

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header alert d-flex justify-content-between align-items-center">
          <a class="btn btn-sm btn-success back-button" href="{{ url()->previous() }}">{{ __('adminlte::adminlte.back') }}</a>
            <h3>Edit Category</h3>
          </div>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <form id="addCategory" enctype='multipart/form-data'>
              @csrf

              <div class="mb-4 profile_image">
                <img src="{{$category->category_image}}" id="click_on_image" alt="" style="cursor:pointer;">
                <input type="file" name="category_image" id="category_image" upload_status="true" style="display: none;">
              </div>
              
              <div class="card-body">
                @if ($errors->any())
                  <div class="alert alert-warning">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                
                <!-- Form Fields -->
                
                <!-- INFORMATION FIELDS -->
                <div class="information_fields">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="name">Category Name<span class="text-danger"> *</span></label>
                        <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}" id="category_name" maxlength="30">
                        <div id ="category_name_error" class="error"></div>
                        @if($errors->has('category_name'))
                          <div class="error">{{ $errors->first('category_name') }}</div>
                        @endif
                      </div>
                    </div>

                    <!-- <div class="col-sm-6">
                      <div class="form-group">
                        <label for="name">Meta Keyword<span class="text-danger"> *</span></label>
                        <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" value="{{$category->meta_keyword}}" maxlength="50">
                        <div id ="meta_keyword_error" class="error"></div>
                        @if($errors->has('meta_keyword'))
                          <div class="error">{{ $errors->first('meta_keyword') }}</div>
                        @endif
                      </div>
                    </div> -->

                
                  
             

                    
                  </div>


                  


                <div class="row">
                      <!-- <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name">Meta Description<span class="text-danger"> *</span></label>
                          <textarea type="text" name="meta_description" class="form-control textareaClass" id="meta_description">{{$category->meta_description}}</textarea>
                          <div id ="meta_description_error" class="error"></div>
                          @if($errors->has('meta_description'))
                            <div class="error">{{ $errors->first('meta_description') }}</div>
                          @endif
                        </div>
                      </div> -->

                      <div class="col-sm-6">
                        <div class="form-group">
                          
                          <label for="name">Status<span class="text-danger"> *</span></label>
                          <select name="status" id="status" class="form-control w-100 ml-0">
                            
                            <option value="Active" @if($category->status == 'Active') selected @endif()>Active</option>
                            <option value="Inactive" @if($category->status == 'Inactive') selected @endif()>Inactive</option>
                          </select>

                          <div id ="status_error" class="error"></div>
                          @if($errors->has('status'))
                            <div class="error">{{ $errors->first('status') }}</div>
                          @endif
                        </div>
                      </div>

                  </div>

                
                  
                </div>
                <!-- /INFORMATION FIELDS -->
                <hr/>
               
                <!-- Form Fields -->

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button id="submitButton" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>


<div class="modal fade" id="lodaerModal" tabindex="-1" role="dialog" aria-labelledby="lodaerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     
      <img src="{{url('/public/loading-buffering.gif')}}" style="width: 50px; height:50px;">
     
  </div>
</div>
@endsection

@section('css')
  <style>
    .information_fields { margin-bottom: 30px; }
    .address_fields { margin-top: 30px; }
  </style>
@stop

@section('js')
  <script>
    $(document).ready(function() {
      $( "input[name=contact_number]" ).focus(function() {
          $('input[name=country_code]').val($('.country-list .country.active').data('dial-code'));
       });
      $("#category_name").blur(function() {
        $.ajax({
          type:"POST",
          url:"{{route('check_category_name')}}",
          data: {
            category_name: $(this).val(),
            id : "{{$category_id}}"
          },
          success: function(result) {
            if(result) {
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
            required: true
          },
          // meta_keyword: {
          //   required: true,
          //   maxlength:50,
          //   minlength:2
          // },
          // meta_description: {
          //   required: true,
          //   maxlength:1000,
          //   minlength:20
          // },
          status: {
            required: true
          },
          
          
        },
        messages: {
          category_name: {
            required: "The Category Name field is required."
          },
          // meta_keyword : {
          //   required : "The Meta Keyword is required."
          // },
          // meta_description : {
          //   required : "The Meta Description is required."
          // },
          status : {
            required : "The Status is required."
          },
                    
        },
        submitHandler:function(form){
                $("#lodaerModal").modal("show");
                $("#submitButton").attr('disabled', "true");

                var fd = new FormData();
                var other_data = $('#addCategory').serializeArray();
                
                $.each(other_data, function(key, input) {
                  console.log("keyhhhh",key)
                  console.log("innnnnn",input)
                    fd.append(input.name, input.value);
                });

                let file = $("#category_image")[0].files;

                if(file){
                  fd.append('category_image', file[0]);
                }

                var data = fd;

                

                $.ajax({
                    url:"{{route('edit_category',$category_id)}}",
                    data: fd,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(res){
                        console.log(res);
                        //return false;

                        if(res.status == "true"){
                            
                            swal({
                                title: "Information",
                                text: res.message,
                                type: "success",
                                showCancelButton: false,
                            }, function(willDelete) {
                                window.location.href="{{route('category_list')}}";
                            });

                            
                        }else{
                            swal("Alert", res.message, "error");
                        }

                        setTimeout(() => {
                            $("#lodaerModal").modal("hide");
                            $("#submitButton").removeAttr('disabled');
                            $("#category_name").val("");
                        }, 500);

                        
                        
                        
                    },
                    error: function(data, textStatus, xhr) {
                        if(data.status == 422){
                        
                        } 
                        
                        
                        
                        swal("Alert", "Something went wrong. Please try again.", "error");

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
    $(document).ready(function(){
      $("#click_on_image").on("click",function(){
        $("#category_image").click();
      })


      $("#category_image").on("change", function(){
        let old_image = "{{$category->category_image}}";
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
              
              swal({
                title: "",
                text: "Image should be less than or equal to 5 MB.",
                type: "warning",
                showCancelButton: false,
              }, function(clickonOk) {
                if (clickonOk) {
                  swal.close();
                } 
              });
              
              $("#category_image").val("");
              $("#click_on_image").attr("src", old_image);
              return false;
            }else{
                var reader = new FileReader();
                reader.onload = function(e){
                  $("#category_image").attr("src", e.target.result);
                  $("#click_on_image").attr("src", e.target.result);
                }
            }
          
            reader.readAsDataURL(file);
            
          }else{

            swal({
              title: "",
              text: "Image should be .jpg, .jpeg or .png format file only.",
              type: "warning",
              showCancelButton: false,
            }, function(clickonOk) {
              if (clickonOk) {
                swal.close();
              } 
            });
            
            $("#category_image").val("");
            $("#click_on_image").attr("src", old_image);
            return false;
            
          }
        }
      })
    })
  </script>
 
@stop
