<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Store extends Component
{
    #[Validate('required|min:3|max:255')]
    public $title = '';
    public $content = '';

    public $image = '';

    public function createSlugged() {
        return Str::slug($this->title) . '-' . Str::random(5);
    }

    public function store() {
        $this->validate();
        $article = Article::create([
            'title' => $this->title,
            'slug' => $this->createSlugged(),
            'content' => $this->content,
            'image' => $this->image,
            'user_id' => Auth::id(),
        ]);

        if ($article->save()) {
            // session()->flash('success', [
            //     'title' => 'Article created successfully',
            //     'message' => 'You can view your article now',
            // ]);

            return redirect()->route('article.content', [
                'slug' => $article->slug,
            ]);
        }

    }

    #[On('editorContentUpdated')]
    public function updatedContent($content)
    {
        $this->content = $content;
    }

    public function render()
    {
        return view('livewire.article.store');
    }
}
