﻿<section class="pager-section">
    <div class="fixed-bg pager-bg"></div>
    <div class="container">
        <div class="pager-details text-center">
            <h2 class="page-title">Edit Profile</h2>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url();?>" title="">Home</a></li>
                <li><span>Profile</span></li>
            </ul>
        </div>
    </div>
</section>
<style type="text/css">
    .user-menu-btn { border-radius: 0; }
    .list-sec { padding-top: 250px; }
    .profileDash { padding-bottom: 250px; }
    @media (max-width: 768px){
        .list-sec { padding-top: 60px !important; }
        .profileDash { padding-bottom:50px !important; }
    }
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<section class="block profileDash">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <center style="background: #323031;padding: 21px;">
                    <span>
                        <img src="<?php if($profile['image']!=''){ echo base_url($profile['image']);}?>" alt="<?php echo $profile['name'];?>" class="UserImage">
                        <h1 style="padding-top: 10px;color: #fff;font-size: 24px;text-transform: uppercase;font-weight: 600;"><?php echo $this->session->userdata('user_name');?></h1>
                    </span>
                </center>
                <ul class="UserMenuDefault" style="border-top: 1px solid;border-bottom: 1px solid;">
                    <li><a href="<?php echo base_url('user-profile');?>" class="btn btn-default btn-block user-menu-btn">Dashboard</a></li>
                    <li><a href="<?php echo base_url('upload-song');?>" class="btn btn-default btn-block user-menu-btn">Upload Songs</a></li>
                    <li><a href="<?php echo base_url('my-songs');?>" class="btn btn-default btn-block user-menu-btn">My Songs</a></li>
                    <li><a href="<?php echo base_url('change-password');?>" class="btn btn-default btn-block user-menu-btn">Change Password</a></li>
                    <li><a href="<?php echo base_url('subscribe-now');?>" class="btn btn-default btn-block user-menu-btn">Subscription</a></li>
                    <li><a href="<?php echo base_url('edit-profile');?>" class="btn btn-default btn-block user-menu-btn">Edit Profile</a></li>
                    <li><a href="<?php echo base_url('front/logout');?>" class="btn btn-default btn-block user-menu-btn">Logout</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="contact-page-form">
                    <h3 class="sb-title">Edit Profile
                        
                    </h3>
                    <div class="post-comments">
                        <form method="post" action="<?php echo base_url("profile/UpdateUserProfile"); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div <?php if($this->session->flashdata('message') == ''){ ?> class="alert alert-danger alert-dismissible" style="display: none;" <?php }else { ?> class="alert alert-success alert-dismissible fade show" <?php } ?>>
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                         <?php echo $this->session->flashdata('message'); ?>
                                    </div>
                                    <div <?php if($this->session->flashdata('emessage') == ''){ ?> class="alert alert-danger alert-dismissible" style="display: none;" <?php }else { ?> class="alert alert-danger alert-dismissible fade show" <?php } ?>>
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                         <?php echo $this->session->flashdata('emessage'); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control name" readonly placeholder="Email*" value="<?php echo $profile['email'];?>" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" maxlength="10" name="mobile_no" class="form-control name" value="<?php echo $profile['mobile_no'];?>" placeholder="Mobile No*" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control name" value="<?php echo $profile['name'];?>" placeholder="Full Name" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="profession" class="form-control name" value="<?php echo $profile['profession'];?>" placeholder="Profession" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="dob" class="form-control name" value="<?php echo date('Y-m-d',strtotime($profile['dob']));?>" placeholder="Date of Birth" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control name" value="<?php echo $profile['address'];?>" placeholder="Address" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control name"  value="<?php echo $profile['city'];?>" placeholder="City" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="state" class="form-control name" value="<?php echo $profile['state'];?>" placeholder="State" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control name" style="border-radius: 0px;">
                                    </div><!--form-group end-->
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="form-group m-0">
                                        <button type="submit" class="btn-default" id="submit">Submit <span></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>