@extends('layout.default')

@section('content')
    <div class="cms-page">
        <h1>{{ $cmsPage->name }}</h1>

        <p>{{ $cmsPage->data }}</p>
    </div>
@endsection
