<ul class='sidebar-ul' style="list-style-type:none">
    <li>
        <a href="{{url('/')}}" class="{{ (\Request::is('/')) ? 'active' : '' }}"><i class="fas fa-home"></i>Dashboard</a>
    </li>
    <li>
        <a href="{{url('products')}}" class="{{ (\Request::is('products') || \Request::is('products/*')) ? 'active' : '' }}"><i class="fas fa-user"></i>Products</a>
    </li>
    <li>
        <a href="#"><i class="fas fa-bell"></i>Waiters</a>
    </li>
    <li>
        <a href="#"><i class="fas fa-list-alt"></i>Menu</a>
    </li>
    <li>
        <a href="#"><i class="fas fa-cog"></i>Settings</a>
    </li>
</ul>