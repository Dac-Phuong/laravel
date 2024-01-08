@extends('dashboard')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <livewire:category.list-category></livewire:category.list-category>
        <livewire:category.create-category></livewire:category.create-category>
        <livewire:category.update-category></livewire:category.update-category>
    </div>
@endsection
