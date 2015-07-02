<!DOCTYPE html>
<html lang="en">
{!! Theme::partial('theme.head') !!}
<body class="{{ $currentRoute or '' }}">

{!! Theme::partial('theme.header') !!}
<div class="site-container">
    <div class="col-md-12">
        <div class="alert alert-info">
            <p><strong>Information:</strong> This site is currently a WIP. More functionality will be added as it is developed! Check back often!</p>
        </div>
    </div>

    @yield('layout-content')
</div>
{!! Theme::partial('theme.footer') !!}

{!! Theme::partial('theme.modal') !!}

{!! Theme::asset()->container('footer')->scripts() !!}
@yield('scripts')

@if(App::environment() == 'production' && ($ga = config('cms.core.app.google-analytics', null)) !== null)
<script>
    <!-- Google Analytics -->
    (function (i,s,o,g,r,a,m) {i['GoogleAnalyticsObject']=r;i[r]=i[r]||function () {
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ $ga }}', 'auto');
    ga('send', 'pageview');
</script>
@endif

@yield('layout-scripts')

</body>
</html>
