<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <form wire:submit.prevent="placeOrder">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Billing Address</h3>
                            <div id="billing-address">
                                 <p class="row-in-form">
                                        <label for="fname">first name<span>*</span></label>
                                        <input  type="text" name="fname" value="" wire:model="firstname" placeholder="Your name">
                                        @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="lname">last name<span>*</span></label>
                                        <input type="text" name="lname" value="" wire:model="lastname" placeholder="Your last name">
                                        @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="email">Email Addreess:</label>
                                        <input type="email" name="email" value="" wire:model="email" placeholder="Type your email">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="phone">Phone number<span>*</span></label>
                                        <input type="number" name="phone" value="" wire:model="mobile" placeholder="10 digits format">
                                        @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">Line1:<span>*</span></label>
                                        <input type="text" name="add" value="" wire:model="line1" placeholder="Street at apartment number">
                                        @error('line1') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                     <p class="row-in-form">
                                        <label for="add">Line2:</label>
                                        <input type="text" name="add" value="" wire:model="line2" placeholder="Street at apartment number">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="country">Country<span>*</span></label>
                                        <input  type="text" name="country" value="" wire:model="country" placeholder="United States">
                                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>

                                     <p class="row-in-form">
                                        <label for="country">Province<span>*</span></label>
                                        <input  type="text" name="province" value="" wire:model="province" placeholder="United States">
                                        @error('province') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                   
                                    <p class="row-in-form">
                                        <label for="city">Ville<span>*</span></label>
                                        <input type="text" name="city" value="" wire:model="city"  placeholder="Ville">
                                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="zip-code">Postcode / ZIP:<span>*</span></label>
                                        <input type="number" name="zip-code" value="" wire:model="zipcode" placeholder="Your postal code">
                                        @error('zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                <p class="row-in-form fill-wife">
                                    <label class="checkbox-field">
                                        <input name="different-add"  id="different-add" value="1" wire:model="ship_to_different" type="checkbox">
                                        <span>Ship to a different address?</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>

                    @if($ship_to_different)
                        <div class="col-md-12">
                            <div class="wrap-address-billing">
                                <h3 class="box-title">Shipping Address</h3>
                                <div id="shipping-address">
                                    <p class="row-in-form">
                                        <label for="fname">first name<span>*</span></label>
                                        <input  type="text" name="fname" value="" wire:model="s_firstname" placeholder="Your name">
                                         @error('s_firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="lname">last name<span>*</span></label>
                                        <input type="text" name="lname" value="" wire:model="s_lastname" placeholder="Your last name">
                                         @error('s_lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="email">Email Addreess:</label>
                                        <input type="email" name="email" value="" wire:model="s_email" placeholder="Type your email">
                                         @error('s_email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="phone">Phone number<span>*</span></label>
                                        <input type="number" name="phone" value="" wire:model="s_mobile" placeholder="10 digits format">
                                         @error('s_mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">Line1:</label>
                                        <input type="text" name="add" value="" wire:model="s_line1" placeholder="Street at apartment number">
                                         @error('s_line1') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">Line2:</label>
                                        <input type="text" name="add" value="" wire:model="s_line2" placeholder="Street at apartment number">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="country">Country<span>*</span></label>
                                        <input  type="text" name="country" value="" wire:model="s_country" placeholder="United States">
                                         @error('s_country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                     <p class="row-in-form">
                                        <label for="country">Province<span>*</span></label>
                                        <input  type="text" name="province" value="" wire:model="s_province" placeholder="United States">
                                        @error('s_province') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="city">Ville<span>*</span></label>
                                        <input type="text" name="city" value="" wire:model="s_city"  placeholder="Ville">
                                         @error('s_city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="zip-code">Postcode / ZIP:</label>
                                        <input type="number" name="zip-code" value="" wire:model="s_zipcode" placeholder="Your postal code">
                                         @error('s_zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                  
                                </div>
                            </div>
                        </div>
                    @endif
                    
                </div>
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>
                        @if($paymentmode=='card')
                            <div class="wrap-address-billing">
                                @if(Session::has('stripe_error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('stripe_error') }}
                                </div>
                                @endif
                                <p class="row-in-form">
                                    <label for="card-no">Card number:</label>
                                    <input type="text" name="card-no" value="" wire:model="card_no" placeholder="Card Number">
                                     @error('card_no') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="exp-month">Expiry Month:</label>
                                    <input type="text" name="exp-month" value="" wire:model="exp_month" placeholder="MM">
                                     @error('exp_month') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="exp-year">Expiry Year:</label>
                                    <input type="text" name="exp-year" value="" wire:model="exp_year" placeholder="YYYY">
                                     @error('exp_year') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="cvc">CVC:</label>
                                    <input type="password" name="cvc" value="" wire:model="cvc" placeholder="CVC">
                                     @error('cvc') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                            </div>
                        @endif
                        
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="cod" wire:model="paymentmode" type="radio">
                                <span>Paiement à la livraison</span>
                                <span class="payment-desc">Commande payer à la livraison</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-visa" value="card" wire:model="paymentmode" type="radio">
                                <span>Debit / Crébit Card</span>
                                <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-paypal" value="paypal" wire:model="paymentmode" type="radio">
                                <span>Paypal</span>
                                <span class="payment-desc">You can pay with your credit</span>
                                <span class="payment-desc">card if you don't have a paypal account</span>
                            </label>
                            @error('paymentmode') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        @if(Session::has('checkout'))
                        <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">{{Session::get('checkout')['total']}} FCFA</span></p>
                        @endif
                        <!--a href="thankyou.html" class="btn btn-medium">Place order now</a-->
                        <button type="submit" class="btn btn-medium">Commandez maintenant!</button>
                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">Fixed $0</span></p>
                    </div>
                </div>
            </form>

     

        </div><!--end main content area-->
    </div><!--end container-->

</main>
