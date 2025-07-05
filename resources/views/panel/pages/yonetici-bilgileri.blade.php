@extends('panel.panel-layout')

@section('admin-main')
<div class="box-content card white">
    <h2>Yönetici Bilgileri</h2>
    <form method="POST" action="{{ route('admin.update') }}">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="username">Kullanıcı Adı</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ old('username', auth()->user()->username) }}" required>
            @error('username')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mt-3">
            <label for="password">Yeni Şifre</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mt-3">
            <label for="password_confirmation">Yeni Şifre (Tekrar)</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Güncelle</button>
        @if(session('status'))
            <div class="alert alert-success mt-2">{{ session('status') }}</div>
        @endif
    </form>
</div>
@endsection 