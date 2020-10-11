@extends('layouts.admin-layout');
@section('content')
    <div class="row">
        <!-- [ horizontal-layout ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Horizontal layout</h5>
                </div>
                <div class="card-body">
                    <p>In Horizontal Layout V2 - Navigation bar is set in a Horizontal way with fixed width container. It also showing/hidden while scrolling up/down.</p>
                    <div class="alert alert-info mb-0" role="alert">
                        <p class="mb-0">It is best suited for those applications where you required your navigation is set to be a Horizontal way with fixed width container.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ horizontal-layout ] end -->
    </div>
    <script src="js/horizontal-menu.js"></script>
    <script>
        (function() {
            if ($('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
                return;
            }
            try {
                window.layoutHelpers._getSetting("Rtl")
                window.layoutHelpers.setCollapsed(
                    localStorage.getItem('layoutCollapsed') === 'true',
                    false
                );
            } catch (e) {}
        })();
        $(function() {
            $('#layout-sidenav').each(function() {
                new SideNav(this, {
                    orientation: $(this).hasClass('sidenav-horizontal') ? 'horizontal' : 'vertical'
                });
            });
            $('body').on('click', '.layout-sidenav-toggle', function(e) {
                e.preventDefault();
                window.layoutHelpers.toggleCollapsed();
                if (!window.layoutHelpers.isSmallScreen()) {
                    try {
                        localStorage.setItem('layoutCollapsed', String(window.layoutHelpers.isCollapsed()));
                    } catch (e) {}
                }
            });
        });
        $(document).ready(function() {
            $("#pcoded").pcodedmenu({
                themelayout: 'horizontal',
                MenuTrigger: 'hover',
                SubMenuTrigger: 'hover',
            });
        });
    </script>

    <script src="js/analytics.js"></script>
@endsection
