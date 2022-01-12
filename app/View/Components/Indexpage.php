<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Indexpage extends Component
{
    public $t1;
    public $s1;
    public $t2;
    public $s2;
    public $t3;
    public $s3;
    public $t4;
    public $s4;
   

    public function __construct($t1,$s1,$t2,$s2,$t3,$s3,$t4,$s4)
    {
        $this->t1=$t1;
        $this->s1=$s1;
        $this->t2=$t2;
        $this->s2=$s2;
        $this->t3=$t3;
        $this->s3=$s3;
        $this->t4=$t4;
        $this->s4=$s4;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.indexpage');
    }
}
