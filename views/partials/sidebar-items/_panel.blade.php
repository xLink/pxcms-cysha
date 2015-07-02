<div class="panel panel-default">
    <div class="panel-heading">
        <span class="panel-title pull-left">{{{ array_get($menu, 'title') }}}</span>
        <button class="btn btn-default btn-sm pull-right hide" data-panel="toggle"><span class="text">Show</span></button>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
    @if (view()->exists(array_get($menu, 'view')))
        @include(array_get($menu, 'view'))
    @else
        <p>No view found for {{ array_get($menu, 'view') }}</p>
    @endif
    </div>
</div>
