<?php

namespace App\view\Components\Blocs;

use Livewire\Component;

class Navbars extends Component
{
    public $nmbr=1;
    public $bg_pry_color;
    public $bg_pry_hov_color;
    public $bg_sec_color;
    public $bg_sec_hov_color;
    public $txt_pry_color;
    public $txt_pry_hov_color;
    public $txt_sec_color;
    public $txt_sec_hov_color;
    public $currentLink;
    public $class;

    public function render()
    {
        return view('components.blocs.navbars');
    }
}
