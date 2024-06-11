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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Templates</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                    <!-- <h3 class="card-title">DataTable with default features</h3> -->
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('admin.product.add') }}" class="btn btn-primary">Add Template</a>
                    </div>
                </div>
                

              </div>
              <!-- /.card-header -->
          
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no</th>
                    <th>Category Name</th>
                    <th>Total Wish</th>
                    <th>Total Template</th>
                    <th>Status</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                
                  <?php  $i=1;?>
                    @foreach($data as $product_list)
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$product_list->category_name}}</td>
                    <td>{{$product_list->wish_count}}</td>
                    <td>{{$product_list->image_count}}</td>
                    <td> <input id="{{$product_list->id}}"  class="toggle-event" type="checkbox" {{ $product_list->status == 1 ? 'checked' : '' }} data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"></div>
                    </td>
                    <td>
                      <a class="btn btn-primary" href="product/edit/{{$product_list->id}}"><i class="fa-regular fa-pen-to-square"></i></a>
                     
                        <button type="button" id="{{$product_list->id}}" class="btn btn-danger delete-button"><i class="fa-regular fa-trash-can"></i></button>
                        <a class="btn btn-success" href="product/view/{{$product_list->id}}"><i class="fa-regular fa-eye"></i></a>
                    
                      </td>
                   
                  </tr>
                  <?php $i++;?>
                  @endforeach
                  
                  </tbody>
               
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
  
    <!-- /.content -->
  </div>
 
  <script>
  $(function() {
    $('.toggle-event').change(function() {
     $.ajax({
                url: "{{ route('admin.product_status')}}",
                type: 'get',
                data: {
                  status: $(this).prop('checked'),
                  id:this.id
                },
                
                success: function(response) {
                  console.log('response',response);
                  toastr.success(response);
                }
              });
     
    })
  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(document).ready(function(){
    $(document).on('click','.editcategory',function(){
      var id =this.id;

      console.log("cate",id)
    })
  })
  $(document).on("click", '.delete-button',function(e) {
          var id = this.id
          
            console.log(id);
            Swal.fire({

            title: "Are you sure?",
            text: "you want to delete this template?",
            icon: "warning",
            showCancelButton: true,
            background: "#fff",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                url: "{{ route('admin.delete_product')}}",
                type: 'post',
                data: {
                  id: id,
                  "_token": "{{ csrf_token() }}",
                },
                dataType: "JSON",
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                  if(response.success == 1) {
                    toastr.success("Template deleted successfully");
                    window.location.reload();
                  }
                  else {
                    console.log("FALSE");
                    setTimeout(() => {
                    alert("Something went wrong! Please try again.");
                    }, 500);
                  }
                }
              });

              // Swal.fire({
              //   title: "Deleted!",
              //   text: "Your file has been deleted.",
              //   icon: "success"
              // });
            }
          });
          
        });

</script>
@endsection()
@section('js')

