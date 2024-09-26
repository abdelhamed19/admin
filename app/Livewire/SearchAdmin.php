<?php

namespace App\Livewire;

use App\Models\Admin;
use Livewire\Component;

class SearchAdmin extends Component
{
    public $search = '';         // Search term (admin email)
    public $results = [];        // Search results (list of admins)
    public $selectedAdmin = '';  // Stores the selected admin's ID

    // Update search term and fetch results based on email
    public function updatedSearch()
    {
        if ($this->search == '') {
            $this->results = []; // Clear results if search is empty
        } else {
            // Search for admins by email
            $this->results = Admin::where('email', 'like', '%' . $this->search . '%')->get();
        }
    }

    // Store the selected admin's ID when the user selects one from the dropdown
    public function updatedSelectedAdmin($adminId)
    {
        $this->selectedAdmin = $adminId;
    }
    public function render()
    {
        return view('livewire.search-admin');
    }
}
