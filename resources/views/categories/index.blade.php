@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('categories.create') }}" class="btn btn-success">নতুন ক্যাটাগরি</a>
{{--        <a href="/categories/create" class="btn btn-success">নতুন ক্যাটাগরি</a>--}}
    </div>
    <div class="card card-default">
        <div class="card-header">ক্যাটাগরি</div>
        <div class="card-body">
            <table class="table">
                <thead>
                <th>নাম</th>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                {{ $category->name }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
