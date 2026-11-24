<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">@yield('page-title', 'Dashboard')</h4>
            @hasSection('breadcrumbs')
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        @yield('breadcrumbs')
                    </ol>
                </div>
            @endif
        </div>
    </div>
</div>
