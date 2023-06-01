@extends('layout.mainlayout')
@section('page_title' , '')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Camat</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

@section('content')
<body>
    <section class="sample-page">
        <div class="container" data-aos="fade-up">

        <!------ Include the above in your HEAD tag ---------->

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                            <a class="nav-link" data-toggle="tab" id="first_tab" href="#first">Profile</a>
                                            </li>
                                            <li class="active">
                                            <a class="nav-link" data-toggle="tab" id="second_tab" href="#second">Contact Person</a>
                                            </li>
                                        </ul>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        {{-- Update Profil --}}
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="first">
                                                <form action="/subprofil/updateSubProfile" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label" hidden>Id Profil</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="id" placeholder="Nama Camat" class="form-control here" value="id_profil" hidden readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label" hidden>Id User</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="id_user" placeholder="Nama Camat" class="form-control here" value="id_user" hidden readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Kecamatan</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="id_kecamatan" placeholder="Nama Camat" class="form-control here" value="id_kecamatan" readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Kode Kecamatan</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="kode_kecamatan" placeholder="Nama Camat" class="form-control here" value="kode_kecamatan" readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Nama Camat</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="nama_camat" placeholder="Nama Camat" class="form-control here" value="nama camat" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-4 col-form-label">Nomor Telpon Camat</label>
                                                        <div class="col-8">
                                                            <input id="email" name="telp_camat" placeholder="example@gmail.com" class="form-control here" value="telp caman" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lastname" class="col-4 col-form-label">alamat</label>
                                                        <div class="col-8">
                                                            <input id="role_id" name="alamat" class="form-control here" type="text" value="alamat">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="text" class="col-4 col-form-label">email</label>
                                                        <div class="col-8">
                                                            <input id="phone" name="email" placeholder="No Telpon" class="form-control here" value="email" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="text" class="col-4 col-form-label">Kode Pos</label>
                                                        <div class="col-8">
                                                            <input id="phone" name="kodepos" placeholder="No Telpon" class="form-control here" value="kodepos" required="required" type="text">
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

                                            <div class="tab-pane fade in" id="second">
                                                <form action="/subprofil/updatecontactpeople" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label" hidden>Id</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="id" placeholder="Nama Camat" class="form-control here" value="id" readonly hidden required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label" hidden>Id Profil</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="id_profile" placeholder="Nama Camat" class="form-control here" value="nama camat" hidden readonly required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Nama Kontak</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="nama_kontak" placeholder="Nama Kontak" class="form-control here" value="nama_kontak"  required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Jabatan Kontak</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="jabatan_kontak" placeholder="Jabatan Kontak" class="form-control here" value="jabatan kontak"  required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Nomor Telepon</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="telp_kontak" placeholder="Nama Camat" class="form-control here" value="telp kontak"  required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama_camat" class="col-4 col-form-label">Email</label>
                                                        <div class="col-8">
                                                            <input id="nama_camat" name="email_kontak" placeholder="Nama Camat" class="form-control here" value="email" required="required" type="text">
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
