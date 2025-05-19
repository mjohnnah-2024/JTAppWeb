<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Test extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <h1>Test Component</h1>
    <p>This is a test component.</p>
    <p>It is used to demonstrate how to create a component in Laravel.</p>
    <p>Components are reusable pieces of code that can be used in multiple places.</p>
    <p>They can be used to create complex UI elements, such as modals, alerts, and more.</p>
    <p>Components can also be used to create simple UI elements, such as buttons, links, and more.</p>
    <p>Components can be used to create reusable pieces of code that can be used in multiple places.</p>
    <p>They can be used to create complex UI elements, such as modals, alerts, and more.</p>
</div>
blade;
    }
}
