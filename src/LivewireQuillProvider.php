<?php

namespace LaraPack\LivewireQuill;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireQuillProvider extends ServiceProvider
{
    public function boot()
    {
        // Daftarkan Livewire component
        Livewire::component('lara-pack.livewire-quill', Input::class);

        // Muat file view dari folder "resources/views"
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lara-pack.livewire-quill');
    }
}