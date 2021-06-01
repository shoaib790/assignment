<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped" id="table-2">
                        <thead>
                        <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Slug') }}</th>
                            <th>{{ __('Name') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $companies->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
