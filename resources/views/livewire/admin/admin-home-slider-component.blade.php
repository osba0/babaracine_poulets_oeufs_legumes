<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card panel-default">
                <div class="card-heading p-4">
                   <div class="row">
                        <div class="col-md-6">
                            <h2>All Slides </h2>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('admin.addhomeslider') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Slide</a>
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>SubTitle</th>
                                <th>Price</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Date</th>

                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td><img src="{{ asset('assets/images/sliders/'.$slider->image)}}" style="height: 80px"/></td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->subtitle }}</td>
                                <td>{{ $slider->price }}</td>
                                <td>{{ $slider->link }}</td>
                                <td>
                                     <label class="switch">
                                      <input type="checkbox" disabled  {{ $slider->status==0?'':'checked' }} />
                                      <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>{{ $slider->created_at }}</td>
                                <td class="text-right">
                                    <a class="btn btn-warning" href="{{ route('admin.edithomeslider', ['slide_id'=> $slider->id]) }}">
                                        Editer
                                    </a>
                                     <a onclick="confirm('Etes-vous sûre de bien vouloir supprimer?') || event.stopImmediatePropagation()" class="btn btn-danger cursor-pointer" wire:click.prevent="deleteSlide({{$slider->id}})">
                                        Supprimer
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <div class="wrap-pagination-info">
                        {{ $sliders->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

