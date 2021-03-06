<div class="sidebar">
    <!-- sidebar logo -->
    <a href="index.html" class="sidebar__logo">
        <img src={{asset('img/logo.svg')}} alt="">
    </a>
    <!-- end sidebar logo -->
    
    <!-- sidebar user -->
    <div class="sidebar__user">
        <div class="sidebar__user-img">
            <img src={{asset('img/user.svg')}} alt="">
        </div>

        <div class="sidebar__user-title">
            <span>Admin</span>
            <p>John Doe</p>
        </div>

        <button class="sidebar__user-btn" type="button">
            <i class="icon ion-ios-log-out"></i>
        </button>
    </div>
    <!-- end sidebar user -->

    <!-- sidebar nav -->
    <ul class="sidebar__nav">
        <li class="sidebar__nav-item">
            <a href="{{ route('films.index') }}" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-keypad"></i> Dashboard</a>
        </li>

        <li class="sidebar__nav-item">
            <a href="catalog.html" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> Catalog</a>
        </li>

        <li class="sidebar__nav-item">
            <a href="users.html" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> Users</a>
        </li>

        <li class="sidebar__nav-item">
            <a href="comments.html" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> Comments</a>
        </li>

        <li class="sidebar__nav-item">
            <a href="reviews.html" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> Reviews</a>
        </li>
        
        <!-- dropdown -->
        <li class="dropdown sidebar__nav-item">
            <a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-copy"></i> Pages</a>

            <ul class="dropdown-menu sidebar__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
                <li><a href="add-item.html">Add item</a></li>
                <li><a href="edit-user.html">Edit user</a></li>
                <li><a href="signin.html">Sign In</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="forgot.html">Forgot password</a></li>
                <li><a href="404.html">404 Page</a></li>
            </ul>
        </li>
        <!-- end dropdown -->
    </ul>
    <!-- end sidebar nav -->
    
    <!-- sidebar copyright -->
    <div class="sidebar__copyright">© 2020 HotFlix. <br>Create by Gharsseloui Ghassen</a></div>
    <!-- end sidebar copyright -->
</div>
<!-- end sidebar -->