<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Show extends Component
{

    public $article;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)->first();
        if (!$this->article) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.article.show');
    }
}
