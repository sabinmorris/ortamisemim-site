<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.headerLink')
    
</head>

<body class="index-page">
    
@include('inc.header')
    <main class="main">
            @yield('content')
            @include('inc.footer')
        
    </main>
</body>

</html>