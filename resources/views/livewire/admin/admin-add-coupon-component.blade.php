<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <span>Add Coupon</span>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('admin.categories') }}" class="btn btn-primary">All coupons</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                      @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Succés {{ Session::get('success_message') }}</strong>
                        </div>
                        @endif
                   <form class="form-horizontal" wire:submit.prevent="storeCoupon()">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Coupon Code <span class="text-danger">*</span></label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Coupon Code" class="form-control input-md" wire:model="code"/>
                                @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Coupon Type <span class="text-danger">*</span></label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="type">
                                    <option>Select</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="percente">Percente</option>
                                </select>
                                @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Coupon Value <span class="text-danger">*</span></label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Coupon Value" class="form-control input-md" wire:model="value"/>
                                @error('value') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Cart Value <span class="text-danger">*</span></label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Cart Value" class="form-control input-md" wire:model="cart_value"/>
                                @error('cart_value') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                         <div class="form-group" wire:ignore>
                            <label class="col-md-4 control-label">Expirate Date <span class="text-danger">*</span></label>
                            <div class="col-md-4">
                                <input type="date" id="expiry_date" placeholder="Expirate Date" class="form-control input-md" wire:model="expiry_date"/>
                                @error('expiry_date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success btn-lg">Enregistrer</button>
                            </div>
                        </div>
                       
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>



