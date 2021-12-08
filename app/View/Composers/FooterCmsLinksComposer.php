<?php

namespace App\View\Composers;

use App\Models\CmsPage;
use Illuminate\View\View;

class FooterCmsLinksComposer
{
    public function compose(View $view): void
    {
        $view->with('cmsPages', CmsPage::all());
    }
}
