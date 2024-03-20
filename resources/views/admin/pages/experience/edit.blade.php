@extends('admin.layouts.master')

@push('css')

@endpush

@section('content')
    <div class="card col-6 offset-3">
        <div class="card-body">
            <h4 class="card-title">Edite Experience</h4>
            <form action="{{ route('admin.experience.update', $experince->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-3">
                    <label for="name" class="col-3 col-form-label">Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{$experince->name}}" required ><br>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="company" class="col-3 col-form-label">Company</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"  value="{{$experince->company}}" required ><br>
                        @error('company')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="location" class="col-3 col-form-label">location</label>
                    <div class="col-9">
                        <input type="text" class="form-control @error('location') is-invalid @enderror" name="location"  value="{{$experince->location}}" required ><br>
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
                        <input type="text" class="form-control @error('date') is-invalid @enderror" name="date"  value="{{$experince->date}}" required ><br>
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
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" required>
{{$experince->description}}
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

