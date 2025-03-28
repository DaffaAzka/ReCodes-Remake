<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Lists extends Component
{
    public function render()
    {

        $articles = Article::orderBy("created_at","desc")->paginate(3);

        return view('livewire.article.lists', [
            'articles'=> $articles
        ]);
    }
}
