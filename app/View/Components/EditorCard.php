<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EditorCard extends Component
{
    public $editor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($editor)
    {
        $this->editor = $editor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.editor-card');
    }
}
