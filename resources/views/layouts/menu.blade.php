@role('admin')
<li class="{{ ( Request::is('users*') or Request::is('roles*') or Request::is('permissions*') ) ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-magic"></i> <span>Manage User</span>
            <span class="pull-right-container">
			    <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users</span></a>
        </li>
        <li class="{{ Request::is('roles*') ? 'active' : '' }}">
            <a href="{!! route('roles.index') !!}"><i class="fa fa-recycle"></i><span>Roles</span></a>
        </li>
        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}"><i class="fa fa-pagelines"></i><span>Permissions</span></a>
        </li>
    </ul>
</li>

<li class="{{ (Request::is('categories*')or Request::is('markets*') or Request::is('payments*')) ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-magic"></i> <span>Manage Markets</span>
            <span class="pull-right-container">
			    <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('categories*') ? 'active' : '' }}">
            <a href="{!! route('categories.index') !!}"><i class="fa fa-calendar"></i><span>Categories</span></a>
        </li>

        <li class="{{ Request::is('markets*') ? 'active' : '' }}">
            <a href="{!! route('markets.index') !!}"><i class="fa fa-edit"></i><span>Markets</span></a>
        </li>

        <li class="{{ Request::is('payments*') ? 'active' : '' }}">
            <a href="{!! route('payments.index') !!}"><i class="fa fa-money"></i><span>Payments</span></a>
        </li>

    </ul>
</li>

<li class="{{ (Request::is('products*')) ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-magic"></i> <span>Manage Products</span>
            <span class="pull-right-container">
			    <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::is('products*') ? 'active' : '' }}">
            <a href="{!! route('products.index') !!}"><i class="fa fa-venus-mars"></i><span>Products</span></a>
        </li>
        <li class="{{ Request::is('products.create') ? 'active' : '' }}">
            <a href="{!! route('products.create') !!}"><i class="fa fa-venus-mars"></i><span>Add Products</span></a>
        </li>

    </ul>
</li>

<li class="{{ (Request::is('accountTypes*') or Request::is('transactionTypes*') ) ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-magic"></i> <span>Manage Wallets</span>
            <span class="pull-right-container">
			    <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::is('accountTypes*') ? 'active' : '' }}">
            <a href="{!! route('accountTypes.index') !!}"><i class="fa fa-edit"></i><span>AccountTypes</span></a>
        </li>

        <li class="{{ Request::is('transactionTypes*') ? 'active' : '' }}">
            <a href="{!! route('transactionTypes.index') !!}"><i class="fa fa-edit"></i><span>TransactionTypes</span></a>
        </li>

    </ul>
</li>

@endrole


<li class="{{ (Request::is('cupons*')) ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-magic"></i> <span>Manage Promotions</span>
            <span class="pull-right-container">
			    <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('cupons*') ? 'active' : '' }}">
            <a href="{!! route('cupons.index') !!}"><i class="fa fa-cube"></i><span>Cupons</span></a>
        </li>


    </ul>
</li>

<li class="{{ Request::is('images*') ? 'active' : '' }}">
    <a href="{!! route('images.index') !!}"><i class="fa fa-edit"></i><span>Images</span></a>
</li>

<li class="{{ Request::is('profiles*') ? 'active' : '' }}">
    <a href="{!! route('profiles.index') !!}"><i class="fa fa-edit"></i><span>Profiles</span></a>
</li>



<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{!! route('accounts.index') !!}"><i class="fa fa-edit"></i><span>Accounts</span></a>
</li>

