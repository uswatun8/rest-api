<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $this->session->flashdata('hasil'); ?>

    <div class="container">
        <h1>MATA KULIAH UNISBANK</h1>

        <div class="text-right">
            <a href="<?= base_url('client/add'); ?>"><button class="btn btn-primary">TAMBAH DATA</button></a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Kode Makul</th>
                        <th>Nama Makul</th>
                        <th>Jml.Sks</th>
                        <th>Prodi</th>
                        <th>--</th>
                    </tr>
                        <?php 
                        $no = 1;
                        foreach($data as $dt){ ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $dt->kdmk; ?></td>
                            <td><?= $dt->nmmk; ?></td>
                            <td><?= $dt->sks; ?></td>
                            <td><?= $dt->prodi; ?></td>
                            <td>
                                <a href="<?= base_url('client/edit/'.$dt->kdmk); ?>"><button class="btn btn-sm btn-info">edit</button></a>
                                <a href="<?= base_url('client/delete/'.$dt->kdmk); ?>"><button class="btn btn-sm btn-danger">delete</button></a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>