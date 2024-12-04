<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputUsername extends Component
{
    public $id;
    public $name;
    public $label;
    public $placeholder;
    public $value;
    public $class;

    public function __construct($id = 'username', $name = 'username', $label = 'Username', $placeholder = 'Enter your username', $value = '', $class = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->class = $class;
    }

 
    public function render(): View|Closure|string
    {
        return view('components.input-username');
    }
}
