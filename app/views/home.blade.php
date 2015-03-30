<p>Hi, {{ Auth::check() ? Auth::user()->email.'.' : 'welcome.' }}</p>

<ul>
	<li><a href="{{ url(Auth::check() ? '?logout=1' : '?userId=2') }}">Log {{ Auth::check() ? 'out' : 'in' }}</a></li>
	<li><a href="{{ url() }}">Home</a></li>
</ul>