﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('admin/assets/css/font-awesome.css')}}" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="{{url('admin/assets/css/basic.css')}}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{url('admin/assets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="{{url('admin/assets/img/logo-invoice.png')}}" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="{{url('/adminlogin')}}" role="form" method="post">
                                    @csrf
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="email" name="email" class="form-control" placeholder="Your Username" <?php if(isset($_COOKIE['aemail'])){ echo $_COOKIE['aemail'];} ?> />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="pass" class="form-control"  placeholder="Your Password"  <?php if(isset($_COOKIE['apass'])){ echo $_COOKIE['apass'];} ?> />
                                        </div>
                                       
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="rem" value="rem"/> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index.html" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <input type="submit" name="submit" class="btn btn-primary" value="Login Now" />
                                    <hr />
                                    Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
