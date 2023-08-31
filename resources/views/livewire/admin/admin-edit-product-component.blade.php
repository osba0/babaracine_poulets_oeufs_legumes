<div>
    <div class="container padding-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <span>Editer Produit</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('admin.products') }}" class="btn btn-primary">Tous les produits</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                          @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>Succés {{ Session::get('success_message') }}</strong>
                            </div>
                            @endif
                       <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct()">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom du Produit<span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom du produit" class="form-control input-md" wire:model="name"/>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Petit description </label>
                                <div class="col-md-7">
                                    <input id="short_description" type="hidden" name="content" value="{{$short_description}}">
                                    <trix-editor wire:ignore input="short_description"></trix-editor>
                                    <!--textarea class="form-control" placeholder="Petit description" wire:model="short_description"></textarea-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Description <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input id="description" type="hidden" name="content" value="{{$description}}">
                                    <trix-editor wire:ignore input="description"></trix-editor>
                                    <!--textarea class="form-control" placeholder="Description" wire:model="description"></textarea-->
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Poids</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="weight"/>
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Prix normal <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="regular_price"/>
                                    @error('regular_price') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Sale price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="sale_price"/>
                                   
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">SKU <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="SKU"/>
                                    @error('SKU') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outstock">Outstock</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Featured</label>
                                <div class="col-md-4">
                                    <select class="form-control"  wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantité <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="quantity"/>
                                    @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Etat</label>
                                <div class="col-md-4">
                                     <label class="switch">
                                          <input type="checkbox" value="1" disabled {{ $status==0?'':'checked' }} />
                                          <span class="slider round"></span>
                                        </label>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Image du produit</label>
                                <div class="col-md-4">
                                    <input type="file" wire:model="newimage"/>
                                     @error('newimage') <span class="text-danger">{{ $message }}</span> @enderror
                                    @if($newimage)
                                    <img src="{{ $newimage->temporaryUrl()}}" style="height: 60px"/>
                                    @else
                                    <img src="{{ asset('assets/images/products')}}/{{$image}}" style="height: 60px"/>
                                    @endif
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Categorie <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Choisir un categorie</option>
                                        @foreach($categories_product as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                     @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
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


<script>
    // Short description
    var trixEditor = document.getElementById("short_description")

    addEventListener("trix-blur", function(event) {
        @this.set('short_description', trixEditor.getAttribute('value'))
    })
    
    // Description

    var trixEditorDescription = document.getElementById("short_description")

    addEventListener("trix-blur", function(event) {
        @this.set('description', trixEditorDescription.getAttribute('value'))
    })
</script>
