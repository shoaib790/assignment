<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('dashboard') }}">{{ Str::limit(env('APP_NAME'),2) }}</a>
      </div>
      <ul class="sidebar-menu">
        <li class="{{ Request::is('companies') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('companies') }}"><i class="fas fa-coins"></i> <span>{{ __('Companies') }}</span></a>
        </li>
        <li class="{{ Request::is('news') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('news') }}"><i class="fas fa-copy"></i> <span>{{ __('News') }}</span></a>
        </li>
      </ul>
  </aside>
</div>