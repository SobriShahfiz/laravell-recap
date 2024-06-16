
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Pages</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <article>
        @hasSection('content')
        @yield('content')
        @else
        <p>No content found</p> 
    
        {{-- here is the best practise to include hassesction if there is no content inside this section --}}
    
        @endif
        
      </article>
</body>
</html>


