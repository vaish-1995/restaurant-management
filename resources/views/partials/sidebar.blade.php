<div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('dashboard') }}">
                <i class="bi bi-speedometer2 me-2"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">

        <a class="nav-link active" href="{{ route('orders') }}">
            <i class="bi bi-cart me-2"></i>
                Orders
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('customers') }}">
                <i class="bi bi-people me-2"></i>
                Customers
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-gear me-2"></i>
                Settings
            </a>
        </li> -->

        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">
                <i class="bi bi-envelope me-2"></i> Contact
            </a>
        </li>
    </ul>
</div>
