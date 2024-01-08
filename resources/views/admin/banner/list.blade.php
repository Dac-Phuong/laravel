@extends('dashboard')
@section('main')
  <div class="container-xxl flex-grow-1 container-p-y">
        <livewire:banner.list-banner></livewire:banner.list-banner>
        <livewire:banner.create-banner></livewire:banner.create-banner>
        <livewire:banner.update-banner></livewire:banner.update-banner>
    </div>
@endsection