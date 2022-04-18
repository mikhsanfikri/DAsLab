@extends('Layout.user')
@section('title', "D'AsLab | Daftar Asisten")
@section('head', 'Pendaftaran Asisten Laboratorium')


@section('container')
    <!-- Main content -->
    <section class="content pb-5">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4 ml-4">
                    <!-- start form pendaftaran -->
                    <form action="{{ url('/daftar') }}" method="post">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @if ($errors->has('nama')) is-invalid @endif"
                                id="nama" name="nama" placeholder="Nama Lengkap" value="{{ auth()->user()->name }}">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $errors->first('nama') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" class="form-control @if ($errors->has('npm')) is-invalid @endif"
                                id="npm" name="npm" placeholder="NPM" value="{{ auth()->user()->npm }}">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $errors->first('npm') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif"
                                id="email" name="email" placeholder="Email" value="">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="noHP">No HP</label>
                            <input type="text" class="form-control @if ($errors->has('nohp')) is-invalid @endif"
                                id="noHP" name="nohp" placeholder="Nomor HP">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $errors->first('nohp') }}
                            </div>
                        </div>

                        <!-- jurusan -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan"
                                value="{{ 'informatika' }}" readonly>
                        </div>
                        <!-- end jurusan -->

                        <!-- matakuliah -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mata Kuliah</label>
                            <select class="form-control text-dark" name="mataKuliah" id="exampleFormControlSelect1">
                                @foreach ($lessons as $lesson)
                                    <option value="{{ $lesson['nama_mk'] }}">{{ $lesson['nama_mk'] }}</option>
                                @endforeach
                            </select>

                        </div>
                        <!-- end matakuliah -->

                        <!-- button submit -->
                        <button type="submit" class="btn btn-success">Kirim</button>
                        <!-- end button submit -->
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("Pendaftara Berhasil!", "Silahkan Cek Halaman Mata Kuliah Untuk Pengumuman!", "success");
        </script>
    @endif
@endsection
