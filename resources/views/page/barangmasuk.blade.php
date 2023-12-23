@extends('components.layouts.app')
@section('contain')
<div class="content-wrapper">
    @livewire('barangmasuk.index')
</div>
@include('layouts.kedatangan.createkedatangan')
@endsection
