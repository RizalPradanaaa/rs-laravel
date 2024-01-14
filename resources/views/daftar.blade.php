<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumah Sakit Permata - Pendaftaran</title>

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-11 mx-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class=" fw-bolder mb-4">Pendaftaran Online Rawat Jalan</h1>
                                        <a href="/" class="btn btn-primary rounded-pill mb-4">
                                            Cek Data Reservasi
                                        </a>
                                    </div>
                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="required"
                                                    value="{{ old('nama') }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">NIK (No. KTP)</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                                    name="nik" placeholder="Masukan No. NIK 16 digit" value="{{ old('nik') }}">
                                                @error('nik')
                                                    <div class="invalid-feedback">
                                                        "No. NIK Masih Kosong
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control @error('Lahir') is-invalid @enderror" name="tgl_lahir"
                                                    placeholder="Masukan Tanggal Lahir" value="{{ old('tgl_lahir') }}">
                                                @error('Lahir')
                                                    <div class="invalid-feedback">
                                                        "Tanggal lahir masih kosong
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('Lahir') is-invalid @enderror" name="tmp_lahir"
                                                    placeholder="Tempat Lahir" value="{{ old('tmp_lahir') }}">
                                                @error('tmp_lahir')
                                                    <div class="invalid-feedback">
                                                        "Tempat lahir masih kosong
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select name="kelamin" value="{{ old('kelamin') }}" class="form-control @error('kelamin') is-invalid @enderror">

                                                    <option selected value="">Pilih Jenis Kelamin</option>
                                                    <option value="laki-laki" {{ old('kelamin') != 'laki-laki' ?: 'selected' }}>Laki-laki</option>
                                                    <option value="perempuan" {{ old('kelamin') != 'perempuan' ?: 'selected' }}>Perempuan</option>
                                                </select>
                                                @error('kelamin')
                                                    <div class="invalid-feedback">
                                                        "Pilih Jenis Kelamin
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No. HP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="notelp"
                                                    name="nohp" placeholder="Nomer Handphone (aktif)" value="{{ old('nohp') }}">
                                                @error('nohp')
                                                    <div class="invalid-feedback">
                                                        "No. Hanpdhone Masih Kosong
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-2 pt-0">Pendidikan</label>
                                            <div class="col-sm-10">
                                                <select name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror">
                                                    <option value="-">-</option>
                                                    <option value="sltp/sd-smp" {{ old('pendidikan') != 'sltp/sd-smp' ?: 'selected' }}>SLTP / SD-SM</option>
                                                    <option value="slta/sma" {{ old('pendidikan') != 'slta/sma' ?: 'selected' }}>SLTA / SMA</option>
                                                    <option value="sarjana" {{ old('pendidikan') != 'sarjana' ?: 'selected' }}>Sarjana</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"
                                                    name="pekerjaan" placeholder="Isi '-' jika belum/tidak bekerja "
                                                    value="{{ old('pekerjaan') }}">
                                                @error('Pekerjaan')
                                                    <div class="invalid-feedback">
                                                        "isi ' - ' Jika Belum / Tidak Bekerja
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form group row">
                                            <label class="col-form-label col-sm-2 pt-0">Agama</label>
                                            <div class="col-sm-10">
                                                <select name="agama" class="form-control @error('agama') is-invalid @enderror">
                                                    <option selected value="">-</option>
                                                    <option value="islam" {{ old('agama') != 'islam' ?: 'selected' }}>Islam</option>
                                                    <option value="kristen" {{ old('agama') != 'kristen' ?: 'selected' }}>Kristen</option>
                                                    <option value="katolik" {{ old('agama') != 'katolik' ?: 'selected' }}>Katolik</option>
                                                    <option value="hindu" {{ old('agama') != 'hindu' ?: 'selected' }}>Hindu</option>
                                                    <option value="buddha" {{ old('agama') != 'buddha' ?: 'selected' }}>Buddha</option>
                                                    <option value="konghuchu" {{ old('agama') != 'konghuchu' ?: 'selected' }}>Konghuchu</option>
                                                </select>
                                                @error('agama')
                                                    <div class="invalid-feedback">
                                                        "Agama Masih Kosong
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form group row">
                                            <label class="col-form-label col-sm-2 pt-0">Status Pernikahan</label>
                                            <div class="col-sm-10">
                                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                                    <option selected value="">-</option>
                                                    <option value="menikah" {{ old('status') != 'menikah' ?: 'selected' }}>MENIKAH</option>
                                                    <option value="belum" {{ old('status') != 'belum' ?: 'selected' }}>BELUM MENIKAH</option>
                                                    <option value="duda" {{ old('status') != 'duda' ?: 'selected' }}>DUDA</option>
                                                    <option value="janda" {{ old('status') != 'janda' ?: 'selected' }}>JANDA</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        "Status Pernikahan Masih Kosong
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form group row">
                                            <label class="col-form-label col-sm-2 pt-0">Golongan Darah</label>
                                            <div class="col-sm-10">
                                                <select name="gol" class="form-control @error('gol') is-invalid @enderror">
                                                    <option selected value="">-</option>
                                                    <option value="A" {{ old('gol') != 'A' ?: 'selected' }}>A</option>
                                                    <option value="B" {{ old('gol') != 'B' ?: 'selected' }}>B</option>
                                                    <option value="AB" {{ old('gol') != 'AB' ?: 'selected' }}>AB</option>
                                                    <option value="O" {{ old('gol') != 'O' ?: 'selected' }}>O</option>
                                                    <option value="Tidaktahu" {{ old('gol') != 'Tidaktahu' ?: 'selected' }}>Tidak Tahu</option>
                                                </select>
                                                @error('gol')
                                                    <div class="invalid-feedback">
                                                        "Golongan Darah Masih Kosong
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="exampleFormControlTextarea1" rows="3" value="{{ old('alamat') }}" placeholder="Alamat Lengkap"></textarea>
                                                @error('alamat')
                                                    <div class="invalid-feedback">
                                                        "Alamat Masih Kosong
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label class="col-form-label col-sm-2 pt-0">PIlih Layanan</label>
                                            <div class="col-sm-10">
                                                <select name="layanan" class="form-control "
                                                required>
                                                    <option value="">Pilih Layanan...</option>
                                                    <option value="Umum">Umum</option>
                                                    <option value="Asuransi">Asuransi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label class="col-sm-2 col-form-label">Masukan Keluhan</label>
                                            <div class="col-sm-10">
                                                    <textarea type="text" name="keluhan" class="form-control" cols="30" rows="5"
                                                    placeholder="Masukkan keluhan Anda"
                                                    required ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <label class="col-form-label col-sm-2 pt-0">Dokter</label>
                                            <div class="col-sm-10">
                                                <select name="dokter" class="form-control"
                                                required >
                                                    <option selected value="">Pilih Dokter..</option>

                                                    {{-- @foreach($dokter as $row)
                                                    <option value= "{{ $row->id }}">{{ $row->nama }}({{ $row->poli == '' ? '-' : $row->poli->name }})  | {{ $row->jadwal == '' ? 'Belum ada Jadwal' : $row->jadwal->jadwalpraktek }}</option>

                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
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

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>
