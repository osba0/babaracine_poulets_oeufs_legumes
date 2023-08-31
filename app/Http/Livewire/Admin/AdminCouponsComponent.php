<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
use Livewire\WithPagination;

class AdminCouponsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

     public function deleteCoupn($coupon_id){
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message', 'Coupon a été supprimée avec succés!');
    }

    public function render()
    {
        $coupons = Coupon::paginate(10);
        return view('livewire.admin.admin-coupons-component', ['coupons'=> $coupons])->layout('layouts.admin');
    }
}
