<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */

    public string $type;
    public string $message;
    public string $title;
    public function __construct(string $type, string $message, string $title)
    {
        $this->type = $type;
        $this->message = $message;
        $this->title = $title;
    }

    public function getBgClass()
    {
        $bgClass = [
            'success' => 'bg-green-100',
            'warning' => 'bg-yellow-100',
            'error' => 'bg-red-100',
        ];
            return $bgClass[$this->type];
    }
    public function getTitleClass()
    {
        $titleClass = [
            'success' => 'text-green-800',
            'warning' => 'text-yellow-800',
            'error' => 'text-red-800',
        ];
        return $titleClass[$this->type];
    }
    public function getMessageClass()
    {
        $messageClass = [
            'success' => 'text-green-700',
            'warning' => 'text-yellow-700',
            'error' => 'text-red-700',
        ];
        return $messageClass[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
