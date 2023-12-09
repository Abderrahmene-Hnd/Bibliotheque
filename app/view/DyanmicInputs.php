<?php

namespace App\view;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Collection;

class DyanmicInputs extends Component
{
    public $contacts;
    protected $rules=[
        'contacts.*.name'=>'required',
        'contacts.*.email'=>'required|email',
    ];

    public function mount()
    {
        $this->contacts= Contact::all();
    }
    public function add()
    {
        $this->contacts->push(Contact::make());
    }
    public function save()
    {
        $this->validate();
        $this->contacts->each->save();
        session()->flash('success', 'Contacts saved successfully');
    }
    public function delete($key)
    {
        $this->contacts->forget($key);
        $this->contacts->get($key)?->delete();
    }
    public function render()
    {
        return view('dyanmic-inputs')->layout('components.templates.guest', ['title' => 'Dynamique']);
    }
}
