@extends('dokter.layouts.App')
@section('container')

<center>
    <h3 style="font-family: Abhaya Libre ExtraBold">Edit Konsultasi keluhan</h3><hr>
</center>

<div class="col-md-12 col-sm-8 bg-white p-4" >
   <form action="{{route('consultation.update',$consultation->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
     <label class="font-weight-bold">Solusi</label>
     <textarea class="form-control @error('solusi') is-invalid @enderror" name="solusi" rows="5" placeholder="">{{ old('solusi') }}</textarea>

     <!-- error message untuk content -->
     @error('solusi')
     <div class="alert alert-danger mt-2">
      {{ $message }}
     </div>
     @enderror
    </div>

    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <button type="reset" class="btn btn-md btn-warning">RESET</button>
   </form>
</div>
@endsection