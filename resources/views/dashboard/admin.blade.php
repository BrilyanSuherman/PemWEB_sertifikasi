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
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid p-5 py-0">
        <a class="navbar-brand" href="#">
            <img src="https://th.bing.com/th/id/OIP.cBn4jPWclmK_doErPOqNoQHaHh?pid=ImgDet&rs=1" alt="" width="60" height="60">
        </a>
        <form action="{{route('logout')}}" method="post" class="pt-3">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
</nav>
<div class="container text-primary">
    <div class="container-fluid border rounded-3 my-5 py-5 border-secondary">
        <div class="container-fluid my-3">
            <div class="row justify-content-center">
                <div class="col-5 mx-4 mb-5 p-4 border border-danger rounded-4 shadow" style="background-color: #ffe6e6;">
                    <div class="row">
                        <a href="{{route('dataUser.index')}}" class="btn btn-outline-danger w-100">Data User</a>
                    </div>
                    <div class="row mt-3">
                        <h3 class="h5 text-center text-danger">Data User Pengguna Aplikasi</h3>
                    </div>
                </div>
                <div class="col-5 mx-4 p-4 border border-info rounded-4 shadow" style="background-color: #e6f2ff;">
                    <div class="row">
                        <a href="{{route('dataPendaftar.index')}}" class="btn btn-outline-info w-100">Data Pendaftar</a>
                    </div>
                    <div class="row mt-3">
                        <h3 class="h5 text-center text-info">Data Pendaftar Mahasiswa Baru</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('footer')