@extends('layout.main')

@section('title_page')
    ADDITIONAL DOCUMENTS
@endsection

@section('breadcrumb_title')
    <small>accounting / addocs / seacrh</small>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <x-acc-addoc-links page='search' />
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card-header .active {
            color: black;
            text-transform: uppercase;
        }
    </style>
@endsection