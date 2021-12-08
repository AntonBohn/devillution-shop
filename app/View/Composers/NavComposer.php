<?php

namespace App\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class NavComposer
{
    public function compose(View $view): void
    {
        $view->with('categories', Category::all());
    }
}
