@extends('layouts.master')
@section('title')
Tambah Data
@endsection
@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Form Input</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Rocker</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Input</li>
     </ol>
   </div>
   <div class="col-sm-3">
   <div class="btn-group float-sm-right">
    <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <div class="dropdown-menu">
      <a href="javaScript:void();" class="dropdown-item">Action</a>
      <a href="javaScript:void();" class="dropdown-item">Another action</a>
      <a href="javaScript:void();" class="dropdown-item">Something else here</a>
      <div class="dropdown-divider"></div>
      <a href="javaScript:void();" class="dropdown-item">Separated link</a>
    </div>
  </div>
 </div>
 </div>
<!-- End Breadcrumb-->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
         <div class="card-header text-uppercase">Text Input</div>
         <div class="card-body">

         <form>

            <div class="form-group row">
              <label for="basic-input" class="col-sm-3 col-form-label">Tanggal</label>
              <div class="col-sm-9">
                <input type="text" id="basic-input" class="form-control">
              </div>
            </div>

            <div class="form-group row">
                <label for="basic-input" class="col-sm-3 col-form-label">Waktu</label>
                <div class="col-sm-9">
                  <input type="text" id="basic-input" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label for="basic-input" class="col-sm-3 col-form-label">Lokasi</label>
                <div class="col-sm-9">
                  <input type="text" id="basic-input" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label for="basic-input" class="col-sm-3 col-form-label">Suhu Tubuh</label>
                <div class="col-sm-9">
                  <input type="text" id="basic-input" class="form-control">
                </div>
              </div>

              <button type="button" class="btn btn-info btn-lg btn-round btn-block waves-effect waves-light m-1">Simpan</button>
         </form>

         </div>
      </div>
    </div>
  </div><!--End Row-->

@endsection
