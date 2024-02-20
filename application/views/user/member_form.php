<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <form id="member_form">
        <label for="member_id">ID Member:</label>
        <input type="text" name="member_id" id="member_id" required>
        <button type="submit" id="btn_submit">Submit</button>
    </form>

    <div class="modal fade" id="member_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Member Details</h4>
                </div>
                <div class="modal-body" id="member_details">
                    <!-- Detail member akan ditampilkan di sini -->
                </div>
            </div>
        </div>
    </div>

 
<script>
$(document).ready(function() {
  // Mengirim form menggunakan AJAX
  $('#member_form').on('submit', function(e) {
    e.preventDefault();
    var memberID = $('#member_id').val();

    $.ajax({
      type: 'POST',
      url: '<?php echo base_url('User_home/getMemberDetails'); ?>',
      data: { member_id: memberID },
      success: function(response) {
        // Memasukkan detail member ke dalam modal
        $('#member_details').html(response);
        $('#member_modal').modal('show');
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  });
});
</script>
</body>
</html>
