<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\IPCRModel;
use Livewire\WithPagination;

#[Layout("layouts.humanResources")]
class AdminIPCRPage extends Component
{
    use WithPagination;

    public $search;
    public $sortField;
    public $sortDirection = 'asc';

    public function render()
    {
        // Ensure $sortField has a valid value before sorting
        if (!in_array($this->sortField, ['name', 'officedepartment', 'average', 'published_date'])) {
            $this->sortField = 'name'; // Set a default sorting field
        }

        // Apply search filter using the LIKE operator
        $ipcrs = IPCRModel::where('name', 'LIKE', "%{$this->search}%")
                          ->orderBy($this->sortField, $this->sortDirection)
                          ->paginate(10); // Adjust the number per page as needed

        // Pass the paginated IPCR records to the Blade view
        return view('livewire.admin-ipcr-page', [
            'ipcrs' => $ipcrs,
        ]);
    }

    public function search()
    {
        $this->resetPage(); // Reset pagination when performing a new search
    }
    
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = ! $this->sortDirection;
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc'; // Set default direction when changing sorting field
        }
    }
}
