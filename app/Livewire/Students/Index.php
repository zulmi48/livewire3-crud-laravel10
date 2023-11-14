<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Title('Students Data')]

    public $search = '';
    public $sortDirection = 'ASC';
    public $sortColumn = 'id';

    public function search()
    {
        $this->resetPage();
    }

    public function sortBy($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = ($this->sortDirection == "ASC")? "DESC" : "ASC";
            return;
        }
        $this->sortColumn = $column;
        $this->sortDirection = 'ASC';
        $this->resetPage();
    }

    public function render()
    {
        $students = Student::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('address', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(10);
        return view('livewire.students.index', compact('students'));
    }
}
