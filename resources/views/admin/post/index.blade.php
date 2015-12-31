@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-xs-6 col-md-6 col-lg-6">
                <h3>Posts <small>» Listing</small></h3>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6 text-right">
                <a href="/admin/post/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle fa-lg"></i> New Post
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="posts-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Published</th>
                        <th>Title</th>
                        <th class="hidden-xs">Subtitle</th>
                        <th data-sortable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td data-order="{{ $post->published_at->timestamp }}">
                                {{ $post->published_at->format('Y-m-d H:i') }}
                            </td>
                            <td>{{str_limit($post->title,60)  }}</td>
                            <td class="hidden-xs">{{str_limit($post->subtitle ,60)}}</td>
                            <td>
                                <a href="/admin/post/{{ $post->id }}/edit" class="btn  btn-info btn-sm">
                                    <i class="fa fa-edit fa-lg"></i> Edit
                                </a>
                                <a href="/blog/{{ $post->slug }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-eye fa-lg"></i> View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script>
        $(function() {
            $("#posts-table").DataTable({
                order: [[0, "desc"]]
            });
        });
    </script>
@stop