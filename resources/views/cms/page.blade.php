<?php
use App\Models\CmsPage
/** @var CmsPage $cmsPage */
?>
@extends('layout.default')

@section('content')
    <div class="cms-page">
        <div class="pagetitle">
            <h1>{{ $cmsPage->name }}</h1>
        </div>
        <div class="pagecontent">
            <p>{{ $cmsPage->data }}</p>
        </div>
    </div>
@endsection
