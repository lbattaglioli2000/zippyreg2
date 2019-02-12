<nav id='toplevelnav' class='navbar navbar-default' style='z-index: 9;'>
    <div class='container-fluid'>
        <div class='navbar-header'>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            <a class='navbar-brand' href='/' style='font-weight: bold;'>

                <span style='font-weight: bold; font-size: 1.5em; font-style: italic; display: inline;'>ZippyReg <i class="fab fa-draft2digital"></i></span>

            </a>
        </div>
        <div id='navbar' class='navbar-collapse collapse'>
            <ul class='nav navbar-nav'>
                <li><a href='/zippy/register/'>Register for an Event</a></li>
                <li><a href='/zippy/teams/'>Teams</a></li>
                <li><a href='/zippy/confirm-entry/'>Confirm</a></li>
                <li><a href='/faq'>FAQ</a></li>
                <li><a href='/contact'>Contact</a></li>
            </ul>
            <ul class='nav navbar-nav navbar-right'><li><a href='{{ route('login') }}'>Admin Login</a></li>
            </ul>
            <ul class='nav navbar-nav navbar-right'><li><a href='{{ route('register') }}'>Admin Registration</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>