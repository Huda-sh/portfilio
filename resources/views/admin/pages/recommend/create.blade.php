@extends('admin.layouts.master')

@push('css')

@endpush

@section('content')
    <div class="card col-6 offset-2">
        <div class="card-body">
            <h4 class="card-title">Add New Recommendation</h4>
            <form action="{{ route('admin.recommend.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf

                <div class="form-group row mb-3">
                    <label for="name" class="col-3 col-form-label">Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required><br>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row mb-3">
                    <label for="text" class="col-3 col-form-label">Text</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{old('text')}}" required><br>
                        @error('text')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row mb-3">
                    <label for="organization" class="col-3 col-form-label">Org</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" value="{{old('organization')}}" required><br>
                        @error('organization')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="is_male" class="col-3 col-form-label">Is Male</label>
                    <div class="col-9">
                        <input type="checkbox" value="1"  class="form-control" name="is_male"><br>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="image" class="col-3 col-form-label">Image</label>
                    <div class="col-9">
                        <div class="custome-file">
                            <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <label class="custom-file-label" for="image">Choose image</label>
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

