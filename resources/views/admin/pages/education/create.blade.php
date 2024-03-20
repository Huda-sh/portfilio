@extends('admin.layouts.master')

@push('css')

@endpush

@section('content')
    <div class="card col-6 offset-3">
        <div class="card-body">
            <h4 class="card-title">Add New Education</h4>
            <form action="{{ route('admin.education.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-3">
                    <label for="name" class="col-3 col-form-label">Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{old('name')}}" required ><br>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="institution" class="col-3 col-form-label">institution</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('institution') is-invalid @enderror" name="institution"  value="{{old('institution')}}" required ><br>
                        @error('institution')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="location" class="col-3 col-form-label">location</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('location') is-invalid @enderror" name="location"  value="{{old('location')}}" required ><br>
                        @error('location')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="date" class="col-3 col-form-label">date</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('date') is-invalid @enderror" name="date"  value="{{old('date')}}" required ><br>
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="description" class="col-3 col-form-label">description</label>
                    <div class="col-9">
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"  value="{{old('description')}}" required>

                        </textarea>
                        <br>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-0 justify-content-end row">
                    <div class="col-9">
                        <button type="submit" class="btn btn-info  ">Create</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

