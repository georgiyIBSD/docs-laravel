<!DOCTYPE html>
<html>
<head>
    <title>Browse Docs</title>
</head>
<body>
<h2>Docs</h2>

@forelse ($docs as $doc)
    @if($doc->hasAttribute('title'))
        <p>
            Title: {{ $doc->title }}<br>
        </p>
    @endif
@empty
    <p>No results</p>
@endforelse

</body>
</html>
