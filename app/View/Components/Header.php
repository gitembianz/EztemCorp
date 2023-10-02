<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $title;
    public $metadescription;
    public $canonical;

    public function __construct($title = "", $metadescription = "", $canonical = "")
    {
        $this->title = $title;
        $this->metadescription = $metadescription;
        $this->canonical = $canonical;
    }

    public function render(): View|Closure|string
    {
        return view('components.header', ['title' => $this->title, 'metadescription' => $this->metadescription, 'canonical' => $this->canonical]);
    }
}
