@extends('layouts.admin')

@section('content')
    <div class="content-page">
        <div class="container">
            <h4 class="mb-3">{{ $language->exists ? 'Edit Language' : 'Add Language' }}</h4>

            <form action="{{ $language->exists ? route('admin.languages.update', $language) : route('admin.languages.store') }}" method="POST">
                @csrf
                @if($language->exists) @method('PUT') @endif

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input name="name" class="form-control" value="{{ old('name', $language->name) }}" required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Code (e.g. en, ar)</label>
                    <input name="code" class="form-control" value="{{ old('code', $language->code) }}" required>
                    @error('code') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="is_default" class="form-check-input" id="is_default" value="1" {{ old('is_default', $language->is_default) ? 'checked' : '' }}>
                    <label for="is_default" class="form-check-label">Make default</label>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="active" class="form-check-input" id="active" value="1" {{ old('active', $language->active ?? true) ? 'checked' : '' }}>
                    <label for="active" class="form-check-label">Active</label>
                </div>

                <button class="btn btn-primary">{{ $language->exists ? 'Update' : 'Create' }}</button>
                <a href="{{ route('admin.languages.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>


@endsection
