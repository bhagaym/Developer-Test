<?php

namespace App\Livewire\Image;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class AddImageModal extends Component
{
    use WithFileUploads;

    public $id;
    public $name;
    public $file_path;
    public $saved_file_path;

    public $edit_mode = false;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'file_path' => $this->edit_mode
                ? 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
                : 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    protected $listeners = [
        'delete_image' => 'deleteImage',
        'update_image' => 'updateImage',
        'reset_form' => 'resetFormImage',
        'new_image' => 'hydrate',
    ];

    public function resetFormImage()
    {
        $this->reset(['id', 'name', 'file_path', 'saved_file_path']);
    }

    public function render()
    {
        return view('livewire.image.add-image-modal');
    }

    public function submit()
    {
        // Validate the form input data
        $this->validate();

        DB::transaction(function () {
            // Prepare the data for creating a new image
            $data = [
                'name' => $this->name,
            ];

            if ($this->file_path) {
                $data['file_path'] = $this->file_path->store('images', 'public');
            }

            $image = Image::find($this->id);

            if ($image) {
                $this->edit_mode = true;
                if (!$this->file_path) {
                    unset($data['file_path']);
                }

                $image->update($data);
                $this->dispatch('success', __('Image updated successfully'));
            } else {
                $image = Image::create($data);
                $this->dispatch('success', __('Image uploaded successfully'));
            }
        });

        $this->resetFormImage();
        $this->dispatch('refreshTable');
    }

    public function deleteImage($id)
    {
        // Delete the user record with the specified ID
        Image::destroy($id);

        // Emit a success event with a message
        $this->dispatch('success', 'Image successfully deleted');
        $this->dispatch('refreshTable');
    }

    public function updateImage($id)
    {
        $this->edit_mode = true;

        $user = Image::find($id);

        $this->id = $user->id;
        $this->saved_file_path = $user->file_path;
        $this->name = $user->name;
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
