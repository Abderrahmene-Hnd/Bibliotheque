<?php

namespace App\view\Pages\Backend\Admin\WebsiteManager;

use App\Models\Calltoaction;
use App\Models\Card;
use App\Models\Footer;
use App\Models\Layout;
use App\Models\Navbar;
use App\Models\HeroSection;
use App\Models\Sidebar;
use Livewire\Component;

class Index extends Component
{

    public $navbar = false;
    public $herosection = false;
    public $sidebar = false;
    public $footer = false;
    public $card = false;
    public $calltoaction = false;

    public $navbar_type;
    public $navbar_bg_pry_color;
    public $navbar_bg_pry_hov_color;
    public $navbar_bg_sec_color;
    public $navbar_bg_sec_hov_color;
    public $navbar_txt_pry_color;
    public $navbar_txt_pry_hov_color;
    public $navbar_txt_sec_color;
    public $navbar_txt_sec_hov_color;


    public $sidebar_type;
    public $sidebar_bg_pry_color;
    public $sidebar_bg_pry_hov_color;
    public $sidebar_bg_sec_color;
    public $sidebar_bg_sec_hov_color;
    public $sidebar_txt_pry_color;
    public $sidebar_txt_pry_hov_color;
    public $sidebar_txt_sec_color;
    public $sidebar_txt_sec_hov_color;


    public $footer_type;
    public $footer_bg_pry_color;
    public $footer_bg_pry_hov_color;
    public $footer_bg_sec_color;
    public $footer_bg_sec_hov_color;
    public $footer_txt_pry_color;
    public $footer_txt_pry_hov_color;
    public $footer_txt_sec_color;
    public $footer_txt_sec_hov_color;

    public $herosection_type;
    public $herosection_bg_pry_color;
    public $herosection_bg_pry_hov_color;
    public $herosection_bg_sec_color;
    public $herosection_bg_sec_hov_color;
    public $herosection_txt_pry_color;
    public $herosection_txt_pry_hov_color;
    public $herosection_txt_sec_color;
    public $herosection_txt_sec_hov_color;

    public $card_type;
    public $card_bg_pry_color;
    public $card_bg_pry_hov_color;
    public $card_bg_sec_color;
    public $card_bg_sec_hov_color;
    public $card_txt_pry_color;
    public $card_txt_pry_hov_color;
    public $card_txt_sec_color;
    public $card_txt_sec_hov_color;

    public $calltoaction_type;
    public $calltoaction_bg_pry_color;
    public $calltoaction_bg_pry_hov_color;
    public $calltoaction_bg_sec_color;
    public $calltoaction_bg_sec_hov_color;
    public $calltoaction_txt_pry_color;
    public $calltoaction_txt_pry_hov_color;
    public $calltoaction_txt_sec_color;
    public $calltoaction_txt_sec_hov_color;

    public function mount()
    {
    }

    public function navbarEdit()
    {
        $this->navbar = true;
    }
    public function herosectionEdit()
    {
        $this->herosection = true;
    }
    public function sidebarEdit()
    {
        $this->sidebar = true;
    }
    public function footerEdit()
    {
        $this->footer = true;
    }
    public function cardEdit()
    {
        $this->card = true;
    }
    public function calltoactionEdit()
    {
        $this->calltoaction = true;
    }
    public function setNavbar()
    {
        if (Navbar::first() == null) {
            Navbar::Create([
                'type' => $this->navbar_type,
                'bg_pry_color' => $this->navbar_bg_pry_color,
                'bg_pry_hov_color' => $this->navbar_bg_pry_hov_color,
                'bg_sec_color' => $this->navbar_bg_sec_color,
                'bg_sec_hov_color' => $this->navbar_bg_sec_hov_color,
                'txt_pry_color'=> $this->navbar_txt_pry_color,
                'txt_pry_hov_color'=> $this->navbar_txt_pry_hov_color,
                'txt_sec_color'=> $this->navbar_txt_sec_color,
                'txt_sec_hov_color'=> $this->navbar_txt_sec_hov_color,
            ]);
        } else {
            Navbar::first()->Update([
                'type' => $this->navbar_type,
                'bg_pry_color' => $this->navbar_bg_pry_color,
                'bg_pry_hov_color' => $this->navbar_bg_pry_hov_color,
                'bg_sec_color' => $this->navbar_bg_sec_color,
                'bg_sec_hov_color' => $this->navbar_bg_sec_hov_color,
                'txt_pry_color'=> $this->navbar_txt_pry_color,
                'txt_pry_hov_color'=> $this->navbar_txt_pry_hov_color,
                'txt_sec_color'=> $this->navbar_txt_sec_color,
                'txt_sec_hov_color'=> $this->navbar_txt_sec_hov_color,
            ]);
        }
        redirect('/dashboard/website');
    }
    public function setHerosection()
    {
        if (HeroSection::first() == null) {
            HeroSection::Create([
                'type' => $this->herosection_type,
                'bg_pry_color' => $this->herosection_bg_pry_color,
                'bg_pry_hov_color' => $this->herosection_bg_pry_hov_color,
                'bg_sec_color' => $this->herosection_bg_sec_color,
                'bg_sec_hov_color' => $this->herosection_bg_sec_hov_color,
                'txt_pry_color'=> $this->herosection_txt_pry_color,
                'txt_pry_hov_color'=> $this->herosection_txt_pry_hov_color,
                'txt_sec_color'=> $this->herosection_txt_sec_color,
                'txt_sec_hov_color'=> $this->herosection_txt_sec_hov_color,
            ]);
        } else {
            HeroSection::first()->Update([
                'type' => $this->herosection_type,
                'bg_pry_color' => $this->herosection_bg_pry_color,
                'bg_pry_hov_color' => $this->herosection_bg_pry_hov_color,
                'bg_sec_color' => $this->herosection_bg_sec_color,
                'bg_sec_hov_color' => $this->herosection_bg_sec_hov_color,
                'txt_pry_color'=> $this->herosection_txt_pry_color,
                'txt_pry_hov_color'=> $this->herosection_txt_pry_hov_color,
                'txt_sec_color'=> $this->herosection_txt_sec_color,
                'txt_sec_hov_color'=> $this->herosection_txt_sec_hov_color,
            ]);
        }
        redirect('/dashboard/website');
    }
    public function setSidebar()
    {
        if (Sidebar::first() == null) {
            Sidebar::Create([
                'type' => $this->sidebar_type,
                'bg_pry_color' => $this->sidebar_bg_pry_color,
                'bg_pry_hov_color' => $this->sidebar_bg_pry_hov_color,
                'bg_sec_color' => $this->sidebar_bg_sec_color,
                'bg_sec_hov_color' => $this->sidebar_bg_sec_hov_color,
                'txt_pry_color'=> $this->sidebar_txt_pry_color,
                'txt_pry_hov_color'=> $this->sidebar_txt_pry_hov_color,
                'txt_sec_color'=> $this->sidebar_txt_sec_color,
                'txt_sec_hov_color'=> $this->sidebar_txt_sec_hov_color,
            ]);
        } else {
            Sidebar::first()->Update([
                'type' => $this->sidebar_type,
                'bg_pry_color' => $this->sidebar_bg_pry_color,
                'bg_pry_hov_color' => $this->sidebar_bg_pry_hov_color,
                'bg_sec_color' => $this->sidebar_bg_sec_color,
                'bg_sec_hov_color' => $this->sidebar_bg_sec_hov_color,
                'txt_pry_color'=> $this->sidebar_txt_pry_color,
                'txt_pry_hov_color'=> $this->sidebar_txt_pry_hov_color,
                'txt_sec_color'=> $this->sidebar_txt_sec_color,
                'txt_sec_hov_color'=> $this->sidebar_txt_sec_hov_color,
            ]);
        }
        redirect('/dashboard/website');
    }
    public function setFooter()
    {
        if (Footer::first() == null) {
            Footer::Create([
                'type' => $this->footer_type,
                'bg_pry_color' => $this->footer_bg_pry_color,
                'bg_pry_hov_color' => $this->footer_bg_pry_hov_color,
                'bg_sec_color' => $this->footer_bg_sec_color,
                'bg_sec_hov_color' => $this->footer_bg_sec_hov_color,
                'txt_pry_color'=> $this->footer_txt_pry_color,
                'txt_pry_hov_color'=> $this->footer_txt_pry_hov_color,
                'txt_sec_color'=> $this->footer_txt_sec_color,
                'txt_sec_hov_color'=> $this->footer_txt_sec_hov_color,
            ]);
        } else {
            Footer::first()->Update([
                'type' => $this->footer_type,
                'bg_pry_color' => $this->footer_bg_pry_color,
                'bg_pry_hov_color' => $this->footer_bg_pry_hov_color,
                'bg_sec_color' => $this->footer_bg_sec_color,
                'bg_sec_hov_color' => $this->footer_bg_sec_hov_color,
                'txt_pry_color'=> $this->footer_txt_pry_color,
                'txt_pry_hov_color'=> $this->footer_txt_pry_hov_color,
                'txt_sec_color'=> $this->footer_txt_sec_color,
                'txt_sec_hov_color'=> $this->footer_txt_sec_hov_color,
            ]);
        }
        redirect('/dashboard/website');
    }
    public function setCard()
    {
        if (Card::first() == null) {
            Card::Create([
                'type' => $this->card_type,
                'bg_pry_color' => $this->card_bg_pry_color,
                'bg_pry_hov_color' => $this->card_bg_pry_hov_color,
                'bg_sec_color' => $this->card_bg_sec_color,
                'bg_sec_hov_color' => $this->card_bg_sec_hov_color,
                'txt_pry_color'=> $this->card_txt_pry_color,
                'txt_pry_hov_color'=> $this->cardr_txt_pry_hov_color,
                'txt_sec_color'=> $this->cardr_txt_sec_color,
                'txt_sec_hov_color'=> $this->card_txt_sec_hov_color,
            ]);
        } else {
            Card::first()->Update([
                'type' => $this->card_type,
                'bg_pry_color' => $this->card_bg_pry_color,
                'bg_pry_hov_color' => $this->card_bg_pry_hov_color,
                'bg_sec_color' => $this->card_bg_sec_color,
                'bg_sec_hov_color' => $this->card_bg_sec_hov_color,
                'txt_pry_color'=> $this->card_txt_pry_color,
                'txt_pry_hov_color'=> $this->cardr_txt_pry_hov_color,
                'txt_sec_color'=> $this->cardr_txt_sec_color,
                'txt_sec_hov_color'=> $this->card_txt_sec_hov_color,
            ]);
        }
        redirect('/dashboard/website');
    }

    public function setCalltoaction()
    {
        if (Calltoaction::first() == null) {
            Calltoaction::Create([
                'type' => $this->calltoaction_type,
                'bg_pry_color' => $this->calltoaction_bg_pry_color,
                'bg_pry_hov_color' => $this->calltoaction_bg_pry_hov_color,
                'bg_sec_color' => $this->calltoaction_bg_sec_color,
                'bg_sec_hov_color' => $this->calltoaction_bg_sec_hov_color,
                'txt_pry_color'=> $this->calltoaction_txt_pry_color,
                'txt_pry_hov_color'=> $this->calltoaction_txt_pry_hov_color,
                'txt_sec_color'=> $this->calltoaction_txt_sec_color,
                'txt_sec_hov_color'=> $this->calltoaction_txt_sec_hov_color,
            ]);
        } else {
            Calltoaction::first()->Update([
                'type' => $this->calltoaction_type,
                'bg_pry_color' => $this->calltoaction_bg_pry_color,
                'bg_pry_hov_color' => $this->calltoaction_bg_pry_hov_color,
                'bg_sec_color' => $this->calltoaction_bg_sec_color,
                'bg_sec_hov_color' => $this->calltoaction_bg_sec_hov_color,
                'txt_pry_color'=> $this->calltoaction_txt_pry_color,
                'txt_pry_hov_color'=> $this->calltoaction_txt_pry_hov_color,
                'txt_sec_color'=> $this->calltoaction_txt_sec_color,
                'txt_sec_hov_color'=> $this->calltoaction_txt_sec_hov_color,
            ]);
        }
        redirect('/dashboard/website');
    }
    public function render()
    {
        return view('pages.backend.admin.website-manager.index')->layout('components.templates.dash', ['title' => 'Website Manager']);
    }
}
