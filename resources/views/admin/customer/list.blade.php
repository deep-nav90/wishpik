@extends('admin.layout.layout')
@section('title','Wishpik')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer List</li>
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
              
                

              </div>
              <!-- /.card-header -->
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no</th>
                    <th>Name</th>
                    <th>Wish Date</th>
                    <th>Status</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                
                  <?php  $i=1;?>
                    @foreach($data as $customer_list)
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$customer_list->name}}</td>
                    <td>{{$customer_list->email}}</td>
                    <td>{{$customer_list->phone}}</td>
                    <td>{{$customer_list->account_type}}</td>
                    <!-- <td> <input id="{{$customer_list->id}}"  class="toggle-event" type="checkbox" {{ $customer_list->status == 'Active' ? 'checked' : '' }} data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"></div>
                    </td>
                    <td>
                      <a class="btn btn-primary" href="edit/{{$customer_list->id}}"><i class="fa-regular fa-pen-to-square"></i></a>
                     
                        <button type="button" id="{{$customer_list->id}}" class="btn btn-danger delete-button"><i class="fa-regular fa-trash-can"></i></button>
                        <a class="btn btn-success" href="view/{{$customer_list->id}}"><i class="fa-regular fa-eye"></i></a>
                    
                      </td> -->
                   
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
                url: "{{ route('admin.category_status')}}",
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
            text: "you want to delete this category?",
            icon: "warning",
            showCancelButton: true,
            background: "#fff",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                url: "{{ route('admin.delete_category')}}",
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
          // swal({
          //   title: "Alert",
          //   text: "Are you sure you want to delete this category?",
          //   type: "warning",
          //   showCancelButton: true,
          // }, function(willDelete) {
          //   if (willDelete) {
          //     $.ajax({
          //       url: "{{ route('admin.delete_category')}}",
          //       type: 'post',
          //       data: {
          //         id: id
          //       },
          //       dataType: "JSON",
          //       headers: {
          //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          //       },
          //       success: function(response) {
          //         if(response.success == 1) {
          //           window.location.reload();
          //         }
          //         else {
          //           console.log("FALSE");
          //           setTimeout(() => {
          //           alert("Something went wrong! Please try again.");
          //           }, 500);
          //         }
          //       }
          //     });
          //   } 
          // });
        });

</script>
@endsection()
@section('js')

