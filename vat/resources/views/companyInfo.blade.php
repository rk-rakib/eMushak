@extends('layout.master');

@section('page-title','Company Information');

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>     
    <form>
        <div class="form-row">
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Last name">
          </div>
        </div>
    </form>
</div>
@endsection