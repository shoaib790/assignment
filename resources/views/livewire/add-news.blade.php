<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ __('Add News') }}</h4>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>{{ __('woops!') }}</strong> {{ __('There were some problems with your input.') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('news.add') }}" class="basicform_with_redirect" data-redirect="{{route('news')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Title') }}</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" placeholder="Title" required name="title">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Summary') }}</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="form-control" placeholder="Summary" name="summary" maxlength="500"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Language') }}</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" placeholder="Language" required name="language">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('URL') }}</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" placeholder="URL" required name="url">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Image') }}</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Companies') }}</label>
                        <div class="col-sm-12 col-md-7">
                            <select name="companies[]" class="form-control" style="min-height: 200px" multiple>
                                @foreach($companies as $row)
                                    <option value="{{$row->id}}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary btn-lg  basicbtn">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
