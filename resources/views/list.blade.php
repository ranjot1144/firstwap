<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>

<div class="container">
  <h2><center> Country List </center></h2>
  <table
      data-toggle="table"
      data-pagination="true"
      data-search="true"
      data-search-align="left"
  id="dtBasicExample" class="table table-hover table-sm" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>S No</th>
        <th>Location Code</th>
        <th>Size</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
      <?php if(isset($apiData)) {
        $i=1;
              foreach($apiData as $list) {
          ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $list['code']; ?></td>
        <td><?php echo $list['size']; ?></td>
        <td><?php echo $list['location']; ?></td>
      </tr>
        <?php $i++;
      }
          } ?>
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "pageLength": 5,
    "lengthMenu": [[5, 10, 15], [5, 10, 15]],
    "searching": true, // false to disable search (or any other option)
    "paging": true, // false to disable pagination (or any other option)
    "aoColumnDefs": [
             { "bSortable": false, "aTargets": [ 0,1,3 ] }
           ]
  });

});

</script>

</body>
</html>
