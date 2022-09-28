<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Scripting</title>
   

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../datatables/buttons.dataTables.css"  />	
<link rel="stylesheet" href="../datatables/jquery.dataTables.min.css" />
 <!--Custom styles for this page -->
 
<link href="../datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="../datatables/jquery-3.3.1.js"></script>
<script src="../datatables/buttons.bootstrap4.min.js"></script>
<script src="../datatables/jquery.dataTables.min.js"></script>
<script src="../datatables/jszip.min.js"></script>
<script src="../datatables/dataTables.buttons.min.js"></script>
<script src="../datatables/buttons.html5.min.js"></script>

    <style>
        .container{
            padding:20px;
        }
    </style>

<script>
$(document).ready(function(){
    $('#userDataList').DataTable({
        "processing": true,
        "serverSide": true,
        dom: 'lBfrtip',
   buttons: [
    'excel', 'csv'
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],

        "ajax": "fetchData.php"
    });
});
</script>

</head>
<body>
 <div class="container">   
<table id="userDataList" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Mobile</th>
            <th>State</th>
            <th>District</th>
            <th>SubDistrict</th>
            <th>Category</th>
           <!-- <th>Created</th>
            <th>Status</th>-->
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Mobile</th>
            <th>State</th>
            <th>District</th>
            <th>SubDistrict</th>
            <th>Category</th>
            <!-- <th>Created</th>
            <th>Status</th>-->
        </tr>
    </tfoot>
</table>
    </div>
 
</body>
</html>