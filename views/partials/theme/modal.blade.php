<div id="site_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>

@if (Auth::check() === false && Request::url() != route('pxcms.user.login'))
<div id="login" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Existing Members Login</h4>
            </div>
            <div class="modal-body">
                {!! Theme::partial('core.login') !!}
            </div>
            <div class="modal-footer">
                <p>Dont have account? {!! HTML::link( route('pxcms.user.register'), 'Register') !!} here.</p>
            </div>
        </div>
    </div>
</div>
@endif
