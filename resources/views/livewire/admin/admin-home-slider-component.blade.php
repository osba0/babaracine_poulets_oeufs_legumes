<div>
    <div class="container padding-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <div class="row">
                            <div class="col-md-6">
                                <span>All Slides </span>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('admin.addhomeslider') }}" class="btn btn-danger"><i class="fa fa-plus"></i> Add New Slide</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
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
                                        <a class="text-warning" href="{{ route('admin.edithomeslider', ['slide_id'=> $slider->id]) }}">
                                            <i class="fa fa-edit fa-2x"></i>
                                        </a>
                                         <a onclick="confirm('Etes-vous sûre de bien vouloir supprimer?') || event.stopImmediatePropagation()" class="text-danger cursor-pointer" wire:click.prevent="deleteSlide({{$slider->id}})">
                                            <i class="fa fa-times fa-2x"></i>
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
</div>
