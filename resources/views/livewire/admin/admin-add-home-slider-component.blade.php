<div>
    <div class="container padding-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <span>Add New Slide</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('admin.homeslider') }}" class="btn btn-primary">All Sliders</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                          @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>Succés {{ Session::get('success_message') }}</strong>
                            </div>
                            @endif
                       <form class="form-horizontal" wire:submit.prevent="storeSlide()">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Title <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Title" class="form-control input-md" wire:model="title"/>
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Subtitle </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Subtitle" class="form-control input-md" wire:model="subtitle"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Price </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="price"/>
                                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Link </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Link" class="form-control input-md" wire:model="link"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
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
                                <label class="col-md-4 control-label">Image <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="file" wire:model="image">
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                    @if($image)
                                    <img src="{{ $image->temporaryUrl() }}" width="120"/>
                                    @endif
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
</div>
