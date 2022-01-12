<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slidbar extends Component
{
   public $txt;
   public $des;
   public $img;
   public $alt;
    public function __construct($txt,$des,$img,$alt)
    {
        $this->txt=$txt;
        $this->des=$des;
        $this->img=$img;
        $this->alt=$alt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slidbar');
    }
}
