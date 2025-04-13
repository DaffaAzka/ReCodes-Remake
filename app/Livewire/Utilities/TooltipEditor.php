<?php

namespace App\Livewire\Utilities;

use Livewire\Component;

class TooltipEditor extends Component
{
    public $content = '';

    public $editorId;

    public function updateContent($content) {
        $this->content = $content;
        $this->dispatch('editorContentUpdated', content: $this->content);

    }

    public function mount($editorId = 'editor')
    {
        $this->editorId = $editorId;
    }

    public function render()
    {
        return view('livewire.utilities.tooltip-editor');
    }
}
