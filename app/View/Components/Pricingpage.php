<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pricingpage extends Component
{
    public $title;
    public $pric;
    public $s;
    // public $list;
    public $btn;

    public function __construct($title,$pric,$s,$btn)
    {
        $this->title=$title;
        $this->pric=$pric;
        $this->s=$s;
        // $this->list=$list;
        $this->btn=$btn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pricingpage');
    }
}
