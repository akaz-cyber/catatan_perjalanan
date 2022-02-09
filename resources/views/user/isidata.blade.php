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
              <label for="basic-input" class="col-sm-3 col-form-label">Basic Input</label>
              <div class="col-sm-9">
                <input type="text" id="basic-input" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label for="placeholder-input" class="col-sm-3 col-form-label">INPUT WITH PLACEHOLDER</label>
              <div class="col-sm-9">
                <input type="text" id="placeholder-input" class="form-control" placeholder="Enter Email Address">
              </div>
            </div>

            <div class="form-group row">
              <label for="disabled-input" class="col-sm-3 col-form-label">DISABLED INPUT</label>
              <div class="col-sm-9">
                <input type="text" id="disabled-input" disabled="disabled" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label for="readonly-input" class="col-sm-3 col-form-label">READONLY INPUT</label>
              <div class="col-sm-9">
                <input type="text" id="readonly-input" readonly="readonly" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label for="help-input" class="col-sm-3 col-form-label">INPUT TEXT WITH HELP</label>
              <div class="col-sm-9">
              <small class="text-muted">someone@example.com</small>
              <input type="text" id="help-input" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">STATIC INPUT</label>
              <div class="col-sm-9">
               <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
              </div>
            </div>

            <div class="form-group row">
              <label for="rounded-input" class="col-sm-3 col-form-label">ROUNDED INPUT</label>
              <div class="col-sm-9">
                <input type="text" id="rounded-input" class="form-control form-control-rounded">
              </div>
            </div>

            <div class="form-group row">
              <label for="square-input" class="col-sm-3 col-form-label">SQUARE INPUT</label>
              <div class="col-sm-9">
                <input type="text" id="square-input" class="form-control form-control-square" placeholder="Enter Email Address">
              </div>
            </div>

            <div class="form-group row">
              <label for="basic-textarea" class="col-sm-3 col-form-label">TEXTAREA INPUT</label>
              <div class="col-sm-9">
                <textarea rows="4" class="form-control" id="basic-textarea"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="basic-select" class="col-sm-3 col-form-label">Select Input</label>
              <div class="col-sm-9">
                <select class="form-control" id="basic-select">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="multiple-select" class="col-sm-3 col-form-label">MULTIPLE SELECT</label>
              <div class="col-sm-9">
                <select multiple="multiple" class="form-control" id="multiple-select">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                   </select>
              </div>
            </div>

         </form>

         </div>
      </div>
    </div>
  </div><!--End Row-->

@endsection
