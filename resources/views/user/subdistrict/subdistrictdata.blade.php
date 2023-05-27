@extends('layout.mainlayout')
@section('page_title' , '')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Camat</title>
</head>

@section('content')
<body>
    <section class="sample-page">
        <div class="container" data-aos="fade-up">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="assets/admin//dist/img/user4-128x128.jpg"
                                        alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">name</h3>
                                <p class="text-muted text-center">job</p>
                            </div>
                        </div>
                        <br>
                        <div class="list-group ">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fa fa-envelope"></i> Email Saya</strong>
                                    <p class="text-muted">email</p>
                                    <hr>

                                    <strong><i class="fa fa-phone"></i> Telephone</strong>
                                    <p class="text-muted">telephone</p>
                                    <hr>

                                    <strong><i class=" fa fa-venus-mars"></i>Jenis Kelamin</strong>
                                    <p class="text-muted">jk</p>
                                    <hr>

                                    <strong><i class="fa fa-calendar mr-1"></i> Tanggal Lahir</strong>
                                    <p class="text-muted">tl</p>
                                    <hr>

                                    <strong><i class="fa fa-user mr-1"></i> Pekerjaan</strong>
                                    <p class="text-muted">kerja</p>
                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                                    <p class="text-muted">alamat</p>
                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Tentang saya</strong>
                                    <p class="text-muted">ttg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1">Edit Profile</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab2">Setting Password</a>
                                            </li>
                                        </ul>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        {{-- Update Profil --}}
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tab1">
                                                <form action="/subprofil/updateSubProfile" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" id="id" name="id" value="aa">

                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Id Profil</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="nama_camat" placeholder="Nama Camat" class="form-control here" value="{{ $subdisctrictprofile[0]->id }}" readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Id User</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="id_user" placeholder="Nama Camat" class="form-control here" value="{{ $subdisctrictprofile[0]->id_user }}" readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Kecamatan</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="id_kecamatan" placeholder="Nama Camat" class="form-control here" value="{{ $subdisctrictprofile[0]->id_kecamatan }}" readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Kode Kecamatan</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="kode_kecamatan" placeholder="Nama Camat" class="form-control here" value="{{ $subdisctrictprofile[0]->kode_kecamatan }}" readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Nama Camat</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="nama_camat" placeholder="Nama Camat" class="form-control here" value="{{ $subdisctrictprofile[0]->nama_camat }}" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-4 col-form-label">Nomor Telpon Camat</label>
                                                        <div class="col-8">
                                                            <input id="email" name="telp_camat" placeholder="example@gmail.com" class="form-control here" value="{{ $subdisctrictprofile[0]->telp_camat }}" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lastname" class="col-4 col-form-label">alamat</label>
                                                        <div class="col-8">
                                                            <input id="role_id" name="alamat" class="form-control here" type="text" value="{{ $subdisctrictprofile[0]->alamat }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="text" class="col-4 col-form-label">email</label>
                                                        <div class="col-8">
                                                            <input id="phone" name="email" placeholder="No Telpon" class="form-control here" value="{{ $subdisctrictprofile[0]->email }}" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="text" class="col-4 col-form-label">Kode Pos</label>
                                                        <div class="col-8">
                                                            <input id="phone" name="kodepos" placeholder="No Telpon" class="form-control here" value="{{ $subdisctrictprofile[0]->kodepos }}" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-4 col-8">
                                                            <button type="reset" class="btn btn-dark">Reset</button>
                                                            <button class="btn btn-success" type="submit">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="tab2">
                                                <div class="form-group row">
                                                    <label for="newpass" class="col-4 col-form-label">Password Aktif </label>
                                                    <div class="col-8">
                                                        <input type="password" class="form-control here" name="" id="current_password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="newpass" class="col-4 col-form-label">Password Baru</label>
                                                    <div class="col-8">
                                                        <input type="password" class="form-control" name="password" id="password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="newpass" class="col-4 col-form-label">Konfirmasi Password</label>
                                                    <div class="col-8">
                                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-4 col-8">
                                                        <button type="reset" class="btn btn-dark">Reset</button>
                                                        <button class="btn btn-success">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab3">

                                            <div class="donation-history">
                                                    <div class="donation-list">

                                                        <div class="donation-item">
                                                        <div class="donation-item-header">
                                                            <img src="assets/img/blog/blog-author.jpg" alt="Donasi untuk Panti Asuhan ABC" class="donation-img">
                                                            <div class="donation-item-title">
                                                            <h4>Donasi untuk Panti Asuhan ABC</h4>
                                                            <span class="donation-date">13 Mei 2023</span>
                                                            </div>
                                                        </div>
                                                        <div class="donation-item-body">
                                                            <p class="donation-amount">Jumlah donasi: Rp 500.000</p>
                                                            <p class="donation-method">Metode pembayaran: Transfer Bank BCA</p>
                                                        </div>
                                                        </div>

                                                        <div class="donation-item">
                                                        <div class="donation-item-header">
                                                            <img src="assets/img/blog/blog-author.jpg" alt="Donasi untuk Yayasan XYZ" class="donation-img">
                                                            <div class="donation-item-title">
                                                            <h4>Donasi untuk Yayasan XYZ</h4>
                                                            <span class="donation-date">10 Mei 2023</span>
                                                            </div>
                                                        </div>
                                                        <div class="donation-item-body">
                                                            <p class="donation-amount">Jumlah donasi: Rp 1.000.000</p>
                                                            <p class="donation-method">Metode pembayaran: Kartu Kredit</p>
                                                        </div>
                                                        </div>

                                                    </div>
                                                    </div>

                                            </div>

                                            <div class="tab-pane fade" id="tab4">
                                                <div class="favorite-donations">

                                                    <div class="favorite-list">
                                                        <div class="favorite-item">
                                                        <img src="assets/img/blog/blog-1.jpg" alt="Donasi untuk Panti Asuhan ABC" class="favorite-img">
                                                        <div class="favorite-item-body">
                                                            <h4 class="favorite-title">Donasi untuk Panti Asuhan ABC</h4>
                                                            <p class="favorite-description">Panti Asuhan ABC membutuhkan dana untuk memperbaiki atap gedung.</p>
                                                            <hr>
                                                            <button type ="button" class="bi bi-trash btn btn-danger"> Hapus</button>
                                                        </div>
                                                        </div>

                                                        <div class="favorite-item">
                                                        <img src="assets/img/blog/blog-1.jpg" alt="Donasi untuk Panti Asuhan ABC" class="favorite-img">
                                                        <div class="favorite-item-body">
                                                            <h4 class="favorite-title">Donasi untuk Yayasan XYZ</h4>
                                                            <p class="favorite-description">Yayasan XYZ membutuhkan dana untuk membeli alat-alat sekolah untuk anak-anak di desa terpencil.</p>
                                                            <hr>
                                                            <button type ="button" class="bi bi-trash btn btn-danger"> Hapus</button>
                                                        </div>
                                                        </div>

                                                    </div>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
</html>