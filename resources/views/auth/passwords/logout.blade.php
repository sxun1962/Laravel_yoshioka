<!-- ログアウトのフォーム -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- ログアウトのリンク -->
<a href="{{ route('logout') }}"
   onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>
