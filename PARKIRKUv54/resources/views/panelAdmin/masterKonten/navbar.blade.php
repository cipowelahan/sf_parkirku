<div id="navbar" class="navbar navbar-default ace-save-state">
  <div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" style="background-color: #2d9567;" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
      <span class="sr-only">Toggle sidebar</span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
      <a href="{{ route('adminPanel') }}" class="navbar-brand">
        <small>
          PARKIRKU v0.90  {{Auth::user()->username}}
          <i class="fa fa-exchange"></i>
        </small>
      </a>
    </div>
  </div><!-- /.navbar-container -->
</div>
