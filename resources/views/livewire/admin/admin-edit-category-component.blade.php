<div>
    <div class="container padding-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <span>Edit categorie</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('admin.categories') }}" class="btn btn-primary">Toutes les catégories</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                          @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>Succés {{ Session::get('success_message') }}</strong>
                            </div>
                            @endif
                       <form class="form-horizontal" wire:submit.prevent="updateCategory()">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom de la catégorie" class="form-control input-md" wire:model="name"/>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Position <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control input-md" wire:model="sort"/>
                                    @error('sort') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Etat</label>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                       <label class="switch">
                                          <input type="checkbox" wire:model="status">
                                          <span class="slider round"></span>
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Icone <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="file" wire:model="icone" {{ ($icone == ""? '':'disabled') }} />
                                    <div>
                                    <img src="{{ asset('assets/category/'.$icone)}}" style="height: 50px; margin-top: 5px">
                                    <button class="bg-transparent text-danger"><i class="fa fa-times"></i></button>
                                    </div>
                                    @error('icone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-warning">Enregistrer</button>
                                </div>
                            </div>
                           
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
