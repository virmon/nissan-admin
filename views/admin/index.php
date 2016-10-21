<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

  <!-- datatable -->
  <link rel="stylesheet" type="text/css" href="../../assets/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.bootstrap.min.css">

  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="../../assets/css/virmon.css">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <img src="../../assets/images/nissan.jpg" id="img-nissan" />
    </div>
    <div class="col-md-10">
      <h3><b>ADMIN PORTAL</b></h3>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-3">
      <h4>NAVIGATION</h4><hr>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">DEALERS</a></li>
        <li><a href="#">PREPAID PMS</a></li>
        <li><a href="#">SETTINGS</a></li>
        <li><a href="#">REPORTS</a></li>
      </ul>
      <hr>
    </div>
    <div class="col-md-9">
      <table id="dealer-datatable" class="table table-stripped table-bordered table-hover"  cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>DEALER NAME</th>
            <th>EMAIL</th>
            <th>VALIDATED</th>
            <th>BOOKINGS TODAY</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <td>1</td>
            <td>NISSAN MANTRADE</td>
            <td>info@myemail.com</td>
            <td>YES</td>
            <td>5</td>
          </tr>
          <tr class="text-center">
            <td>2</td>
            <td>NISSAN MANTRADE</td>
            <td>info@myemail.com</td>
            <td>YES</td>
            <td>5</td>
          </tr>
          <tr class="text-center">
            <td>3</td>
            <td>NISSAN MANTRADE</td>
            <td>info@myemail.com</td>
            <td>YES</td>
            <td>5</td>
          </tr>
        </tbody>
      </table>

      <hr>

      <h4>ADD/EDIT DEALER</h4>
      </br>
      <form class="form-horizontal" action="" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">DEALER NAME:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="address">ADDRESS:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="address">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="number">CONTACT NUMBER:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="number">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="person">CONTACT PERSON:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="person">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">EMAIL ADDRESS:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-nissan"><b>SAVE</b> <span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </div>
      </form>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

  <!-- jquery -->
  <script src="../../assets/js/jquery.js"></script>

  <!-- bootstrap -->
  <script src="../../assets/js/bootstrap.min.js"></script>

  <!-- datatable -->
  <script src="../../assets/js/jquery.dataTables.min.js"></script>
  <script src="../../assets/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $("#dealer-datatable").dataTable({
        aLengthMenu: [
          [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
        ]
      });
    });
  </script>
</body>
</html>
