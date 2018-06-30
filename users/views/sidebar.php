<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="assets/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a></li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a></li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a></li>
                        <li><a href="process/logoutProcess.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a></li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $username?>+<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
        </li>
        <li class="bold">
            <a href="index.php" class="waves-effect waves-cyan">
                <i class="mdi-action-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="bold">
            <a href="?page=contoh" class="waves-effect waves-cyan">
                <i class="mdi-communication-email"></i> Page
                <span class="new badge">4</span>
            </a>
        </li>
        <li class="bold">
            <a href="../users/survei.php" class="waves-effect waves-cyan">
                <i class="mdi-editor-insert-invitation"></i> Isi Survei
            </a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header waves-effect waves-cyan">
                        <i class="mdi-action-invert-colors"></i> Dropdown
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Page</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-cyan">
                        <i class="mdi-image-palette"></i> Dropdown
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Page</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold">
                    <a href="" class="waves-effect waves-cyan">
                        <i class="mdi-device-now-widgets"></i> Page
                        <span class="new badge"></span>
                    </a>
                </li>
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-cyan">
                        <i class="mdi-editor-border-all"></i> Dropdown
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Page</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-cyan">
                        <i class="mdi-editor-insert-comment"></i> Dropdown
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">page</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-cyan">
                        <i class="mdi-social-pages"></i> Dropdown
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Page</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold">
                    <a class="collapsible-header waves-effect waves-cyan">
                        <i class="mdi-editor-insert-chart"></i> Dropdown
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Page</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="li-hover"><div class="divider"></div></li>
        <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
        <li><a href=""><i class="mdi-image-grid-on"></i> Grid</a></li>
        <li><a href=""><i class="mdi-editor-format-color-fill"></i> Color</a></li>
        <li><a href=""><i class="mdi-communication-live-help"></i> Helpers</a></li>
        <li><a href=""><i class="mdi-action-swap-vert-circle"></i> Changelogs</a></li>
        <li class="li-hover"><div class="divider"></div></li>
        <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
        <li class="li-hover">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="sample-chart-wrapper">
                        <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
</aside>
<!-- END LEFT SIDEBAR NAV-->
