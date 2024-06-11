@extends('admin.layout.layout')
@section('title','Wishpik')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Templates</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Template</a></li>
              <li class="breadcrumb-item active">Template Form</li>
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
                <h3 class="card-title">View Template</h3>
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
              <form id="addProduct" method="POST" enctype='multipart/form-data'>
                @csrf
                <input type="hidden" name="click_on_file_count" id="click_on_file_count">
              
                <input type="hidden" name="image_count" value="{{$image_count}}" id="image_count">
                <input type="hidden" name="click_on_cross_count" id="click_on_cross_count">
                <input type="hidden" name="upload_file_count" id="upload_file_count">

                <input type="hidden" name="acceptable[]" id="acceptable">
                <input type="hidden" name="non_acceptable[]" id="non_acceptable">

                <input type="hidden" name="file_deleted" id="file_deleted">
                <div class="files_container"> </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                   <select name="category_id" id="category_id" class="form-control w-100 ml-0">
                            
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option disabled class="optionCategory" full_data="{{$category}}" value="{{$category->id}}" @if($category->id == $product_find->category_id) selected @endif()>{{$category->category_name}}</option>
                            @endforeach()
                            
                          </select>

                          <div id ="category_id_error" class="error"></div>
                          @if($errors->has('category_id'))
                            <div class="error">{{ $errors->first('category_id') }}</div>
                          @endif
                  </div>
                  <div id ="category_name_error" class="error"></div>
                  @if($errors->has('category_name'))
                          <div class="error">{{ $errors->first('category_name') }}</div>
                        @endif

              <div class="form-group">
              <table class="table table-bordered" id="dynamicTable">  
                    <tr>
                        <th>Wish</th>
                        
                    </tr>
                    <!-- <tr class="wishlength">  
                        <td><input type="text" name="wishtext[0][wish]" placeholder="Enter your Wish" class="form-control wishtext" /></td>  
                    
                       
                    </tr>  -->
                    <?php $m=0;?> 
                    @foreach($product_find->productWishes as $productwish)
                    <tr  class="wishlength">  
                        <td><input type="text" name="wishtext[{{$m}}][wish]" value="{{$productwish->product_wish}}" placeholder="Enter your Wish" class="form-control wishtext" /></td>  
                       
                        
                    </tr>  
                    <?php $m++;?>
                    @endforeach
                </table>
              </div>
              <div class="upload_align">
                <div class="user_img mr-2" title="Click to upload images" style="
                  position: relative; margin-bottom: 16px;">
                  
                </div>
                @foreach($product_find->productImages as $productImage)
                <div class="user_img mr-2" ui="image" title="Upload Image/Video/Audio" style="position: relative; margin-bottom: 16px;">
                    <img class="click_upload img_upload" src="{{$productImage->product_image}}" alt="woman">
                
                    <div class="add_img cross_icon">
                       
                    </div>
                    <div class="custom_check_wrap">
                        <div class="custom-check">
                       
                        <span></span>       
                        </div>
                        
                    </div>
                </div>
                @endforeach()
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
  <script type="text/javascript">
 
   
      
   $("#add").click(function(){
    $('.wishlength').length
    var i =$('.wishlength').length;
    console.log('iiiiiiiiiiiii',i)
  
       $("#dynamicTable").append('<tr class="wishlength"><td><input type="text" name="wishtext['+i+'][wish]" placeholder="Enter your Wish" class="form-control wishtext" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
   });
  
   $(document).on('click', '.remove-tr', function(){  
        $(this).parents('tr').remove();
   });  
  
</script>
 

  <script>
$(function () {
  bsCustomFileInput.init();
});

</script>

<script type="text/javascript">
$(document).ready(function(){

    enableClickClasses();

    function enableClickClasses(){

    $(".file_upload_click").click(function(){

        let __count_click = $("#click_on_file_count").val();



        __count = __count_click == "" ? 0 : parseInt(__count_click) + 1;

        $("#click_on_file_count").val(__count);

        
        /*Make Html Input FIles*/

        $(".files_container").append(`<input type='file' style="display:none" id="files_`+__count+`" class ="files appendFiles" name="files[`+__count+`][]" multiple>`);


        $("#files_"+__count).click();



        $("#files_"+__count).on("change",function(event){

        var files = event.target.files;

        let error = "false";

            let image_count = 0;
            let video_count = 0;
            let audio_count = 0;

        $.each(files, function (i) {
            
            let file = event.target.files[i];


            let size = event.target.files[i].size;



                    if(file.type == "image/jpeg" || file.type == "image/jpg" || file.type == "image/png"){

                    if(size > 5242880){
                    
                        $("#alertModel").modal("show");
                        $("#alert_message").text("Image should not be greater than 5 MB.");
                        $("#alertModel").unbind("click");

                        $("#files_"+__count).remove();  
                        error = "true";
                        return false;
                        }

                        image_count++;
                    
                }else{
                    

                    $("#alertModel").modal("show");
                    $("#alert_message").text("Please select image type of .jpg, .jpeg or .png format only.");
                    $("#alertModel").unbind("click");


                    $("#files_"+__count).remove();  
                    error =  "true";
                    return false;

                }





        });

            // console.log(image_count);

            if(error == "false"){

            let already_upload_img_count = $("#image_count").val();

            let total_img_count = parseInt(already_upload_img_count) + image_count;

            


            let total_file_count = total_img_count;

            if(total_file_count > 10){
                
                $("#alertModel").modal("show");
                $("#alert_message").text("Maximum 10 images is allowed.");
                $("#alertModel").unbind("click");


                $("#files_"+__count).remove();  
                error =  "true";
                return false;
            }
            


            if(total_img_count > 10){

                $("#alertModel").modal("show");
                $("#alert_message").text("Maximum 10 images is allowed.");
                $("#alertModel").unbind("click");


                $("#files_"+__count).remove();  
                error =  "true";
                return false;
            }


            


            }


        if(error == "false"){

        $.each(files, function (i) {
            
            let file = event.target.files[i];


            if(file){

                    if(file.type == "image/jpeg" || file.type == "image/jpg" || file.type == "image/png"){

                    var reader = new FileReader();
                    
                    reader.onload = function(e) {
                        //$('#profile_picture').attr('src', e.target.result);
                        
                        let upload_file_count_val = $("#upload_file_count").val();

                        let __upload_file_count = upload_file_count_val == "" ? 1 : parseInt(upload_file_count_val) + 1;

                        $("#upload_file_count").val(__upload_file_count);


                        let acceptable_file_arr = __count+'_'+i;

                        
                        let acceptable_val = $("#acceptable").val();

                        let push_val_acceptable = acceptable_val == "" ? acceptable_file_arr : acceptable_val+','+acceptable_file_arr;

            

                        $("#acceptable").val(push_val_acceptable);


                        let image_count_val = $("#image_count").val();

                        let __count_image = image_count_val == "" ? 1 : parseInt(image_count_val) + 1;

                        $("#image_count").val(__count_image);



                        $(".upload_align").append(`<div class="user_img mr-2" ui="image" style="position: relative; margin-bottom: 16px;">
                <img class="click_upload img_upload" id="accept_`+acceptable_file_arr+`" src="`+e.target.result+`" alt="woman">
                
                <div class="add_img cross_icon">
                    <img class="click_upload plus_icon cross_icon" ui="image" id="cross_`+acceptable_file_arr+`" src="{{url('/cross.png')}}" alt="cross">
                </div>

                <div class="custom_check_wrap">
                    <div class="custom-check">
                    <input type="checkbox" data_id="`+acceptable_file_arr+`" class="featured_checkbox_new chec" type_of_check="new" name="new_checkbox" value="`+acceptable_file_arr+`">
                    <span></span>       
                    </div>
                    
                </div>


                
                </div>`);




                        //cross function

                        $("#cross_"+acceptable_file_arr).on("click",function(){




                let check_type = $(this).attr("ui");

                if(check_type == "image"){
                    
                            let parent_div = $(this).parent().parent();

                            
                    let image_count_val = $("#image_count").val();

                    let sub_image_count_val = image_count_val - 1;

                    $("#image_count").val(sub_image_count_val);


                    let non_acceptable = $("#non_acceptable").val();

                    let acceptable = $(this).attr('id');

                    acceptable = acceptable.replace("cross_", "");

                            let push_val_non_acceptable = non_acceptable == "" ? acceptable : non_acceptable+','+acceptable;

                

                            $("#non_acceptable").val(push_val_non_acceptable);


                            let cross_count_val = $("#click_on_cross_count").val();


                            let cross_count = cross_count_val == "" ? 1 : parseInt(cross_count_val) + 1;

                            $("#click_on_cross_count").val(cross_count);

                            parent_div.remove();



                }


                        });

                        //end cross function




                    }
            
                    reader.readAsDataURL(file);
                    
                    }

                }



        });
        }


        

        });

    });

    }

})
</script>
<script type="text/javascript">
  $(document).ready(function(){

    $(".cross_icon_old").on("click",function(){
      let del_id = $(this).attr("del_id");
      let type = $(this).attr("ui");

      let deleted_files = $("#file_deleted").val();

      let push_val_del_file = deleted_files == "" ? del_id : deleted_files+','+del_id;

      $("#file_deleted").val(push_val_del_file);

      let parent_find_div = "";
      if(type == "image"){

        parent_find_div = $(this).parent().parent();

        let img_count = $("#image_count").val();

        let sub_1 = img_count - 1;

        $("#image_count").val(sub_1);

      }

      parent_find_div.remove();
    });
  });
</script>
<script>
    $(document).ready(function() {

      $(document).on('change','#category_id',function(){
        console.log('mmmm');
        var cat_id=$(this).val();
        $.ajax({
          type:"Get",
          url:"{{route('admin.categoryExist')}}",
          
          data: {
           
            cat_id: $(this).val()
          },
          success: function(result) {
            if(result) {
              console.log("resultdata",result)
              $("#submitButton").attr('disabled', "false");
              $("#category_name_error").html("This category is already exists.");
            }
            else {
              $("#submitButton").attr('disabled', "true");
              $("#category_name_error").html("");
            }
          }
        });
      })
    
      var addProduct = $( "#addProduct" );
      addProduct.validate({
        ignore: [],
        debug: false,
        rules: {
          category_id: {
            required: true
          },
        },
        messages: {
          category_id: {
            required: "Please seletc category."
          },
       },
        submitHandler:function(form){
            var err=0
            $(".wishtext").each(function() {
                  var chkwish=  $(this).val();
                  if($(this).val()=="")
                  {
                    err++
                    toastr.error('Please Enter Wish')
                    
                  }
                  
                });
                if(err !=0)
                {
                    return false;
                }
                let image_count = $("#image_count").val();
                if(image_count == "" || image_count == 0){
                   toastr.error('Please upload images')
                 // swal("Alert", "Please upload images.", "error");
                  return false;
                }
               
                
                $("#submitButton").attr('disabled', "true");
                $("#lodaerModal").modal("show");
                $("#lodaerModal").unbind("click");
                  
                form.submit();
                //form.submit();
            },
        onkeyup: false,
        onblur: true
      });
    });
  </script>

  
@endsection()
@section('js')