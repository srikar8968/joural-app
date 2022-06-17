<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JournalList extends Component
{
    public $journals;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($journals)
    {
        $this->journals = $journals;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.journal-list');
    }
}
