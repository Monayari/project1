<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Coursespage extends Component
{
    public $title;

    public $text;
    public $des;
    public $txt;



    public function __construct($title,$text,$txt,$des)
    {
       $this->title=$title;

       $this->text=$text;
       $this->des=$des;
       $this->txt=$txt;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coursespage');
    }
}
