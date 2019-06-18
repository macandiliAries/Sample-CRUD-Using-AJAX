<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sample HTML</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- Datatables -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.css">


   <style type="text/css">
    input[type=date]::-webkit-inner-spin-button,
    input[type=date]::-webkit-outer-spin-button {
      -webkit-appearance: none;
    }
  </style>


</head>

<body>  

  <div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <p class="h2">List of Students | I Love You Angelika Aubrey Arbiol</p>
    </div>
    <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
      <div align="right">
        <button type="button" id="addStudentBtn" data-toggle="modal" data-target="#addStudentModal" class="btn btn-info btn-lg">Add a Student</button>
        <br><br>
      </div>
      <table id="tbl_students" style="width:100%" class="table table-striped table-bordered table-hover">
       <thead>
        <tr>
          <th style="white-space:nowrap;">Student ID</th>
          <th style="white-space:nowrap;">First Name</th>
          <th style="white-space:nowrap;">Middle Name</th>
          <th style="white-space:nowrap;">Last Name</th>
          <th style="white-space:nowrap;">Gender</th>
          <th style="white-space:nowrap;">Grade</th>
          <th style="white-space:nowrap;">Actions</th> <!-- Edit -->
        </tr>
      </thead>
    </table>
  </div>


  <div class="container">
    <div class="modal fade" id="editStudentModal" role="dialog">
      <div class="modal-dialog vertical-align-center">
        <div class="modal-content">
          <div class="modal-header" style="padding:10px 10px;">
            <h5 align="center"><span class="glyphicon glyphicon-plane"></span>Edit Student Details</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <form method="post" id="editStudentForm">
            <div class="modal-body" style="padding:30px 50px;">
              <div class="form-group">
                <label for="firstName"><span class="glyphicon glyphicon-user"></span> First Name</label>
                <input type="text" class="form-control firstName" id="firstName" name="firstName" placeholder="First Name" autofocus required maxlength="25">
              </div>
              <div class="form-group">
                <label for="middleName"><span class="glyphicon glyphicon-user"></span> Middle Name</label>
                <input type="text" class="form-control middleName" id="middleName" name="middleName" placeholder="Middle Name" maxlength="25">
              </div>
              <div class="form-group">
                <label for="lastName"><span class="glyphicon glyphicon-user"></span> Last Name</label>
                <input type="text" class="form-control lastName" id="lastName" name="lastName" placeholder="Last Name" required maxlength="25">
              </div>
              <div class="form-group">
                <label for="gender"><span class="glyphicon glyphicon-envelope"></span> Gender</label>
                <input type="text" class="form-control gender" id="gender" name="gender" placeholder="Gender" required maxlength="50">
              </div>
              <div class="form-group">
                <label for="grade"><span class="glyphicon glyphicon-phone"></span> Grade</label>
                <input type="text" class="form-control grade" id="grade" name="grade" placeholder="Grade" required maxlength="13">
              </div>
              <div class="form-row">
                <input type="text" name="student_ID" class="student_ID" id="student_ID" />
                <div class="col">
                  <input type="submit" name="updateStudent" id="updateStudent" class="btn btn-success form-control updateStudent" value="Update" />
                </div>
                <div class="col">
                  <button type="button" class="btn btn-primary form-control" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="modal fade" id="addStudentModal" role="dialog">
      <div class="modal-dialog vertical-align-center">
        <div class="modal-content">
          <div class="modal-header" style="padding:10px 10px;">
            <h5 align="center"><span class="glyphicon glyphicon-plane"></span>Add Student</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <form method="post" id="addStudentForm">
            <div class="modal-body" style="padding:30px 50px;">
              <div class="form-group">
                <label for="firstName"><span class="glyphicon glyphicon-user"></span> First Name</label>
                <input type="text" class="form-control firstName" id="firstName" name="firstName" placeholder="First Name" autofocus required maxlength="25">
              </div>
              <div class="form-group">
                <label for="middleName"><span class="glyphicon glyphicon-user"></span> Middle Name</label>
                <input type="text" class="form-control middleName" id="middleName" name="middleName" placeholder="Middle Name" maxlength="25">
              </div>
              <div class="form-group">
                <label for="lastName"><span class="glyphicon glyphicon-user"></span> Last Name</label>
                <input type="text" class="form-control lastName" id="lastName" name="lastName" placeholder="Last Name" required maxlength="25">
              </div>
              <div class="form-group">
                <label for="gender"><span class="glyphicon glyphicon-envelope"></span> Gender</label>
                <input type="text" class="form-control gender" id="gender" name="gender" placeholder="Gender" required maxlength="50">
              </div>
              <div class="form-group">
                <label for="grade"><span class="glyphicon glyphicon-phone"></span> Grade</label>
                <input type="text" class="form-control grade" id="grade" name="grade" placeholder="Grade" required maxlength="13">
              </div>
              <div class="form-row">
                <div class="col">
                  <input type="submit" name="addStudent" id="addStudent" class="btn btn-success form-control addStudent" value="Update" />
                </div>
                <div class="col">
                  <button type="button" class="btn btn-primary form-control" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script
src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.js"></script>

<!-- Datatables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

</html>

<script>

  $(document).ready(function() {

    $(document).on('click', '#addStudentBtn', function() {
      $('#addStudentForm')[0].reset();
    })

    var dataTable1 = $('#tbl_students').DataTable({
      "responsive":true,
      "processing":true,
      "serverSide":true,
      "destroy":true,
      "order" : [],
      "ajax":{
       url:"fetchStudents.php",
       type:"POST"
     },
/*     "columnDefs":[
     {
      "targets":[0,1,2,3],
      "visible":false
    },
    {
      'targets': [8],
      "orderable": false
    }
    ],*/
    "language": {
      "search": "Search Student Name:"
    }
  });

    var student_ID;


    $(document).on('click', '.addStudent', function(e) {
      e.preventDefault();

      var amoroForm = new FormData($('#addStudentForm')[0]);

      $.ajax({
        url:"addStudent.php",
        method:'POST',
        data: amoroForm,
        contentType:false,
        processData:false,
        success:function(data)
        {
          if(data == 'Success!') {
            alert(data);
            $('#addStudentForm')[0].reset();
            $('#addStudentModal').modal('hide');
            dataTable1.ajax.reload();
          }
          else {
            alert(data);
          }
        }
      });
    })


    $(document).on('click', '.editStudent', function() {
      $('#editStudentModal').modal('show');
      student_ID = $(this).attr('id');
      $('.student_ID').val(student_ID);

      $.ajax({
        url:"editStudent.php", //fileName of the request
        method:"POST",
        data:{student_ID:student_ID},
        dataType:"json",
        success:function(data)
        {
          $('.firstName').val(data.firstName);
          $('.middleName').val(data.middleName);
          $('.lastName').val(data.lastName);
          $('.gender').val(data.gender);
          $('.grade').val(data.grade);
        }
      });
    })


    $(document).on('click', '.updateStudent', function(e) {
      e.preventDefault();

      var amoroForm = new FormData($('#editStudentForm')[0]);

      $.ajax({
        url:"updateStudent.php",
        method:'POST',
        data: amoroForm,
        contentType:false,
        processData:false,
        success:function(data)
        {
          if(data == 'Success!') {
            alert(data);
            $('#editStudentForm')[0].reset();
            $('#editStudentModal').modal('hide');
            dataTable1.ajax.reload();
          }
          else {
            alert(data);
          }
        }
      });
    })


    $(document).on('click', '.deleteStudent', function(e) {
      e.preventDefault();
      student_ID = $(this).attr('id');

      $.ajax({
        url:"deleteStudent.php", //fileName of the request
        method:"POST",
        data:{student_ID:student_ID},
        success:function(data)
        {
         alert(data);
         dataTable1.ajax.reload()
       }
     });
    })


  });

</script>