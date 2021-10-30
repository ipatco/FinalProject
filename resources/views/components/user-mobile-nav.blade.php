
<div class="col-lg-12">
    <div class="dashboard_navigationbar dn db-1199">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
            <ul id="myDropdown" class="dropdown-content">
                <li><a href="{{ route('user.account') }}"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                <li><a href="{{ route('user.account.course') }}"><span class="flaticon-online-learning"></span> My Courses</a></li>
                <li><a href="{{ route('user.account.transaction') }}"><span class="flaticon-shopping-bag-1"></span> Transactions</a></li>
                <li><a href="{{ route('user.account.message') }}"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                <li><a href="{{ route('user.account.materials') }}"><span class="flaticon-resume"></span> Course Materials</a></li>
                <li><a href="{{ route('user.account.certificates') }}"><span class="flaticon-graduation-cap"></span> Certificates</a></li>
                <li><a href="{{ route('user.account.setting') }}"><span class="flaticon-settings"></span> Settings</a></li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="flaticon-logout"></span> Logout</a></li>
                </form>
            </ul>
        </div>
    </div>
</div>
