@extends('admin.layouts.master')

@push('css')

@endpush

@section('content')
    <div class="card col-6 offset-2">
        <div class="card-body">
            <h4 class="card-title">Edt Contact</h4>
            <form action="{{ route('admin.contact.update',$contact->id)}}" method="post" class="form-horizontal"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-3">
                    <label for="text" class="col-3 col-form-label">Content</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="text"
                               value="{{$contact->text}}" required><br>
                    </div>

                </div>

                <div class="form-group row mb-3">
                    <label for="is_link" class="col-3 col-form-label">Is Link</label>
                    <div class="col-9">
                        <input type="checkbox" value="1" class="form-control"
                               name="is_link" {{$contact->is_link?'checked':''}}><br>
                    </div>
                </div>


                <div class="form-group row mb-3">
                    <label for="platform" class="col-3 col-form-label">Platform</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('platform') is-invalid @enderror" name="platform"
                               value="{{$contact->platform}}" required><br>
                        @error('platform')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row mb-3">
                    <label for="icon" class="col-3 col-form-label">Icon</label>
                    <div class="col-9">
                        <div class="custome-file">
                            <input type="file" name="icon"
                                   class="custom-file-input @error('icon') is-invalid @enderror">
                            @error('icon')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <label class="custom-file-label" for="image">Choose Icon</label>
                        </div>
                    </div>
                </div>


                <div class="form-group mb-0 justify-content-end row">
                    <div class="col-9">
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

