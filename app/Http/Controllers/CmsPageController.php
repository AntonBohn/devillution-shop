<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CmsPage;
use Illuminate\Http\Request;

class CmsPageController extends Controller
{
    public function render (CmsPage $cmsPage) {
        return view('cms.page', [
            'pageTitle' => $cmsPage->name,
            'cmsPage' => $cmsPage,
        ]);
    }
}
