@extends('layouts.app')

@section("title")
    Create Post
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Create Post</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        {{-- Title --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                id="title"
                                class="form-control"
                                placeholder="Enter post title"
                                value="{{ old('title') }}"
                                required
                            >
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                Description
                            </label>

                            <textarea
                                name="description"
                                id="description"
                                class="form-control"
                                rows="5"
                                placeholder="Enter post description"
                                required
                            >{{ old('description') }}</textarea>
                        </div>

                        {{-- Creator --}}
                        <div class="mb-3">
                            <label for="creator" class="form-label">
                                Creator
                            </label>

                            <select
                                name="creator"
                                id="creator"
                                class="form-select"
                                required
                            >
                                <option value="">Select Creator</option>
                                <option value="Ahmed" {{ old('creator') == 'Ahmed' ? 'selected' : '' }}>
                                    Ahmed
                                </option>
                                <option value="Mohamed" {{ old('creator') == 'Mohamed' ? 'selected' : '' }}>
                                    Mohamed
                                </option>
                                <option value="Nade" {{ old('creator') == 'Nade' ? 'selected' : '' }}>
                                    Nade
                                </option>
                            </select>
                        </div>

                        {{-- Submit --}}
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                Create Post
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection