<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @include('admin.components.menu.nav-item', [
            'text' =>  __('Dashboard'),
            'href' => route('home'),
            'active' => 'home*',
            'icon' => 'fas fa-home',
        ])
    </ul>
</nav>
