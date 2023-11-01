<main id="main" class="main-site">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                       <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title fw-semibold mb-0">Modification de Mot de passe</h4>
                            </div>
                            <div class="col-md-6 text-end">
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('password_success'))
                            <div class="alert alert-success">
                                <strong>{{ Session::get('password_success') }}</strong>
                            </div>
                        @endif
                         @if(Session::has('password_error'))
                            <div class="alert alert-danger">
                                <strong>{{ Session::get('password_error') }}</strong>
                            </div>
                        @endif

                        <form wire:submit.prevent="changePassword" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mot de pass actuel</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Mot de passe actuel" class="form-control input-md" name="current_password" wire:model="current_password">
                                    @error('current_password')
                                    <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Nouveau mot de pass</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Nouveau passe actuel" class="form-control input-md" name="password" wire:model="password">
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Confirmer le mot de passe</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Mot de passe actuel" class="form-control input-md" name="password_confirmation" wire:model="password_confirmation">
                                    @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </div>
                            </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
