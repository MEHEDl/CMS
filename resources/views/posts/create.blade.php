@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            পোস্ট তৈরি করুন
        </div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">শিরোনাম</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="description">বিস্তারিত</label>
                    <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">কনটেন্ট</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="published_at">প্রকাশকাল</label>
                    <input type="text" class="form-control" name="published_at" id="published_at">
                </div>

                <div class="form-group">
                    <label for="image">ছবি</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">পোস্ট তৈরি করুন</button>
                </div>
            </form>
        </div>
    </div>
@endsection
