<?php

namespace App\View\Components;

use App\Models\Thread;
use Illuminate\View\Component;

class ThreadCard extends Component
{
    public $thread;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Thread $thread)
    {
        $this->thread = $thread;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.thread-card');
    }

}
