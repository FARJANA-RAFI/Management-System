<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="{{URL::to('home')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <a class="nav-link" href="{{ URL::to('session') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Session
            </a>

            <a class="nav-link" href="{{ URL::to('semester') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Semester
            </a>

            <a class="nav-link" href="{{ URL::to('add_department') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Department
            </a>

            <a class="nav-link" href="{{ URL::to('course') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Course
            </a>

            <a class="nav-link" href="{{ URL::to('manage_course') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Manage Course
            </a>

            <a class="nav-link" href="{{ URL::to('manage_users') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Manage Users
            </a>

            <a class="nav-link" href="{{ URL::to('assignment') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Add Question
            </a>

            <a class="nav-link" href="{{ URL::to('all_question') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Question
            </a>

            <!-- for students -->
            <a class="nav-link" href="{{ URL::to('enrollment') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Enrollment
            </a>

            <a class="nav-link" href="{{ URL::to('view_enrolled_course') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Enrolled Course
            </a>

            <a class="nav-link" href="{{ URL::to('logout') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Logout
            </a>
        </div>
    </div>
</nav>