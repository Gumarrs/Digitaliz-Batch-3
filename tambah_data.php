<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud_Tugas</title>
</head>

<body>
    <h1> Tambah Data</h1>
    <div class="container">
        <form class="row g-3" method="POST">
            <?php
            include "koneksi.php";

            if (isset($_POST["submit"])) {
                $id = $_POST["id"];
                $project_name = $_POST["project_name"];
                $client = $_POST["client"];
                $project_leader = $_POST["project_leader"];
                $email = $_POST["email"];
                $created_at = $_POST["created_at"];
                $end_at = $_POST["end_at"];
                $progress = $_POST["progress"];

                $query = "INSERT INTO campaign VALUES ('','$project_name','$client','$project_leader','$email','$created_at','$end_at','$progress')";
                mysqli_query($koneksidb, $query);
                if ($query) {
                    echo "
<script>
alert('Data Berhasil Di Tambah');
document.location.href = 'index.php';
</script>
  ";
                }
            }
            ?>
            <div class="col-md-6">
                <label class="form-label">Project Name</label>
                <input type="text" name="project_name" class="form-control" placeholder="Masukkan Nama Project" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Client</label>
                <input type="text" name="client" class="form-control" placeholder="Masukkan Nama Client" required>
            </div>

            <div class="col-md-2">
                <label class="form-label">Project Leader</label>
                <input type="text" name="project_leader" class="form-control" placeholder="Masukkan Nama Project Leader" required>
            </div>
            <div class="col-md-2">
                <label class="form-label">Email Project Leader</label>
                <input type="text" name="email" class="form-control" placeholder="Masukkan Email Project Leader" required>
            </div>
            <div class="col-md-3">
                <label class="form-label">Start Date</label>
                <input type="date" name="created_at" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label class="form-label">End Date</label>
                <input type="date" name="end_at" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label class="form-label">Progess</label>
                <input type="number" name="progress" class="form-control" placeholder="Masukkan Progres" required>
            </div>
            <div class=" col-12">
                <input type="submit" name="submit" class="btn btn-primary" value="Tambah Data">
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>