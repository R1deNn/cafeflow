<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class HomePageText extends Component
{

    public $words = ['кафе', 'ресторана', 'бара', 'клуба'];
    public $currentIndex = 0;
    public $currentWord = 'кафе';

    public function mount()
    {
        $this->rotateWords();
    }

    public function rotateWords()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->words);
        $this->currentWord = $this->words[$this->currentIndex];
        $this->dispatch('wordChanged');
    }

    public function render()
    {
        return view('livewire.pages.home-page-text');
    }
}
