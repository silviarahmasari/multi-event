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
                                            <a class="nav-link" data-toggle="tab" id="first_tab" href="#first">Peserta</a>
                                            </li>
                                        </ul>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- Update Profil --}}
                                        <form action="#" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div id="kotak">
                                                <div class="button-group">
                                                    <button id="add" type="button" class="btn btn-success btn-tambah"><i class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-danger btn-hapus" style="display:none;"><i class="fa fa-times"></i></button>
                                                </div>
                                                <div class="tab-content">
                                                    {{-- <div class="tab-pane fade show active" id="first"> --}}
                                                        {{-- <form action="#" method="POST" enctype="multipart/form-data"> --}}
                                                            
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group row">
                                                                        <label for="participant_name" class="col-4 col-form-label">Nama Partisipan</label>
                                                                        <div class="col-8">
                                                                            <input name="participant_name[]" placeholder="Nama Partisipan" class="form-control here"  required="required" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group row">
                                                                        <label for="participant_dob" class="col-4 col-form-label">Tanggal Lahir</label>
                                                                        <div class="col-8">
                                                                            <input name="participant_dob[]" placeholder="Tanggal Lahir Partisipan" class="form-control here" required="required" type="date">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group row">
                                                                        <label for="participant_gender" class="col-4 col-form-label">Jenis Kelamin</label>
                                                                        <div class="col-8">
                                                                            <select name="participant_gender[]" class="form-control" required>
                                                                                <option value="Laki-laki">Laki-Laki</option>
                                                                                <option value="Perempuan">Perempuan</option>
                                                                            </select>
                                                                            <!-- <input name="participant_gender[]" placeholder="Tanggal Lahir Partisipan" class="form-control here" required="required" type="text"> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group row">
                                                                        <label for="participant_domicile" class="col-4 col-form-label">Alamat Domisili</label>
                                                                        <div class="col-8">
                                                                            <input name="participant_domicile[]" placeholder="Alamat Domisili Partisipan" class="form-control here" required="required" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group row">
                                                                        <label for="partisipant_address" class="col-4 col-form-label">Alamat KTP</label>
                                                                        <div class="col-8">
                                                                            <input name="partisipant_address[]" placeholder="Alamat KTP Partisipan" class="form-control here" required="required" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group row">
                                                                        <label for="no_ktp" class="col-4 col-form-label">No KTP</label>
                                                                        <div class="col-8">
                                                                            <input name="no_ktp[]" placeholder="No KTP Partisipan" class="form-control here" required="required" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group row">
                                                                        <label for="no_kk" class="col-4 col-form-label">No Kartu Keluarga</label>
                                                                        <div class="col-8">
                                                                            <input name="no_kk[]" placeholder="No Kartu Keluarga" class="form-control here" required="required" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group row">
                                                                        <label for="no_akte" class="col-4 col-form-label">No Akte Kelahiran</label>
                                                                        <div class="col-8">
                                                                            <input name="no_akte[]" placeholder="No Akte Kelahiran" class="form-control here" required="required" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                            <div class="form-group row">
                                                                <label for="no_ijazah" class="col-4 col-form-label">No Ijazah</label>
                                                                <div class="col-8">
                                                                    <input name="no_ijazah[]" placeholder="No Ijazah" class="form-control here" required="required" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="offset-4 col-8">
                                                                    <button type="reset" class="btn btn-dark">Reset</button>
                                                                    <button class="btn btn-success" type="submit">Simpan</button>
                                                                </div>
                                                            </div>
                                                        {{-- </form> --}}
                                                    {{-- </div> --}}
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
    </section>
</body>
@endsection
</html>

@section('js_custom')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('#add').click(function(event){
            var tambahkotak = $('#kotak');
            event.preventDefault();	
            $('
            <div class="tab-content">\
        <div class="row">\
            <div class="col">\
                <div class="form-group row">\
                    <label for="participant_name" class="col-4 col-form-label">Nama Partisipan</label>\
                    <div class="col-8">\
                        <input name="participant_name[]" placeholder="Nama Partisipan" class="form-control here"  required="required" type="text">\
                    </div>\
                </div>\
            </div>\
            <div class="col">\
                <div class="form-group row">\
                    <label for="participant_dob" class="col-4 col-form-label">Tanggal Lahir</label>\
                    <div class="col-8">\
                        <input name="participant_dob[]" placeholder="Tanggal Lahir Partisipan" class="form-control here" required="required" type="date">\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="row">\
            <div class="col">\
                <div class="form-group row">\
                    <label for="participant_gender" class="col-4 col-form-label">Jenis Kelamin</label>\
                    <div class="col-8">\
                        <select name="participant_gender[]" class="form-control" required>\
                            <option value="Laki-laki">Laki-Laki</option>\
                            <option value="Perempuan">Perempuan</option>\
                        </select>\
                        <!-- <input name="participant_gender[]" placeholder="Tanggal Lahir Partisipan" class="form-control here" required="required" type="text"> -->\
                    </div>\
                </div>\
            </div>\
            <div class="col">\
                <div class="form-group row">\
                    <label for="participant_domicile" class="col-4 col-form-label">Alamat Domisili</label>\
                    <div class="col-8">\
                        <input name="participant_domicile[]" placeholder="Alamat Domisili Partisipan" class="form-control here" required="required" type="text">\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="row">\
            <div class="col">\
                <div class="form-group row">\
                    <label for="partisipant_address" class="col-4 col-form-label">Alamat KTP</label>\
                    <div class="col-8">\
                        <input name="partisipant_address[]" placeholder="Alamat KTP Partisipan" class="form-control here" required="required" type="text">\
                    </div>\
                </div>\
            </div>\
            <div class="col">\
                <div class="form-group row">\
                    <label for="no_ktp" class="col-4 col-form-label">No KTP</label>\
                    <div class="col-8">\
                        <input name="no_ktp[]" placeholder="No KTP Partisipan" class="form-control here" required="required" type="text">\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="row">\
            <div class="col">\
                <div class="form-group row">\
                    <label for="no_kk" class="col-4 col-form-label">No Kartu Keluarga</label>\
                    <div class="col-8">\
                        <input name="no_kk[]" placeholder="No Kartu Keluarga" class="form-control here" required="required" type="text">\
                    </div>\
                </div>\
            </div>\
            <div class="col">\
                <div class="form-group row">\
                    <label for="no_akte" class="col-4 col-form-label">No Akte Kelahiran</label>\
                    <div class="col-8">\
                        <input name="no_akte[]" placeholder="No Akte Kelahiran" class="form-control here" required="required" type="text">\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="row">\
            <div class="col">\
        <div class="form-group row">\
            <label for="no_ijazah" class="col-4 col-form-label">No Ijazah</label>\
            <div class="col-8">\
                <input name="no_ijazah[]" placeholder="No Ijazah" class="form-control here" required="required" type="text">\
            </div>\
        </div>\
        <div class="form-group row">\
            <div class="offset-4 col-8">\
                <button type="reset" class="btn btn-dark">Reset</button>\
                <button class="btn btn-success" type="submit">Simpan</button>\
            </div>\
        </div>\
    </div>').appendTo(tambahkotak);		
        });
        
        $('body').on('click','#remove',function(){	
            $(this).parent('div').remove();	
        });		
    });
    </script>
@endsection
