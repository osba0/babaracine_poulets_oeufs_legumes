<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   <div class="row">
                        <div class="col-md-6">
                             <h3 class="fw-semibold mb-0">Toutes les catégories</h3>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('admin.addcategory') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nouvelle Categorie</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Succés {{ Session::get('message') }}</strong>
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th>Etat</th>
                                <th>Ordre</th>
                                <th>Icone</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                   
                                     <label class="switch">
                                      <input type="checkbox"  {{ $category->status==0?'':'checked' }} />
                                      <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>{{ $category->sort }}</td>
                                <td><img src="{{ asset('assets/category/'.$category->picture)}}" style="height: 40px"/></td>
                                <td class="text-end">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a class="btn btn-warning me-2" href="{{ route('admin.editcategory', ['category_slug'=> $category->slug]) }}">
                                            Edit
                                        </a>
                                         <a onclick="confirm('Etes-vous sûre de bien vouloir supprimer?') || event.stopImmediatePropagation()" class="btn btn-danger cursor-pointer" wire:click.prevent="deleteCategory({{$category->id}})">
                                            Supprimer
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <div class="wrap-pagination-info">
                        {{ $admin_categories->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
