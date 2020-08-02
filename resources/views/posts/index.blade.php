@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success">নতুন পোস্ট</a>
    </div>
    <card class="card-default">
        <div class="card-header">Posts</div>
    </card>
    <div class="card-body">
        <table class="table">
            <thead>
            <th>ছবি</th>
            <th>শিরোনাম</th>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
{{--                <td><img src="{{ $post->image }}" width="60px" height="60px" alt="ছবি"></td>--}}
{{--                <td> {{$post->image}} </td>--}}
                <td>
                    <img src="{{ asset($post->image) }}" alt="ছবি">
                </td>
                <td> {{$post->title}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
