<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsPagesController extends Controller
{
    public function renderFooterPage (\FooterPageTable $footerPageTable) {
        return view('cms-footer', [
            'pageTitle' => 'footer',
            'footer' => $footerPageTable,
        ]);
    }
}
