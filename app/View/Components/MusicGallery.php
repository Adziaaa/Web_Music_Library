<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MusicGallery extends Component
{
    public $songs;
    public $albums;
    public $artists;
    /**
     * Create a new component instance.
     */
    public function __construct($songs, $albums, $artists)
    {
        $this->songs = $songs;
        $this->albums = $albums;
        $this->artists = $artists;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.music-gallery');
    }
}
