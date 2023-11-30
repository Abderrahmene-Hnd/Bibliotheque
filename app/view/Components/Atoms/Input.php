<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $class;
    public $type;
    public $name;
    public $holder;
    public $model;

    /**
     * Create a new component instance.
     */
    public function __construct($class, $type, $name, $holder, $model)
    {
        $this->class = $class;
        $this->type = $type;
        $this->name = $name;
        $this->holder = $holder;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.input');
    }
}
