<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Component;

class DeleteConfirmation extends Component
{
    public $student = '';

    #[On('delete')]
    public function confirm($id)
    {
        $this->student = Student::findOrFail($id);
    }

    public function delete()
    {
        Student::destroy($this->student->id);

        $this->dispatch('after-delete', $this->student->id);
    }

    public function render()
    {
        return view('livewire.delete-confirmation');
    }
}
