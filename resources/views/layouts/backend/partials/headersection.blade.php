<div class="section-header">
  <h1>@if(Request::is('companies'))
          Companies
      @elseif (Request::is('news'))
          News
      @elseif (Request::is('add_news'))
          Add News
      @endif
  </h1>
  <div class="section-header-breadcrumb">
  	  @foreach(request()->segments() as $segment)
      <div class="breadcrumb-item">{{ $segment }}</div>
      @endforeach
  </div>
</div>