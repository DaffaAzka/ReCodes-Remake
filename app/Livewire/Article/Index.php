<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    // protected $paginationTheme = '';
    public $article = [];
    public $load = false;

    public function setLoad() {
        $this->load = true;
    }
    public function render()
    {

        return view('livewire.article.index', [
            'articles'=> $this->load ? Article::orderBy("created_at","desc")->paginate(3) : []
        ]);
    }
}
