<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Rekod Pekerja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        function setDeleteUrl(url) {
            $('#deleteModal').modal('show');
            $('#deleteConfirmBtn').attr('href', url);
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Senarai Pekerja</h2>
        <a href="tambah_pekerja.php" class="btn btn-primary mb-3">Add</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IC</th>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Jantina</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM pekerja";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"]. "</td>
                                <td>" . $row["ic"]. "</td>
                                <td>" . $row["nama"]. "</td>
                                <td>" . $row["hp"]. "</td>
                                <td>" . $row["jantina"]. "</td>
                                <td>
                                    <a href='kemaskini_pekerja.php?id=" . $row["id"]. "' class='btn btn-warning btn-sm'>Kemaskini</a> 
                                    <a href='#' onclick='setDeleteUrl(\"padam_pekerja.php?id=" . $row["id"]. "\")' class='btn btn-danger btn-sm'>Padam</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tiada rekod</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Padam Rekod</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Adakah anda pasti untuk menghapuskan rekod ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="#" id="deleteConfirmBtn" class="btn btn-danger">Padam</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>