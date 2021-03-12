<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Notification extends Component
{
    public $description;

    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($description, $type)
    {
        $this->description = $description;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
            <div class="p-4 text-white {{ $type === 'success' ? 'bg-green-400' : 'bg-red-400' }}">
                {{ $description }}
            </div>
        blade;
    }
}
