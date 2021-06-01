<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        <div class="add-new-btn">
                            <a href="{{ route('news.add') }}" class="btn btn-primary float-right">{{ __('Add News') }}</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped" id="table-2">
                        <thead>
                        <tr>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Summary') }}</th>
                            <th>{{ __('Language') }}</th>
                            <th>{{ __('Url') }}</th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Companies') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $row)
                            <tr>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->summary }}</td>
                                <td>{{ $row->language }}</td>
                                <td><a href="{{ $row->url }}" target="_blank">{{ $row->url }}</a></td>
                                <td><a href="{{ $row->image }}" target="_blank"><img src="{{ $row->image }}" height="50"/></a></td>
                                <td>
                                    @if(!empty($row->companies->toArray()))
                                        @foreach($row->companies as $com)
                                            {{ $com->company->id }} - {{ $com->company->name }}<br>
                                        @endforeach
                                    @else - @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $news->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
