<?php

namespace App\view\Components\Sections;

use App\Models\Notification;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $currentLink;
    public $class;
    public $notifications;
    public function __construct($class)
    {
        $this->class = $class;
        $this->currentLink = request()->path();
        $this->notifications= Notification::all();
    }
    public function render()
    {
        return view('components.sections.navbar');
    }
}
