
<HTML>
<HEAD>
<TITLE>MANTRA: Lifestyle Health Club  - Confirmation Page</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<style>
	h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100; margin-bottom:0.1em}
    h2.co    { font-family:Arial,sans-serif; font-size:24pt; color:#FFFFFF; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3       { font-family:Arial,sans-serif; font-size:16pt; color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    body     { font-family:Verdana,Arial,sans-serif; font-size:11px; color:#08185A;}
	th 		 { font-size:12px;background:#015289;color:#FFFFFF;font-weight:bold;height:30px;}
	
	.pageTitle { font-size:24px;}
	
	body{
		background:#FFF;
		
	}
	.confirmation_table{
		margin: 6% auto;
		width: 40%;
		background: #F9F9F9 none repeat scroll 0% 0%;
		border-radius: 2px;
		color: #4D4D4D;
		border-top: 9px solid #F2652C;
	}
	.btn-cls{
		border: 1px solid #F34D20;
		border-radius: 6px;
		padding: 3%;
		background: #F2652C;
		color: #FFF;
		cursor: pointer;
		font-weight: 600;
	}
	.btn-cls:hover{
		opacity:.9;
	}
	.btn-cls>tr>td{
		background:none;
		font-size:12px;
	}
	
</style>
</HEAD>
<!--
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 bgcolor="#ECF1F7"> -->
<BODY>

<?php if($status=="Y"){ ?>
	
	<table style="margin: 6% auto; width: 40%; background: rgb(248, 248, 248) none repeat scroll 0% 0%; color: rgb(77, 77, 77); border-top: 9px solid rgb(242, 101, 44); border-bottom: 1px solid rgb(242, 101, 44); border-radius: 2px;padding-bottom: 2%;" cellpadding="10" cellspacing="2">
		<tr>
			<td>Your registration has been done successfully.</td>
		</tr>
		<tr>
			<td>Your Membership No is <?php echo $membership_no; ?></td>
		</tr>
		<tr>
			<td>Your Package validity period is <?php echo $validity_pd; ?></td>
		</tr>
		<tr>
			<td>Your Member's Panel Login Details are</td>
		</tr>
		<tr>
			<td>Mobile : <?php echo $mobile_no; ?></td>
		</tr>
		<tr>
			<td>Password : <?php echo $cus_dob; ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo base_url();?>memberpanel" class="btn-cls">Back to Member's Panel</a></td>
		</tr>
	</table>
	
	
<?php } if($status=="N"){?>

		<table style="margin: 6% auto; width: 40%; background: rgb(248, 248, 248) none repeat scroll 0% 0%; color: rgb(77, 77, 77); border-top: 9px solid rgb(242, 101, 44); border-bottom: 1px solid rgb(242, 101, 44); border-radius: 2px;padding-bottom: 2%;" cellpadding="10" cellspacing="2">
		<tr>
			<td>Your payment has been decline.</td>
		</tr>
		<tr>
			<td>Please try again after some time...</td>
		</tr>
		<tr>
			<td><a href="<?php echo base_url();?>" class="btn-cls">Back to Website</a></td>
		</tr>
	</table>

<?php } ?>



	
	
</body>
</html>
