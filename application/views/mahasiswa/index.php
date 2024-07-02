<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .tes{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
       }
    </style>
</head>
<body>
<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash')  ?>"></div>
    <?php IF ( $this->session->flashdata('flash') ) : ?>

    <!-- <div class="row mt-3"> 
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data mahasiswa <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        </div>
    </div> -->

    <?php endif; ?>
   
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data mahasiswa..." name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>


    
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if( empty($mahasiswa) ) : ?>
                    <div class="alert alert-danger" role="alert">
              data mahasiswa tidak ditemukan.
                    </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $mahasiswa as $mhs ) : ?>

                        <div class="card">
                            <div class="card-body tes">
                               <div> <?= $mhs['nama']; ?></div>
                                <div>
                                <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>"class="badge rounded-pill text-bg-primary ">detail</a>
                                <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>"class="badge rounded-pill text-bg-success ">ubah</a>
                                <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>"  class="badge rounded-pill text-bg-danger tombol-hapus">hapus</a>
                                </div>
                            </div>
                            </div>
                <?php endforeach; ?>
            </ul>
            </div>
        </div>
    </div>

</div>

</body>
</html>