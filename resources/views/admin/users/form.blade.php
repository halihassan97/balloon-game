@extends('layouts.admin')

@section('content')
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="is_admin" class="form-check-input" id="is_admin"
            {{ old('is_admin', $user->is_admin ?? false) ? 'checked' : '' }}>
        <label class="form-check-label" for="is_admin">Is Admin</label>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>

@endsection
