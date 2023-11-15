<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Title('Students Data')]

    // DATA TABLE FEATURE -----------------------------------------------------------
    public $search = '';
    public $page = '10';
    public $sortDirection = 'DESC';
    public $sortColumn = 'created_at';

    public function search()
    {
        $this->resetPage();
    }

    public function sortBy($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = ($this->sortDirection == "ASC") ? "DESC" : "ASC";
            return;
        }
        $this->sortColumn = $column;
        $this->sortDirection = 'ASC';
        $this->resetPage();
    }
    // END FEATURE -------------------------------------------------------------------

    #[On('update-list')]
    public function updateList($student)
    {
        //
    }

    #[On('after-delete')]
    public function afterDelete($student)
    {
        flash('The data has been deleted', 'warning');
    }

    public function render()
    {
        $students = Student::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('address', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate($this->page);
        return view('livewire.students.index', compact('students'));
    }
}
