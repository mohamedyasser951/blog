@extends('layouts.app')

@section("title") All Posts @endsection

@section('content')
    <div class="container my-4">
        <!-- Header & Action Row -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h4 text-dark mb-0">Manage Posts</h2>
             <a class="btn btn-success fw-medium" href="{{ route('posts.create') }}">Create Post</a>
        </div>

        <!-- Table Container -->
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0 text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 5%;">#</th>
                                <th scope="col" class="text-start" style="width: 35%;">Title</th>
                                <th scope="col" style="width: 20%;">Posted By</th>
                                <th scope="col" style="width: 20%;">Created At</th>
                                <th scope="col" style="width: 20%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post['id'] }}</th>
                                    <td class="text-start">{{ $post['title'] }}</td>
                                    <td>
                                        <span class="badge bg-secondary">
                                            {{ $post['posted_by'] }}
                                        </span>
                                    </td>
                                    <td>{{ $post['created_at'] }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-1">
                                            <a href="{{ route('posts.show', $post['id'])}}" class="btn btn-info btn-sm text-white">View</a>
                                            <a href="{{ route('posts.edit',$post['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection