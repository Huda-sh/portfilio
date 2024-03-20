@extends('admin.layouts.master')

@push('css')

@endpush

@section('content')
    <div class="card col-6 offset-3">
        <div class="card-body">
            <h4 class="card-title">Add New Technology</h4>
            <form action="{{ route('admin.techno.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-3">
                    <label for="first_name" class="col-3 col-form-label">Name</label>
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
                    <label for="is_framework" class="col-3 col-form-label">Is Framework</label>
                    <div class="col-9">
                        <input type="checkbox" value="1"  class="form-control" name="is_framework"><br>
                    </div>
                </div>


                <div class="form-group row mb-3">
                    <label for="logo" class="col-3 col-form-label">Logo</label>
                    <div class="col-9">
                        <div class="custome-file">
                            <input type="file" name="logo" class="custom-file-input @error('logo') is-invalid @enderror">
                            @error('logo')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <label class="custom-file-label" for="image">Choose Logo</label>
                        </div>
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

