<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['wordpres', 'Bootstrap'],
                'title' => 'Website E-commerce',
                'image' => url('/img/project1.png'),
                'github' => 'http://epicerie.kesug.com/?i=1'
            ],
            [
                'category' => ['GIS', 'WEB'],
                'title' => 'Map Bandara',
                'image' => url('/img/project2.png'),
                'github' => 'https://vincensatoru.github.io/airportmap_gustiarno/#1/49/-4'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'Portofolio Berbasis WEB',
                'image' => url('/img/project3.png'),
                'github' => 'https://github.com/thecodeholic/laravel-image-manipulation-rest-api'
            ],
            
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
