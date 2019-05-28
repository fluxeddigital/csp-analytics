<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>@yield('title') - CSP Analytics</title>

  <link rel="stylesheet" href="{{ asset('lib/jquery-ui/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('lib/Hover/hover.css') }}">
  <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('lib/select2/select2.css') }}">
  <link rel="stylesheet" href="{{ asset('lib/jquery-toggles/toggles-full.css') }}">
  <link rel="stylesheet" href="{{ asset('lib/morrisjs/morris.css') }}">
  <link rel="stylesheet" href="{{ asset('css/analytics.css') }}">

  <script src="{{ asset('lib/modernizr/modernizr.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
  <script>
  $(document).ready(function() {
    $('#sites').select2();
  });
  </script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->

</head>

<body>

  <header>
    <div class="headerpanel">

      <div class="logopanel">
        <h2><a href="/dashboard">Analytics</a></h2>
      </div>
      <!-- logopanel -->

      <div class="headerbar">

        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

        <div class="searchpanel">
            <select id="sites" class="form-control" style="width: 100%" data-placeholder="Select a site">
              <option value="Construction Skills People">Construction Skills People</option>
              <option value="C&G Assessments">C&G Assessments</option>
              <option value="Investin Skills People">Investin Skills People</option>
            </select>
          <!-- input-group -->
        </div>

        <div class="header-right">
          <ul class="headermenu">
            <li>
              <div class="btn-group">
                @guest
                @else
                <button type="button" class="btn btn-logged" data-toggle="dropdown">
                  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                  <span class="caret"></span>
                </button>
              @endif
                <ul class="dropdown-menu pull-right">
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="glyphicon glyphicon-log-out"></i> {{ __('Logout') }}</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <!-- header-right -->
      </div>
      <!-- headerbar -->
    </div>
    <!-- header-->
  </header>

  <section>

    <div class="leftpanel">
      <div class="leftpanelinner">

        <!-- ################## LEFT PANEL PROFILE ################## -->

        <div class="media leftpanel-profile">
          <div class="media-body">
              @guest
              @else
              <h4 class="media-heading">{{ Auth::user()->first_name }}</h4>
              @endif
          </div>
        </div>

        <div class="tab-content">

          <!-- ################# MAIN MENU ################### -->

          <div class="tab-pane active" id="mainmenu">
            <h5 class="sidebar-title">Audience</h5>
            <ul class="nav nav-pills nav-stacked nav-quirk">
              <li class=""><a href="/audience/overview"><span>Overview</span></a></li>
              <li class=""><a href=""><span>Active Users</span></a></li>
              <li class="nav-parent">
                <a href=""><span>Demographics</span></a>
                <ul class="children">
                  <li><a href="">Overview</a></li>
                  <li><a href="">Age</a></li>
                  <li><a href="">Gender</a></li>
                  <li><a href="">Referrals</a></li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href=""><span>Geo</span></a>
                <ul class="children">
                  <li><a href="">Language</a></li>
                  <li><a href="">Location</a></li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href=""><span>Behaviour</span></a>
                <ul class="children">
                  <li><a href="">New vs Returning</a></li>
                  <li><a href="">Frequency & Recency</a></li>
                  <li><a href="">Engagement</a></li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href=""><span>Technology</span></a>
                <ul class="children">
                  <li><a href="">Browser & OS</a></li>
                  <li><a href="">Network</a></li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href=""><span>Mobile</span></a>
                <ul class="children">
                  <li><a href="">Overview</a></li>
                  <li><a href="">Devices</a></li>
                </ul>
              </li>
            </ul>

            <h5 class="sidebar-title">Acquisition</h5>
            <ul class="nav nav-pills nav-stacked nav-quirk">
              <li class=""><a href=""><span>Overview</span></a></li>
              <li class="nav-parent">
                <a href=""><span>All Traffic</span></a>
                <ul class="children">
                  <li><a href="">Channels</a></li>
                  <li><a href="">Treemaps</a></li>
                  <li><a href="">Source / Medium</a></li>
                  <li><a href="">Referrals</a></li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href=""><span>Google Ads</span></a>
                <ul class="children">
                  <li><a href="">Campaigns</a></li>
                  <li><a href="">Treemaps</a></li>
                  <li><a href="">Site Links</a></li>
                  <li><a href="">Referrals</a></li>
                  <li><a href="">Bid Adjustments</a></li>
                  <li><a href="">Keywords</a></li>
                  <li><a href="">Search Queries</a></li>
                  <li><a href="">Hour of Day</a></li>
                  <li><a href="">Final URLs</a></li>
                  <li><a href="">Display Targeting</a></li>
                  <li><a href="">Video Campaigns</a></li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href=""><span>Search Console</span></a>
                <ul class="children">
                  <li><a href="">Landing Pages</a></li>
                  <li><a href="">Countries</a></li>
                  <li><a href="">Devices</a></li>
                  <li><a href="">Queries</a></li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href=""><span>Social</span></a>
                <ul class="children">
                  <li><a href="">Overview</a></li>
                  <li><a href="">Network Referrals</a></li>
                  <li><a href="">Landing Pages</a></li>
                  <li><a href="">Conversions</a></li>
                  <li><a href="">Plug-ins</a></li>
                  <li><a href="">Users Flow</a></li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href=""><span>Campaigns</span></a>
                <ul class="children">
                  <li><a href="">All Campaigns</a></li>
                  <li><a href="">Paid Keywords</a></li>
                  <li><a href="">Organic Keywords</a></li>
                  <li><a href="">Cost Analysis</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- tab-pane -->
        </div>
        <!-- tab-content -->
      </div>
      <!-- leftpanelinner -->
    </div>
    <!-- leftpanel -->

    <div class="mainpanel">

      <div class="contentpanel">

        @yield('content')

      </div>
      <!-- contentpanel -->

    </div>
    <!-- mainpanel -->

  </section>




  <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
  <script src="{{ asset('lib/select2/select2.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.js') }}"></script>
  <script src="{{ asset('lib/jquery-toggles/toggles.js') }}"></script>
  <script src="{{ asset('lib/morrisjs/morris.js') }}"></script>
  <script src="{{ asset('lib/raphael/raphael.js') }}"></script>
  <script src="{{ asset('lib/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('lib/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('lib/flot-spline/jquery.flot.spline.js') }}"></script>
  <script src="{{ asset('lib/jquery-knob/jquery.knob.js') }}"></script>
  <script src="{{ asset('js/quirk.js') }}"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>

</body>

</html>
