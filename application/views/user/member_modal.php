<!DOCTYPE html>
<html>
<head>
    <title>Member Details</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://appuals.com/wp-content/litespeed/localres/aHR0cHM6Ly9jb2RlLmpxdWVyeS5jb20vjquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>
<body>
    
    <?php if ($member): ?>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td><?php echo $member['id_member']; ?></td>
            </tr>
             <tr>
                <th>Nama Member</th>
                <td><?php echo $member['nama_member']; ?></td>
            </tr>
             <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $member['jenis_kelamin']; ?></td>
            </tr>
             <tr>
                <th>No HP</th>
                <td><?php echo $member['no_hp']; ?></td>
            </tr>
             <tr>
                <th>Email</th>
                <td><?php echo $member['email']; ?></td>
            </tr>
             <tr>
                <th>Jumlah Point</th>
                <td class="text-success"><?php echo $member['point'] . " Point"; ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p class="text-black">ID Member tidak terdaftar </a></p>
    <?php endif; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://appuals.com/wp-content/litespeed/localres/aHR0cHM6Ly9jb2RlLmpxdWVyeS5jb20vjquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>