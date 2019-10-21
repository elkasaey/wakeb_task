<!DOCTYPE html>

<html lang="en">
<head>
<title>wakeb-task</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
               <h2>wakeb-task</h2>
               <a  href="{{ route('Dashboard.create')}}" data-toggle="tooltip"  data-original-title="add" class="add btn btn-success " style="margin: 19px;">
                  New
              </a>
               <a href="#" id="edit"  data-toggle="tooltip"   data-original-title="Edit" class="edit btn btn-success edit-product" style="margin: 19px;">
                  Edit
              </a>
              <form action="#" method="post" id="delete" data-toggle="tooltip" data-original-title="Delete"class="delete btn" data-original-title="delete">
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
                  <button data-toggle="tooltip"  class="delete btn btn-danger" type="submit">Delete</button>
              </form>

            <table class="table table-bordered laravel_datatable" id="laravel_datatable">
               <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Screen Name</th>
                    <th>Content</th>
                    <th>Description</th>
                    <th>User Name</th>
                    <th>Date</th>
                    <th>Statuse</th>
                  </tr>
               </thead>
            </table>
         </div>
   <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('datatable/getdata') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'image', name: 'image' },
                    { data: 'screen_name', name: 'screen_name' },
                    { data: 'content', name: 'content' },
                    { data: 'description', name: 'description' },
                    { data: 'user_name', name: 'user_name' },
                    { data: 'date', name: 'date' },
                    { data: 'statuse', name: 'statuse' }
                 ]
        });
     });

    $('#laravel_datatable').on('click', 'tr', function () {
        var id = $('td', this).eq(0).text();
         document.getElementById("delete").action='http://127.0.0.1:8000/Dashboard/'+id;
         document.getElementById("edit").href='http://127.0.0.1:8000/Dashboard/'+id+'/edit';
    } );
  </script>
   </body>
</html>
