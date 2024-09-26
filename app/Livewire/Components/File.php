<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\WithFileUploads;

class File extends Component
{
    use WithFileUploads;
    
    public $id;
    public $name;
    public $wire;
    public $value;
    public $class;
    public $disabled;
    public $file;
    public $filename;
    public $rename;
    public $success;
    
    public $data = [
        'name' => null,
        'extension' => null,
        'dir' => null,
    ];
    
    public function mount()
    {
        $oldData = old($this->name, $this->value);
        
        if ($oldData) {
            $data = json_decode($oldData, true);
            $this->data = [
                'name' => $data['name'],
                'extension' => $data['extension'],
                'dir' => $data['dir'],
            ];
            $this->filename = $this->data['name'];
            $this->success = true;
        }
    }
    
    public function updatedFile()
    {
        $fileName = $this->file->getClientOriginalName();
        
        $this->data['name'] = pathinfo($fileName, PATHINFO_FILENAME);
        $this->data['extension'] = pathinfo($fileName, PATHINFO_EXTENSION);
        $this->data['dir'] = time() . rand(100, 999) . '.' . $this->data['extension'];
        
        $this->file->storeAs('public', $this->data['dir']);
        $this->filename = $this->data['name'];
        $this->rename = true;
    }
    
    public function onRename()
    {
        $this->rename = true;
        $this->success = false;
    }
    
    public function delete()
    {
        $this->data = [
            'name' => null,
            'extension' => null,
            'dir' => null,
        ];
        $this->value = null;
        $this->rename = false;
        $this->success = false;
    }
    
    public function cancel() 
    {
        $this->filename = $this->data['name'];
        $this->rename  = false;
        
        if ($this->value) {
            $this->success = true;
        } else {
            $this->success = false;
        }
    }
    
    public function submit()
    {
        $this->data['name'] = $this->filename;
        $this->value = json_encode($this->data);
        
        $this->rename = false;
        $this->success = true;
    }
    
    public function render()
    {
        return view('livewire.components.file', [
            'id' => $this->id,
            'name' => $this->name,
            'wire' => $this->wire,
            'value' => $this->value,
            'class' => $this->class,
            'disabled' => $this->disabled
        ]);
    }
}
