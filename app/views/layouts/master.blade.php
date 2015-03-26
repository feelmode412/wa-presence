<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		@if ($pageTitle)
			{{ $pageTitle }} |
		@endif
		WEBARQ Presence
	</title>
</head>
<body>
	<h1>WEBARQ Presence</h1>

	{{ $content }}
	
	{{ View::make('site::js_helpers') }}
	{{ Site::generateJs() }}
</body>
</html>