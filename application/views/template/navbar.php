<nav class="IBM-nav navbar navbar-default-IBM navbar-default nav-bar-one navbar-fixed-top" role="navigation">
    <div class="container nav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand-IBM navbar-brand" href="./">
            <img src="<?php echo base_url() ?>assets/img/ibmsf.jpg" class="brandlogo" alt="IBM iX">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-nav1 nav-bar-one">
                                    <li><a href="<?php echo base_url() ?>index.php/value">
                            <div class="nav-option <?php if($this->uri->segment(1)=="value"){echo "selected-nav-option";}?>">Value Proposition</div>
                        </a></li>
                              <li><a href="<?php echo base_url() ?>index.php/solution">
                            <div class="nav-option <?php if($this->uri->segment(1)=="solution"){echo "selected-nav-option";}?>">Solution</div>
                        </a></li>
                                    <li><a href="<?php echo base_url() ?>index.php/outcome">
                            <div class="nav-option <?php if($this->uri->segment(1)=="outcome"){echo "selected-nav-option";}?>">Case Studies</div>
                        </a></li>
                        <li><a href="<?php echo base_url() ?>index.php/whatsnext">
                            <div class="nav-option <?php if($this->uri->segment(1)=="whatsnext"){echo "selected-nav-option";}?>">What&rsquo;s Next?</div>
                        </a></li>
                                                                </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>