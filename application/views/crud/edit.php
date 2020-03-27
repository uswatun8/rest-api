<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT MATAKULIAH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class="container">
        <h2>Tambah Mata Kuliah</h2>
        <form action="<?= base_url('client/update'); ?>" method="POST">
            <table class="table">
                <tr>
                    <th width="200px">Kode Mata Kuliah</th>
                    <th><input type="text" name="kdmk" class="form-control" value="<?= $data->kdmk; ?>"></th>
                </tr>
                <tr>
                    <th width="200px">Nama Mata Kuliah</th>
                    <th><input type="text" name="nmmk" class="form-control" value="<?= $data->nmmk; ?>"></th>
                </tr>
                <tr>
                    <th width="200px">Jumlah SKS</th>
                    <th><input type="text" name="sks" class="form-control" value="<?= $data->sks; ?>"></th>
                </tr>
                <tr>
                    <th width="200px">Kode Mata Kuliah</th>
                    <th><input type="text" name="prodi" class="form-control" value="<?= $data->prodi; ?>"></th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                        <a href="<?= base_url('client'); ?>"><button type="button" class="btn btn-info">KEMBALI</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>