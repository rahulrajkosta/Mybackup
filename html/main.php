<!doctype html>
<html lang="en">
<head>

<title>:: 3x Power Trading App :: Home</title>
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="3x Power Trading">

<link rel="icon" href="http://3xpowertrading.com/wp-content/uploads/2022/04/icon.png" type="image/png">


<?php
	$main=$this->router->fetch_class();
	$sub=$this->router->fetch_method();
	$try=$main.$sub;
if($try=='dashboardindex'){?>
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/charts-c3/plugin.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/color_skins.css">	
	
<?php }
if($try!='dashboardindex'){
?>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/sweetalert/sweetalert.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/color_skins.css">
<style>
    td.details-control {
    background: url('assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('assets/images/details_close.png') no-repeat center center;
    }
	.user-photo {
	  background: #1c1e22;
	  color: #feb800;
	  padding: 15px;
	}
	.navbar-fixed-top .navbar-btn .logo {
	  width: 150px;
	}
	#left-sidebar .navbar-brand .logo {
	  width: 225px;
	}
</style>

<?php }
if($sub=='add' || $sub=='edit'){
?>

<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/nouislider/nouislider.min.css" />
<?php }?>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="http://3xpowertrading.com/wp-content/uploads/2022/04/icon.png" width="48" height="48" alt="3x Power Trading"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="<?=base_url();?>"><img src="https://3xpowertrading.com/wp-content/uploads/2022/04/logo.png" alt="3x Power Trading" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav">
                             
                </ul>
            </div>
            
            <div class="navbar-right">
                
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                       
                        <li><a href="<?=site_url();?>/main/logout" class="icon-menu"><i class="icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

  
    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="<?=base_url();?>"><img src="https://3xpowertrading.com/wp-content/uploads/2022/04/logo.png" alt="3x Power Trading" class="img-fluid logo"></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <span class="user-photo">
					<?php
					// function acronym( $string = '' ) {
						// $words = explode(' ', $string);
						// if ( ! $words ) {
							// return false;
						// }
						// $result = '';
						// $words = array_map('trim', $words);
						// foreach ( $words as $word ) $result .= $word[0];
						// return strtoupper( $result );
					// }
					$String=$_SESSION['first_name'].' '.$_SESSION['last_name'];
					echo strtoupper( $String );
					?>
					</span>
					
					
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>   
					
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?=$_SESSION['first_name'].' '.$_SESSION['last_name'];?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li style="color: white;"><i class="icon-user"></i>&nbsp;
							<? echo $_SESSION['username'];?>
							<br><br>
							Your Referral ID<br><?php echo $_SESSION['refid'];?>
						</li>
						<li class="divider"></li>
						<!-- <li><a href=""><i class="fa fa-edit"></i>Change Username</a></li> -->
						<li><a href="<?=site_url();?>/main/passchange"><i class="fa fa-key"></i>Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="<?=site_url();?>/main/logout"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
            </div>  
			
			<?php if($_SESSION['role']!='1'){?>
			
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li <?php if($try=='dashboardindex'){?>  class="active" <?php }?> ><a href="<?php echo base_url();?>"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li <?php if($try=='uPaymentindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/upayments"><i class="fa fa-money"></i><span>My Payments</span></a></li>

					<li <?php if($try=='Recvindex'){?>  class="active" <?php }?>>
                        <a href="#user" class="has-arrow"><i class="icon-user"></i><span>Payment Structures</span></a>
                        <ul>
                            <li <?php if($try=='BasePay'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/upayouts" style='font-size:13px;'>Base Payments</a></li>
							
							 <li <?php if($try=='BasePay'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/wpayouts" style='font-size:13px;'>Wallet Payments</a></li>
							
							
                            <li <?php if($try=='RefPay'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/ubonus" style='font-size:13px;'>Booster Payments</a></li>
                            <li <?php if($try=='RefPay'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/main/commision" style='font-size:13px;'>Commission Payments</a></li>               
                        </ul>
                    </li>


                    <li <?php if($try=='Payment_logsindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/ureceiving"><i class="fa fa-dollar"></i><span>My Payout Logs</span></a></li>
                    <li <?php if($try=='Referalsindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/ureferal"><i class="icon-users"></i><span>My Referral List</span></a></li>
					
					<li <?php if($try=='Referalsindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/invite"><i class="icon-users"></i><span>Invite People</span></a></li>
					
					<!--
					<li <?php if($try=='Ref_bonusindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/ubonus"><i class="icon-badge "></i><span>My Referral Bonus</span></a></li>
					-->
                </ul>
            </nav> 
			<?php }else{?>
			
			<nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
				
					 <li <?php if($try=='dashboardindex'){?>  class="active" <?php }?> ><a href="<?php echo base_url();?>"><i class="icon-home"></i><span>Dashboard</span></a></li>
					 
					 
					
					<li <?php if($try=='Usersindex' || $try=='Usersadd'){?>  class="active" <?php }?>>
                        <a href="#user" class="has-arrow"><i class="icon-user"></i><span>User Manager</span></a>
                        <ul>
                            <li <?php if($try=='Usersindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/user">List All </a></li>
                            <li <?php if($try=='Usersadd'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/user/add">Add</a></li>
                            <li <?php if($try=='Userban'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/main/ban">Ban User</a></li>
                           
                        </ul>
                    </li>					 
					 
                    <li <?php if($try=='Paymentindex' || $try=='PaymentaddToWallet' || $try=='Paymentadd'){?>  class="active" <?php }?>>
                        <a href="#payments" class="has-arrow"><i class="fa fa-money"></i><span>Payments</span></a>
                        <ul>
                            <li <?php if($try=='Paymentindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/payments">List All </a></li>
                            <li <?php if($try=='Paymentadd'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/payments/add">Add Joining Payment</a></li>
							
							
							<li <?php if($try=='PaymentaddToWallet'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/addtowallet">Add Wallet Payment</a></li>
							
							
							
                            
                        </ul>
                    </li>
					<!-- <li <?php if($try=='Payment_logsindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/payouts/p"><i class="fa fa-inr"></i><span>Payment Request</span></a>
					</li> -->
					<li <?php if($try=='Payment_logsindex'){?>  class="active" <?php }?>>
                        <a href="#user" class="has-arrow"><i class="icon-user"></i><span>Payment Requests</span></a>
                        <ul>
                            <li <?php if($try=='BasePay'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/payouts/p" style="font-size:13px;">Base Payments</a></li>
							
                            <li <?php if($try=='RefPay'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/payment_logs/ref_request/p" style="font-size:13px;">Booster Payments</a></li>
                            <li <?php if($try=='RefPay'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/payment_logs/com_request/p" style="font-size:13px;">Commission Payments</a></li>               
                        </ul>
                    </li>
					<li <?php if($try=='Recvindex' || $try=='Recvadd'){?>  class="active" <?php }?>>
                        <a href="#payouts" class="has-arrow"><i class="fa fa-dollar"></i><span>Payout Logs</span></a>
                        <ul>
                            <li <?php if($try=='Recvindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/receiving">List All </a></li>
							
							<li <?php if($try=='Recvindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/receiving/base">Base Payment </a></li>
							
							<li <?php if($try=='Recvindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/receiving/booster">Booster Payments </a></li>
							
							<li <?php if($try=='Recvindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/receiving/commission">Commission Payments </a></li>
							
							 
                           
                            
                        </ul>
                    </li>
                    <li <?php if($try=='Bossterindex' || $try=='Boosters'){?>  class="active" <?php }?>>
                        <a href="#user" class="has-arrow"><i class="fa fa-rupee"></i><span>Boosters</span></a>
                        <ul>
                            <li <?php if($try=='Bossterindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/main/boost">List All </a></li>  
                        </ul>
                    </li>
					<li <?php if($try=='Offerindex' || $try=='OfferAdd' || $try=='notification'){?>  class="active" <?php }?>>
                        <a href="" class="has-arrow"><i class="fa fa-fire"></i><span>Offers</span></a>
                        <ul>
                            <li <?php if($try=='OfferIndex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/offer/alloffers">List All </a></li>
                            <li <?php if($try=='notification'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/notification">Other Notifications</a></li>
							<li <?php if($try=='OfferAdd'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/offer/add">Add</a></li>
                        </ul>
                    </li> 
					
					<li <?php if($try=='Referalsindex' || $try=='Referalsadd'){?>  class="active" <?php }?>>
                        <a href="#referal" class="has-arrow"><i class="icon-users"></i><span>Referral List</span></a>
                        <ul>
                            <li <?php if($try=='Referalsindex'){?>  class="active" <?php }?>><a href="<?php echo base_url();?>/referal">List All </a></li>
                           
                           
                        </ul>
                    </li>
					
<!-- 					
					<li <?php // if($try=='Ref_bonusindex' || $try=='Ref_bonusadd'){?>  class="active" <?php // }?>>
                        <a href="#bonus" class="has-arrow"><i class="icon-badge"></i><span>Referral Bonus</span></a>
                        <ul>
                            <li <?php // if($try=='Ref_bonusindex'){?>  class="active" <?php //}?>><a href="<?php //echo base_url();?>/bonus">List All </a></li>
                           
                        </ul>
                    </li> -->
					
					
					
					
                  
                </ul>
            </nav> 
			
			<?php }?>

			
        </div>
    </div>

  
	
		 <?php                    
			if(isset($_view) && $_view)
				$this->load->view($_view);
			?>  
	
      
</div>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<?php
	if($try=='dashboardindex'){
?>
<!-- Javascript -->
<script src="<?php echo base_url();?>/assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url();?>/assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url();?>/assets/bundles/c3.bundle.js"></script>
<script src="<?php echo base_url();?>/assets/bundles/chartist.bundle.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/toastr/toastr.js"></script>

<script src="<?php echo base_url();?>/assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url();?>/assets/js/index.js"></script>
<?php }
if($try!='dashboardindex'){
?>
<script src="<?php echo base_url();?>/assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url();?>/assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url();?>/assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>

<script src="<?php echo base_url();?>/assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 



<script src="<?php echo base_url();?>/assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url();?>/assets/js/pages/tables/jquery-datatable.js"></script>
<?php }
if($sub=='add' || $sub=='edit'){
?>
<!-- Javascript -->
<script src="<?php echo base_url();?>/assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url();?>/assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url();?>/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script><!-- Bootstrap Colorpicker Js --> 

<script src="<?php echo base_url();?>/assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script><!-- Input Mask Plugin Js --> 

<script src="<?php echo base_url();?>/assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>

<script src="<?php echo base_url();?>/assets/vendor/multi-select/js/jquery.multi-select.js"></script><!-- Multi Select Plugin Js -->

<script src="<?php echo base_url();?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

<script src="<?php echo base_url();?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo base_url();?>/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script><!-- Bootstrap Tags Input Plugin Js --> 

<script src="<?php echo base_url();?>/assets/vendor/nouislider/nouislider.js"></script><!-- noUISlider Plugin Js --> 
    
<script src="<?php echo base_url();?>/assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url();?>/assets/js/pages/forms/advanced-form-elements.js"></script>
<?php }?>

<!-- jQuery 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
--> 
<!-- Select2 JS --> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>
	$(document).ready(function() {
    $('.mdb-select').select2();
});
</script>

<script>
function calc(){
	var am=$('#amount').val();
	var intrst=$('#interest').val();
	
	var tamnt=am*intrst;
	$('#totalpaid').val(tamnt);
	
}
</script>
<script>
    function lomesh(){
	    var myStr = $("#username").text();
        var trimStr = $.trim(myStr);
        $("#username").html(trimStr);
}
 
 
</script>
</body>
</html>
