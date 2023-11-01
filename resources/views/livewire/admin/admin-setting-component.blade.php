<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title fw-semibold mb-0">Configurations</h5>
                        </div>
                        <div class="col-md-6 text-end">
                            
                        </div>
                    </div>
                </div>
                <div class="card-body">
                      @if(Session::has('message'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message') }}</strong>
                        </div>
                        @endif
                   <form class="form-horizontal" wire:submit.prevent="saveStttings()">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Email" class="form-control input-md" wire:model="email"/>
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Téléphone</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Téléphone" class="form-control input-md" wire:model="phone"/>
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Téléphone 2</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Téléphone 2" class="form-control input-md" wire:model="phone2"/>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Adresse</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Adresse" class="form-control input-md" wire:model="adresse"/>
                                @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Map</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Map" class="form-control input-md" wire:model="map"/>
                               
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Facebook</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Facebook" class="form-control input-md" wire:model="facebook"/>
                               
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Twitter</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Twitter" class="form-control input-md" wire:model="twitter"/>
                               
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Youtube</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Youtube" class="form-control input-md" wire:model="youtube"/>
                               
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Instagram</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Instagram" class="form-control input-md" wire:model="instagram"/>
                               
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
