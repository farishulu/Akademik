<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>

<div class="card card-custom mb-4">
    <div class="card-header card-header-custom">
        <h4 class="mb-0">Data Mahasiswa</h4>
    </div>
    <div style="padding-top: 20px; display: flex; justify-content: right; padding-right: 20px;">
        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#createModal">
            Tambah data
        </button>
    </div>
    <div class="card-body">
        <table class="table table-custom table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama mahasiswa</th>
                    <th>Tanggal lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $mhs['nim'] ?></td>
                        <td><?= $mhs['nama_mahasiswa'] ?></td>
                        <td><?= $mhs['tanggal_lahir'] ?></td>
                        <td><?= $mhs['jenis_kelamin'] ?></td>
                        <td><?= $mhs['program_studi'] ?></td>
                        <td><?= $mhs['alamat'] ?></td>
                        <td>
                            <button type="button" class="btn btn-secondary btn-sm">
                                <a href="<?= base_url('mahasiswa/edit/' . $mhs['nim']) ?>" style="color: white; font-weight: bold;">Edit</a></button>
                            <form action="<?= base_url('mahasiswa/delete/' . $mhs['nim']) ?>" method="post" style="display:inline;">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
                

            </tbody>
        </table>
    </div>
</div>

<?= $this->include('mahasiswa/create') ?>

<?= $this->endSection() ?>