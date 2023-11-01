<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   <div class="row">
                        <div class="col-md-6">
                             <h3 class="fw-semibold mb-0">Liste des Message</h3>
                        </div>
                        <div class="col-md-6 text-end">
                            
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
                                <th>#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Message</th>
                                <th>Date</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->comment }}</td>
                                <td>{{ $contact->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <div class="wrap-pagination-info">
                        {{ $contacts->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
