@extends('head')
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }} border-0 bg-{{ $msg }} alert-dismissible fade show m-5 my-2 text-white">
    <div class="">{{ Session::get('alert-' . $msg) }}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@endforeach
@if($errors->any())
<div class="alert alert-danger border-0 alert-dismissible fade show m-5 my-2">
    <div class="">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>
@endif
<div class="container border rounded-3 p-2 my-4">
    <div class="container text-center my-3">
        <h1 class="h2">Form Pendaftaran Mahasiswa Baru</h1>
    </div>
    <div class="container">
        <form action="{{route('pendaftaran')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="oldid" id="oldid" value="">
            <input type="hidden" name="id_users" id="id_users" value="{{auth()->user()->id}}">

            <div class="row mb-3">
                <label for="namamahasiswa" class="col-sm-2 col-form-label">1. Nama Lengkap<br>(Sesuai ijasah disertai gelar)</label>
                <div class="col-sm-10">
                    <input name="nama" class="form-control" type="text" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="AlamatKTP" class="col-sm-2 col-form-label">2. Alamat KTP</label>
                <div class="col-sm-10">
                    <textarea name="alamat_ktp" id="alamat_ktp" rows="5" class="form-control" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="domisili" class="col-sm-2 col-form-label">Alamat Lengkap Saat Ini</label>
                <div class="col-sm-10">
                    <textarea name="alamat_sekarang" id="alamat_sekarang" rows="5" class="form-control"
                        required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-10">
                    <input name="kecamatan" class="form-control" type="text" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                <div class="col-sm-5">
                    <select name="provinsi" id="provinsi" class="form-control">
                        <option value="" disabled selected>Pilih Provinsi Anda</option>
                        @foreach ($dataProvinsi as $nomor => $value)
                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                <div class="col-sm-5">
                    <select name="kabupaten" id="kota" class="form-control">
                        <option value="">Pilih Kota</option>

                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nomortelpon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-5">
                    <input name="no_telp" class="form-control" type="number" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nomorhp" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-5">
                    <input name="no_hp" class="form-control" type="number" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" class="form-control" type="email" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kewarganegaraan" class="col-sm-2 col-form-label">3. Kewarganegaraan</label>
                <div class="col-sm-10">
                    <select name="kewarganegaraan" id="kewarganegaraan" class="form-control">
                        <option value="" disabled selected>Pilih Kewarganegaraan Anda</option>
                        <option value="WNI Asli">WNI Asli</option>
                        <option value="WNI Keturunan">WNI Keturunan</option>
                        <option value="Warga Negara Asing">Warga Negara Asing</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="wna" class="col-sm-2 col-form-label">Bila WNA sebutkan negaranya</label>
                <div class="col-sm-10">
                    <input name="wargaasing" class="form-control" type="text">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tgllahir" class="col-sm-2 col-form-label">4. Tanggal Lahir (sesuai ijasah)</label>
                <div class="col-sm-10">
                    <input name="tanggal_lahir" class="form-control" type="date" required><br>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tempatlahir" class="col-sm-2 col-form-label">5. Tempat Lahir (Sesuai Ijasah)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempatlahir">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kabupatenlahir" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                <div class="col-sm-5">
                    <select name="kota_lahir" id="kota_lahir" class="form-control">
                        <option value="">Pilih Kota</option>

                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="provinsilahir" class="col-sm-2 col-form-label">Provinsi</label>
                <div class="col-sm-5">
                    <select name="provinsi_lahir" id="provinsi_lahir" class="form-control">
                        <option value="" disabled selected>Pilih Provinsi Lahir Anda</option>
                        @foreach ($dataProvinsi as $nomor => $value)
                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tempatlahirluar" class="col-sm-2 col-form-label">Bila tempat lahir di luar negeri sebutkan negaranya</label>
                <div class="col-sm-10">
                    <input name="tempatlahirluar" class="form-control" type="text">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jeniskelamin" class="col-sm-2 col-form-label">6. Jenis Kelamin</label>
                <div class="col-sm-5">
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="" disabled selected>Pilih Jenis Kelamin Anda</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">7. Status Menikah</label>
                <div class="col-sm-5">
                    <select name="status_menikah" id="status_menikah" class="form-control">
                        <option value="" disabled selected>Pilih Status Pernikahan Anda</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Lain-lain(Janda/Duda)">Lain-lain(Janda/Duda)</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="agama" class="col-sm-2 col-form-label">8. Agama</label>
                <div class="col-sm-5">
                    <select name="agama" id="agama" class="form-control">
                        <option value="" disabled selected>Pilih Agama Anda</option>
                        @foreach ($dataAgama as $nomor => $value)
                        <option value="{{ $value->nama }}">{{ $value->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nilaiakademik" class="col-sm-2 col-form-label">9. Nilai Akademik</label>
            </div>
            <div class="row mb-3">
                <label for="mtk" class="col-sm-2 col-form-label">Matematika</label>
                <div class="col-sm-5">
                    <input name="mtk" class="form-control" type="text" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="bindo" class="col-sm-2 col-form-label">Bahasa Indonesia</label>
                <div class="col-sm-5">
                    <input name="bindo" class="form-control" type="text" required>
                </div>
                <div class="row mb-3">
                    <label for="binggris" class="col-sm-2 col-form-label">Bahasa Inggris</label>
                    <div class="col-sm-5">
                        <input name="binggris" class="form-control" type="text" required>
                    </div>
                </div>
            </div>
    </div>
    <label>Pas Foto</label><br>
    <input name="foto" id="foto" type="file" class="form-control" required><br>


    <div class="row my-5">
        <div class="col">
            <a class="btn btn-outline-danger" href="{{route('dashboard.user')}}" style="width: 80px;">Back</a>
            <input class="btn btn-outline-primary" type="submit" value="Save" style="width: 80px;">
        </div>
    </div>
    </form>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#provinsi').change(function() {
        var provinsiId = $(this).val();

        if (provinsiId) {
            $.ajax({
                url: '/get-kota/' + provinsiId,
                type: 'GET',
                success: function(data) {
                    $('#kota').empty();
                    $('#kota').append('<option value="">Pilih Kota</option>');
                    $.each(data, function(key, value) {
                        $('#kota').append('<option value="' + value.id + '">' + value.nama +
                            '</option>');
                    });
                }
            });
        } else {
            $('#kota').empty();
            $('#kota').append('<option value="">Pilih Kota Kosong</option>');
        }
    });

    $('#provinsi_lahir').change(function() {
        var provinsiId = $(this).val();

        if (provinsiId) {
            $.ajax({
                url: '/get-kota/' + provinsiId,
                type: 'GET',
                success: function(data) {
                    $('#kota_lahir').empty();
                    $('#kota_lahir').append('<option value="">Pilih Kota</option>');
                    $.each(data, function(key, value) {
                        $('#kota_lahir').append('<option value="' + value.id + '">' + value
                            .nama +
                            '</option>');
                    });
                }
            });
        } else {
            $('#kota_lahir').empty();
            $('#kota_lahir').append('<option value="">Pilih Kota Kosong</option>');
        }
    });
</script>

@extends('footer')