<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container ">

    <!-- Outer Row -->
    <div class="row justify-content-center m-auto">

        <div class=" col-6">

            <div class=" card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Daftar Disini</h1>
                                </div>
                                <form class="user" action="save" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nama'))?'is-invalid': ''; ?>" id="nama" name="nama" placeholder="Masukkan Nama" autofocus>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control form-control-user" id="kelas" name="kelas" placeholder="Masukkan Kelas"> -->
                                        <select name="kelas" id="kelas" class="form-control" style="border-radius: 100px;">
                                            <option value="X TKJ 1">X TKJ 1</option>
                                            <option value="X TKJ 2">X TKJ 2</option>
                                            <option value="X TKJ 3">X TKJ 3</option>
                                            <option value="X PBS 1">X PBS 1</option>
                                            <option value="X PBS 2">X PBS 2</option>
                                            <option value="X PBS 3">X PBS 3</option>
                                            <option value="X TBSM 1">X TBSM 1</option>
                                            <option value="X TBSM 2">X TBSM 2</option>
                                            <option value="X TBSM 3">X TBSM 3</option>
                                            <option value="X OTKP 1">X OTKP 1</option>
                                            <option value="X OTKP 2">X OTKP 2</option>
                                            <option value="X OTKP 3">X OTKP 3</option>
                                            <option value="X AKL 1">X AKL 1</option>
                                            <option value="X AKL 2">X AKL 2</option>
                                            <option value="X AKL 3">X AKL 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?= ($validation->hasError('nomor'))?'is-invalid': ''; ?>" id="nomor" name="nomor" placeholder="Masukkan Nomor Hp Cth: 08123456789">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nomor'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-user btn-block">Daftar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endsection() ?>