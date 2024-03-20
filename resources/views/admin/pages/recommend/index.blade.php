@extends('admin.layouts.master')


@section('content')
    <div class="table-responsive offset-1 col-10">
        <table class="table mb-0">
            <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Text</th>
                <th>Org</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($recomms as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td scope="row">{{ $item->name }}</td>
                    <td scope="row">{{ $item->text }}</td>
                    <td scope="row">{{ $item->organization }}</td>
                    <td>
                        <form action="{{ route('admin.recommend.destroy', $item->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.recommend.edit', $item->id) }}"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
