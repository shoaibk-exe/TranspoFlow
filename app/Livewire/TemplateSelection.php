<?php

namespace App\Livewire;

use Livewire\Component;
 
class TemplateSelection extends Component
{
    public $selectedTemplate;

    public function selectTemplate($template)
    {
        // Set the selected template value
        $this->selectedTemplate = $template;

        // For now, just show a message (you can later add logic to render a page based on the selection)
        session()->flash('template', $template); // Store the selected template in session
    }

    public function render()
    {
        return view('livewire.template-selection');
    }
}
