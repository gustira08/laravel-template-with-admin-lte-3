<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @include('admin.components.menu.nav-item', [
            'text' =>  __('Dashboard'),
            'href' => route('admin.home'),
            'active' => 'admin/dashboard*',
            'icon' => 'fas fa-home',
        ])
    </ul>
</nav>
