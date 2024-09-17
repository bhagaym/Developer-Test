<?php

namespace App\Livewire\Image;

use Livewire\Component;
use App\Models\Image;
use Livewire\WithPagination;

class ImageTable extends Component
{
    use WithPagination;
    public $search = '';

    protected $listeners = [
        'searchImage' => 'searchImage',
        'refreshTable' => 'render',
    ];

    public function searchImage($searchValue)
    {
        $this->search = $searchValue;
    }

    public function render()
    {
        $images = Image::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.image.image-table', [
            'images' => $images,
        ]);
    }

}
