<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Modal extends Component
{
    public $id = ''; // this is ID MODAL
    public $modalTitle = 'Create New Data';
    public $submit = 'store';
    public $student = '';

    #[Rule('required|min:3|regex:/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/')]
    public $name = '';
    #[Rule('required|min:3|email')]
    public $email = '';
    #[Rule('required|min:3')]
    public $address = '';
    #[Rule('required|min:8|numeric')]
    public $phone = '';

    public function store()
    {
        $validated = $this->validate();

        $student = Student::create($validated);

        $this->dispatch('update-list', $student->id);

        flash('New data has successfully created', 'success');

        $this->reset();
    }

    #[On('edit')]
    public function edit($id)
    {
        $this->modalTitle = "Edit Data";
        $this->submit = "update";
        $this->student = Student::findOrFail($id);
        $this->name = $this->student->name;
        $this->email = $this->student->email;
        $this->address = $this->student->address;
        $this->phone = $this->student->phone;
    }

    public function update()
    {
        $validated = $this->validate();
        $this->modalTitle = "Edit Data";
        $student = Student::findOrFail($this->student->id)->update($validated);

        $this->dispatch('update-list', $this->student->id);

        flash('The data has successfully updated', 'success');

        $this->reset();
    }

    public function close()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.students.modal');
    }
}
