<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
    @yield('page_head')
    <title>@yield('title', 'Home') | {{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
        @include('includes.nav')
        <main class="py-4">
            @yield('body')
        </main>
        @include('includes.footer')
    </div>
    @yield('scripts')
</body>
</html>
