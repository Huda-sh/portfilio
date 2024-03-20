@extends('admin.layouts.master')

@push('css')

@endpush

@section('content')
    <div class="card col-6 offset-2">
        <div class="card-body">
            <h4 class="card-title">Edit Project</h4>
            <form action="{{ route('admin.project.update',$project->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-3">
                    <label for="name" class="col-3 col-form-label">Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$project->name}}" required><br>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row mb-3">
                    <label for="description" class="col-3 col-form-label">Description</label>
                    <div class="col-9">
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" required>{{$project->description}}</textarea><br>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row mb-3">
                    <label for="web_link" class="col-3 col-form-label">Web Link</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('web_link') is-invalid @enderror" name="web_link" value="{{$project->web_link}}"><br>
                        @error('web_link')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="app_link" class="col-3 col-form-label">App Link</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('app_link') is-invalid @enderror" name="app_link" value="{{$project->app_link}}"><br>
                        @error('app_link')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="source_code" class="col-3 col-form-label">Source Code</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('source_code') is-invalid @enderror" name="source_code" value="{{$project->source_code}}"><br>
                        @error('source_code')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="demo_link" class="col-3 col-form-label">Demo Link</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('demo_link') is-invalid @enderror" name="demo_link" value="{{$project->demo_link}}"><br>
                        @error('demo_link')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="technologies" class="col-3 col-form-label">Technologies</label>
                    <div class="col-9">
                        <select multiple name="technologies[]" class="form-control @error('technologies') is-invalid @enderror">
                            @foreach($technos as $key => $item)
                                <option value="{{$item->id}}" @if(in_array($item->id, $project->technologies->pluck('id')->toArray())) selected @endif >{{$item->name}}</option>
                            @endforeach
                        </select><br>
                        @error('technologies')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="preview" class="col-3 col-form-label">Preview</label>
                    <div class="col-9">
                        <div class="custome-file">
                            <input type="file" name="preview" class="custom-file-input @error('preview') is-invalid @enderror">
                            @error('preview')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <label class="custom-file-label" for="preview">Choose File</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="files" class="col-3 col-form-label">Files</label>
                    <div class="col-9">
                        <div class="custome-file">
                            <input type="file" name="files[]" multiple class="custom-file-input @error('files') is-invalid @enderror">
                            @error('files')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <label class="custom-file-label" for="files">Choose Files</label>
                        </div>
                    </div>
                </div>


                <div class="form-group mb-0 justify-content-end row">
                    <div class="col-9">
                        <button type="submit" class="btn btn-info  ">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

