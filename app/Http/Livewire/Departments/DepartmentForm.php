<?php

namespace App\Http\Livewire\Departments;

use App\Models\Department;
use Livewire\Component;

class DepartmentForm extends Component
{
    public $name;

    public function submit()
    {
        Department::create(['name' => $this->name]);
    }

    public function render()
    {
        return view('livewire.departments.department-form');
    }
}
