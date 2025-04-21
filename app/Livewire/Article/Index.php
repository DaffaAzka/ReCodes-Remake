<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    // protected $paginationTheme = '';
    public $load = false;

    public $article = [];

    public $pages = 3;

    public function setLoad() {
        $this->load = true;
        Article::latest()->take($this->pages)->get();
    }

    public function addPages() {
        $this->load = false;
        $this->pages = $this->pages + 6;

        $this->setLoad();
    }

    public function render()
    {
        $this->article = Article::latest()->take($this->pages)->get();
        return view('livewire.article.index', [
            'articles'=>  $this->article,
            'sizes' => Article::count(),
        ]);
    }
}
