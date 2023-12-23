@extends('components.layouts.app')
@section('contain')
<div class="content-wrapper">
    @livewire('vendor.index')
</div>
@include('layouts.vendor.createvendor')
@endsection
