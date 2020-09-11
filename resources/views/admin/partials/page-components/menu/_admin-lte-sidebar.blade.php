<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('admin/images/AdminLTELogo.png') }}"
            alt="Koderak Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8"
        >
        <span class="brand-text font-weight-light">Koderak - Admin</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="{{ asset('admin/images/user-default.png') }}"
                    class="img-circle elevation-2" alt="User Image"
                >
            </div>
            <div class="info">
                <a href="#" class="d-block text-capitalize">
                    {{ auth()->user()->name }}
                </a>
            </div>
        </div>

        @include('admin.partials.page-components.menu._admin-lte-sidebar-menu')
    </div>
</aside>
