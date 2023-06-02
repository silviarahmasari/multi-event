@extends('layout.layout_camat')
@section('title', 'Camat | Pendaftaran')

@section('content')
    <div class="section-header">
        <h1>Pendaftaran Peserta</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ URL::to('camat') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ URL::to('mapdistrictsport/index') }}">Pendaftaran</a></div>
            <div class="breadcrumb-item active"><a
                    href="{{ URL::to('participants/create/' . $mds[0]->id_map_district_sport) }}">Peserta</a></div>
        </div>
    </div>
    <div class="section-body">
        <div class="col-12 col-sm-12 col-lg-12 px-0">
            <div class="card">
                <div class="card-header">
                    <h4>Grup : {{ $mds[0]->group_name }}</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse-{{ $mds[0]->id_map_district_sport }}-{{ $mds[0]->group_name }}"
                            class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show"
                    id="mycard-collapse-{{ $mds[0]->id_map_district_sport }}-{{ $mds[0]->group_name }}">
                    <div class="card-body">
                        <form action="{{ URL::to('mapdistrictsport/update/' . $mds[0]->id_map_district_sport) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="id_sub_district" class="col-sm-3 col-form-label">Kecamatan</label>
                                <div class="col-9">
                                    <input id="id_sub_district" name="id_sub_district" placeholder="Nama Group"
                                        class="form-control" value="{{ $mds[0]->nama_kecamatan }}" required="required"
                                        type="text" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_sport" class="col-sm-3 col-form-label">Cabang Olahraga</label>
                                <div class="col-9">
                                    @switch($mds[0]->status)
                                        @case($mds[0]->status === 'On Process')
                                            <select name="id_sport" id="id_sport" class="form-control">
                                                @foreach ($sports as $sport)
                                                    <option value="{{ $sport->id }}"
                                                        class="@if ($mds[0]->id_sport === $sport->id) selected @endif form-control">
                                                        {{ $sport->sport_name }}</option>
                                                @endforeach
                                            </select>
                                        @break

                                        @case($mds[0]->status === 'Verified' || 'Unverified')
                                            <input id="id_sport" name="id_sport" placeholder="Nama Group" class="form-control"
                                                value="{{ $mds[0]->sport_name }}" required="required" type="text" disabled>
                                        @break

                                    @endswitch
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="group_name" class="col-sm-3 col-form-label">Nama Group</label>
                                <div class="col-9">
                                    <input id="group_name" name="group_name" placeholder="Nama Group"
                                        class="form-control here" value="{{ $mds[0]->group_name }}" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="group_name" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-9">
                                    <input id="group_name" name="group_name" placeholder="Nama Group"
                                        class="form-control here" value="{{ $mds[0]->status }}" required="required"
                                        type="text" disabled>
                                </div>
                            </div>
                            @switch($mds[0]->status)
                                @case($mds[0]->status === 'On Process')
                                    <div class="form-group row col-auto float-right">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-plus-square" disabled> Simpan
                                                Perubahan </i></button>
                                    </div>
                                @break

                                @default
                            @endswitch
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ URL::to('participant/store/' . $mds[0]->id_map_district_sport) }}" method="POST"
            enctype="multipart/form-data">
            @for ($i = 0; $i < $mds[0]->max_participant; $i++)
                <div class="col-12 col-sm-12 col-lg-12 px-0">
                    <div class="card">
                        <div class="card-header">
                            <h4>Peserta {{ $index }}</h4>
                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse-{{ $i }}" class="btn btn-icon btn-info"
                                    href="#"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="collapse hide" id="mycard-collapse-{{ $i }}">
                            <div class="card-body">
                                @csrf
                                <input id="participant_count" name="participant_count[]" value="{{ $index }}"
                                    type="text" hidden>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="pas_foto">Foto Peserta</label>
                                        <input id="pas_foto" name="pas_foto[]" placeholder="Tunjukkan pesonamu"
                                            class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="participant_name">Nama Peserta</label>
                                        <input id="participant_name" name="participant_name[]" placeholder="Nama peserta"
                                            class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="participant_gender">Jenis Kelamin</label>
                                        <select name="participant_gender[]" class="form-control">
                                            <option value="Laki-laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="participant_dob">Tanggal Lahir</label>
                                        <input id="participant_dob" name="participant_dob[]" placeholder="Tanggal lahir"
                                            class="form-control" type="date">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="participant_address">Alamat KTP</label>
                                        <input id="participant_address" name="participant_address[]"
                                            placeholder="Alamat sesuai ktp" class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="participant_domicile">Alamat Domisili</label>
                                        <input id="participant_domicile" name="participant_domicile[]"
                                            placeholder="Alamat domisili" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="no_ktp">No KTP</label>
                                        <input id="no_ktp" name="no_ktp[]" placeholder="Nomor ktp"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="no_kk">No Kartu Keluarga</label>
                                        <input id="no_kk" name="no_kk[]" placeholder="Nomor kartu keluarga"
                                            class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="no_akte">No Akte</label>
                                        <input id="no_akte" name="no_akte[]" placeholder="Nomor akte kelahiran"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="no_ijazah">No Ijazah</label>
                                        <input id="no_ijazah" name="no_ijazah[]" placeholder="Nomor ijazah"
                                            class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php $index++ @endphp
            @endfor
            <div class="form-group row col-auto float-center">
                <button class="btn btn-success" type="submit"><i class="fa fa-plus-square"> Simpan </i></button>
            </div>
        </form>
    </div>
@endsection
