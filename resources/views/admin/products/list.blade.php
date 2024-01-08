@extends('dashboard')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <livewire:product.list-product></livewire:product.list-product>
        <livewire:product.create-product></livewire:product.create-product>
        <livewire:product.update-product></livewire:product.update-product>
    </div>
@endsection
