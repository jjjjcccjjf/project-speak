
<section id="container" class="">
  <!--header start-->
  <header class="header white-bg">
    <div class="sidebar-toggle-box">
      <i class="fa fa-bars"></i>
    </div>
    <!--logo start-->
    <a href="<?php echo base_url() ?>" class="logo" >Project<span>Speak</span></a>
    <!--logo end-->
    <div class="top-nav ">
      <ul class="nav pull-right top-menu">
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <!-- <img alt="" src="img/avatar1_small.jpg"> -->
            <span class="username">Welcome back, <?php echo $this->session->userdata('name'); ?></span>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu extended logout">
            <li><a href="<?php echo base_url('cms/login/logout') ?>"><i class="fa fa-key"></i> Log Out</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </header>
  <!--header end-->
  <!--sidebar start-->
  <aside>
    <div id="sidebar"  class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <li>
          <a href="<?php echo base_url('cms') ?>"
            class="<?php echo $this->uri->segment(1) === 'cms' && ($this->uri->segment(2) === null || $this->uri->segment(2) === 'dashboard') ? 'active': ''; ?>">
            <i class="fa fa-dashboard"></i>
            <span>Admin Management</span>
          </a>
        </li>        
 

        <li><a <?php echo $this->uri->segment(2) === 'stations' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/stations') ?>"><i class="fa fa-laptop"></i> Stations</a></li>
      
        <li>
          <a href="<?php echo base_url('cms/ratings') ?>"
            class="<?php echo $this->uri->segment(2) === 'ratings' ? 'active': ''; ?>">
            <i class="fa fa-star"></i>
            <span>Ratings</span>
          </a>
        </li>
      
        <li>
          <a href="<?php echo base_url('cms/internal-members') ?>"
            class="<?php echo $this->uri->segment(2) === 'internal-members' ? 'active': ''; ?>">
            <i class="fa fa-user"></i>
            <span>Internal members</span>
          </a>
        </li>


       <li class="sub-menu">
          <a href="javascript:;" class="<?php echo (in_array($this->uri->segment(3), ['services', 'people', 'experience']))  ? 'active': ''; ?>">
            <i class="fa fa-tasks"></i>
            <span>Rateables</span>
          </a>
          <ul class="sub" >
            <li><a <?php echo $this->uri->segment(3) === 'services' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/rateables/services') ?>">Services</a></li>
            <li><a <?php echo $this->uri->segment(3) === 'people' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/rateables/people') ?>">People</a></li>
            <li><a <?php echo $this->uri->segment(3) === 'experience' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/rateables/experience') ?>">Experience</a></li>
          </ul>
        </li>



       <li class="sub-menu">
          <a href="javascript:;" class="<?php echo (in_array($this->uri->segment(2), ['departments', 'divisions', 'sub-agencies']))  ? 'active': ''; ?>">
            <i class="fa fa-cogs"></i>
            <span>Groups</span>
          </a>
          <ul class="sub" >
            <li><a <?php echo $this->uri->segment(2) === 'divisions' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/divisions') ?>">Divisions</a></li>
            <li><a <?php echo $this->uri->segment(2) === 'departments' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/departments') ?>">Departments</a></li>
            <li><a <?php echo $this->uri->segment(2) === 'sub-agencies' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/sub-agencies') ?>">Sub agencies</a></li>
          </ul>
        </li>

        <li>
          <hr>
        </li>
          <li><a <?php echo $this->uri->segment(2) === 'devices' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/devices') ?>"><i class="fa fa-mobile-phone"></i> Device Assignment / Summary</a></li>
        <li><a <?php echo $this->uri->segment(3) === 'stations' ? 'style="color:#ff6c60"': ''; ?> href="<?php echo base_url('cms/rateables/stations') ?>"><i class="fa fa-quote-left"></i> Rateables Assignment</a></li>
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>
  <!--sidebar end-->
