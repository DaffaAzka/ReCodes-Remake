<?php

namespace App\Livewire\Article;

use Livewire\Component;

class Store extends Component
{
    public $content = '';

    public function updateContent($value)
    {
        $this->content = $value;
    }
    public function render()
    {
        return view('livewire.article.store');
    }
}
