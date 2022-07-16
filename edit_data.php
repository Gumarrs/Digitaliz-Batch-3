<?php
include "koneksi.php";
$id = $_GET['id'];
$ambilData = mysqli_query($koneksidb, "SELECT * FROM campaign WHERE id='$id'");
$data = mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="NIM">Project Name</label>
                        <input type="text" name="project_name" value="<?php echo $data['project_name'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama Project">
                    </div>

                    <div class="form-group">
                        <label for="Nama">Client</label>
                        <input type="text" name="client" value="<?php echo $data['client'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama Client">
                    </div>

                    <div class="form-group">
                        <label for="Jurusan">Project Leader</label>
                        <input type="text" name="project_leader" value="<?php echo $data['project_leader'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama Project Leader">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Email Project Leader</label>
                        <input type="text" name="email" value="<?php echo $data['email'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama Project Leader">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Start Date</label>
                        <input type="date" name="created_at" value="<?php echo $data['created_at'] ?>" class="form-control col-md-9">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">End Date </label>
                        <input type="date" name="end_at" value="<?php echo $data['end_at'] ?>" class="form-control col-md-9">
                    </div>
                    <div class="form-group">
                        <label for="Asal">Progress</label>
                        <input type="number" name="progress" value="<?php echo $data['progress'] ?>" class="form-control col-md-9" placeholder="Masukkan Progres">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>

            </div>
        </div>
    </div>


</body>

</html>

<?php
if (isset($_POST['simpan'])) {
    $project_name       = $_POST['project_name'];
    $client       = $_POST['client'];
    $project_leader     = $_POST['project_leader'];
    $email     = $_POST['email'];
    $created_at       = $_POST['created_at'];
    $end_at       = $_POST['end_at'];
    $progress       = $_POST['progress'];

    mysqli_query($koneksidb, "UPDATE campaign 
            SET project_name='$project_name', client='$client', project_leader='$project_leader', email='$email', created_at='$created_at', end_at='$end_at',progress='$progress'
            WHERE id='$id'") or die(mysqli_error($koneksidb));

    echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang DiUpdate.... </h5></div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
}
?>