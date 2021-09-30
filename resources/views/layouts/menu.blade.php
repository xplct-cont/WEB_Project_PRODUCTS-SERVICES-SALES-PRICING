<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('services.index') }}"
       class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <p>Services</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pricings.index') }}"
       class="nav-link {{ Request::is('pricings*') ? 'active' : '' }}">
        <p>Pricing</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('sales.index') }}"
       class="nav-link {{ Request::is('sales*') ? 'active' : '' }}">
        <p>Sales</p>
    </a>
</li>




