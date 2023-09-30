<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $title;
    public $metadescription;

    public function __construct($title = "", $metadescription="")
    {
        $this->title = $title;
        $this->metadescription = $metadescription;
    }

    public function render(): View|Closure|string
    {
        return view('components.header', ['title' => $this->title, 'metadescription' =>$this->metadescription]);
    }
}
