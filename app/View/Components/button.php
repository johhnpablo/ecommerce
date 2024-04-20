<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    public $type;
    public $variation;
    public $size;
    public $icon;
    public $iconPosition;
    public $text;

    public function __construct($type, $variation, $size, $text = "" , $icon = "", $iconPosition = "" )
    {
        $this->text = $text;
        $this->type = $type;
        $this->variation = $variation;
        $this->size = $size;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
