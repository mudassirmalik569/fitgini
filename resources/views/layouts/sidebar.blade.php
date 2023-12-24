<style>
    .deznav {
        background-color: #333;
        /* Background color for the sidebar */
        color: #fff;
        /* Text color */
        width: 250px;
        /* Set your desired width */
        padding: 20px;
        /* Add some padding to the sidebar */
    }

    .nav-item {
        margin-bottom: 10px;
        /* Add some spacing between navigation items */
    }

    .nav-link {
        color: #fff;
        /* Text color for navigation links */
        text-decoration: none;
        /* Remove underlines from links */
        display: block;
        padding: 10px;
        /* Add padding to navigation links */
        border-radius: 5px;
        /* Add rounded corners to links */
        transition: background-color 0.3s;
        /* Add a smooth transition effect on hover */
    }

    .nav-link:hover {
        background-color: #555;
        /* Change the background color on hover */
    }

    .nav-link i {
        margin-right: 10px;
        /* Add spacing between icon and text */

    }
</style>


<div class="deznav">
    <div class="logo">
        FitGenie 
    </div>
    <div class="deznav-scroll">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="fa fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user') }}" class="nav-link">
                <i class="fa fa-users"></i>
                <span>Users</span>
            </a>
        </li>
        {{-- Physical Activities Tracking --}}
        <li class="nav-item">
            <a href="{{ route('admin.activity') }}" class="nav-link">
                <i class="fa fa-running"></i>
                <span>Physical Activities</span>
            </a>
        </li>
        {{-- Nutrition Tracking --}}
        <li class="nav-item">
            <a href="{{ route('admin.nutrition') }}" class="nav-link">
                <i class="fa fa-utensils"></i>
                <span>Nutrition</span>
            </a>
        </li>
        {{-- Goals --}}
        <li class="nav-item">
            <a href="{{ route('admin.goals') }}" class="nav-link">
                <i class="fa fa-bullseye"></i>
                <span>Goals</span>
            </a>
        </li>

        {{-- Social Features --}}
        <li class="nav-item">
            <a href="{{ route('admin.social') }}" class="nav-link">
                <i class="fa fa-users"></i>
                <span>Social Features</span>
            </a>
        </li>



    </div>
</div>
