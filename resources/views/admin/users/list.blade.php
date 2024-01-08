@extends('dashboard')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <livewire:users.list-user></livewire:users.list-user>
        <livewire:users.update-user></livewire:users.update-user>
    </div>
@endsection
