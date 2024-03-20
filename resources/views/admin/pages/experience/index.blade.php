@extends('admin.layouts.master')

@push('css')

@endpush

@section('content')
    <div class="table-responsive offset-3 col-6">
        <table class="table mb-0">
            <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Company</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($experiences as $item)
                <tr>
                    <td scope="row" class="col-1">{{ $item->id }}</td>
                    <td scope="row" class="col-9">{{ $item->name }}</td>
                    <td scope="row" class="col-9">{{ $item->company }}</td>
                    <td class="col-1">
                        <form action="{{ route('admin.experience.destroy', $item->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                    <td class="col-1">
                        <a class="btn btn-success" href="{{ route('admin.experience.edit', $item->id) }}"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
