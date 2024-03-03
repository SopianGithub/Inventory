<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use Livewire\WithFileUploads;

class NewProduct extends Component
{
    use WithFileUploads;
    
    public $productName;
    public $productId;
    public $category;
    public $photo;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }
 
    protected $rules = [
        'productName' => 'required|min:6',
        'photo' => 'required|max:1024',
    ];
 
 
    public function saveProduct()
    {
        $validatedData = $this->validate([
            'productName' => 'required',
            'photo' => 'required',
        ]);

        $validatedData['name'] = $this->photo->store('files', 'public');

        dd($validatedData);
        // Contact::create($validatedData);
    }

    public function render()
    {
        return view('livewire.form.new-product');
    }
}
