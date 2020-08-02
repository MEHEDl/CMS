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
                <th>ক্রম</th>
                <th>নাম</th>
                <th>প্রতিক্রিয়া</th>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                {{ $category->id }}
                            </td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-info btn-sm"> সম্পাদনা </a>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $category->id }})">মুছে ফেলুন</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="" method="POST" id="deleteCategoryForm">
                        @csrf
                        @method('DELETE')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">ক্যাগরি মুছে ফেলা হচ্ছে</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center text-bold"> আপনি নিশ্চিত আপনি <a style="color:orangered" class="text-bold"> {{ $category->name}}</a> ক্যাটাগরি মুছে ফেলতে চান?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">না, ফিরে যান</button>
                                <button type="submit" class="btn btn-danger">হ্যা, মুছুন</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
<script>
    function handleDelete(id){
        var form = document.getElementById('deleteCategoryForm')
        var cntnt = document.getElementById('ctxt')
        form.action='/categories/'+id

        //console.log( id+' মুছে ফেলা হচ্ছে', form)
        $('#deleteModal').modal('show')
    }
</script>
@endsection
