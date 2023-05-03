@extends('app')
@section('content')
  <form action="{{ route('departements.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Name:</strong>
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                  @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Location:</strong>
                  <input type="text" name="location" class="form-control" placeholder="Lokasi Tinggal">
                  @error('location')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
          <strong>Manager ID:</strong>
              <div class="form-group">
                  <select name="manager_id" class="form-control">
                  @foreach ($managers as $manager)
                    <option value="{{ $manager->id }}">{{$manager->name}}</option>
                    @endforeach
                  </select>
                  @error('manager_id')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3 ml-3">Submit</button>
      </div>
  </form>
@endsection