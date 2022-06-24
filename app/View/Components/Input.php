<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type='text';
    public $class;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$class,$name)
    {    
        $this->type = $type;
        $this->class = $class;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
