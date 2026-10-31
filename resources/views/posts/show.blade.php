@extends('layouts.app')

@section("title") show Details @endsection

@section('content')


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Main Post Card -->
                <div class="card shadow-sm border-0 mb-4">
                    <div
                        class="card-header bg-white border-bottom-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary px-3 py-2 fs-6">Post #{{ $post['id'] }}</span>
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary btn-sm">
                            &larr; Back to Posts
                        </a>
                    </div>
                    <div class="card-body p-4">
                        <h1 class="card-title fw-bold text-dark mb-3">{{ $post->title }}</h1>
                        <hr class="text-muted opacity-25 mb-4">
                        <div class="card-text text-secondary lh-lg fs-5 mb-4">
                            {{ $post->description }}
                        </div>
                    </div>
                </div>

                <!-- Post Metadata Card -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-dark text-white fw-semibold">
                        Post Information
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded border">
                                    <small class="text-uppercase fw-bold text-muted d-block mb-1">Description</small>
                                    <span class="fs-5 text-dark fw-semibold">{{ $post->description }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded border">
                                    <small class="text-uppercase fw-bold text-muted d-block mb-1">Created At</small>
                                    <span class="fs-5 text-dark fw-semibold">{{ $post->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection