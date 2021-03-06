<?php
use App\Models\CmsPage
/* @var CmsPage $cmsPage */
?>
<ul>
    @foreach($cmsPages as $cmsPage)
    <li><a href="{{ route('cms.pages', ['cmsPage' => $cmsPage->id]) }}">{{ $cmsPage->name }}</a></li>
    @endforeach
</ul>
<span> Nuke Ware Store © 2021</span>
<ul class="social-icons">
    <li class="button-Instagram">
        <a href="https://www.instagram.com/Devillution/">
        <span class="iconify" data-icon="mdi-instagram"></span>
        </a>
    </li>
    <li class="button-Twitter">
        <a href="#">
        <span class="iconify" data-icon="mdi-twitter"></span>
        </a>
    </li>
</ul>
