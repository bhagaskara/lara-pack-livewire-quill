<?php

namespace LaraPack\LivewireQuill;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class Input extends Component
{
    #[Modelable]
    public string | null $value = '';

    #[Locked]
    public string $quillId;

    public string $theme;
    public int $debounceTime;

    public function mount(string $theme = 'snow', int $debounceTime = 500): void
    {
        $this->quillId = 'ql-editor-' . Str::uuid()->toString();
        $this->theme = $theme;
        $this->debounceTime = $debounceTime;
    }

    public function render(): View
    {
        return view('livewire-quill::input');
    }
}
