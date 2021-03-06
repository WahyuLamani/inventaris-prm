<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $title;
    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$title,$link = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       
        return view('components.modal');
    }
}
