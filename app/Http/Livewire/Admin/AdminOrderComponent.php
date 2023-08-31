<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $orders = Order::orderby('created_at', 'DESC')->paginate(5);
        return view('livewire.admin.admin-order-component', ['orders' => $orders])->layout('layouts.admin');
    }
}
