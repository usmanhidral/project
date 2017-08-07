<?php 
session_start();
if(!$_SESSION['username']){
header("location:Login.php");
}
?>
<html>
<head>
<title>Multi step registration form PHP, JQuery, MySQLi</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="form.js"></script>
<script src="file.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="garlic.js"></script>
<SCRIPT>
function addMore() {
	$("<DIV>").load("fundAvailability.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}

function addMore1() {
	$("<DIV>").load("educationalRecord.php", function() {
			$("#product1").append($(this).html());
	});	
}
function deleteRow1() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}

function addMore2() {
	$("<DIV>").load("assetWorth.php", function() {
			$("#product2").append($(this).html());
	});	
}
function deleteRow2() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
function addMore3() {
	$("<DIV>").load("transport.php", function() {
			$("#product3").append($(this).html());
	});	
}
function deleteRow3() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}

function addMoreik() {
	$("<DIV>").load("earningInfo.php", function() {
			$("#productik").append($(this).html());
	});	
}
function deleteRowik() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}


function showMe (box) {
        
        var chboxs = document.getElementsByName("c1");
        var vis = "none";
        for(var i=0;i<chboxs.length;i++) { 
            if(chboxs[i].checked){
             vis = "block";
                break;
            }
        }
        document.getElementById(box).style.display = vis;
    
    
    }
       function addSiblings() {
	$("<DIV>").load("sblingfees.php", function() {
			$("#sblings").append($(this).html());
	});	
}
function deleteRowsiblings() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
    function addMorescholar() {
	$("<DIV>").load("scholarship.php", function() {
			$("#scholar").append($(this).html());
	});	
}
function deleteRowscholar() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}

 function addAssetIncome() {
	$("<DIV>").load("assetIncome.php", function() {
			$("#AssetIncome").append($(this).html());
	});	
}
function deleteAssetIncome() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}


	
</SCRIPT>

</head>
<body>


	<div class="message"><?php if(isset($message)) echo $message; ?></div>
		<ul id="signup-step">
			<li id="personal" class="active">Personal Detail</li>
			<li id="family" >Family Detail</li>
			<li id="sblings1" >Siblings Detail</li>
			<li id="ik">Earning Information</li>
			<li id="AssetIncome1">Assets Income</li>
			<li id="AccExpen">Acc. Expenditures</li>
			<li id="Expen">Expenditures</li>
			<li id="goals">Personal Goals</li>
			<li id="Transport">Transport</li>
			<li id="Land">Land</li>
			<li id="Assetsworth">Assets worth</li>
			<li id="password">Funds Availabe For Study</li>
			<li id="usman">Applicant Educational Record</li>
			<li id="scholarship">Scholarship</li>
			<li id="file">Documents Upload</li>
			<li id="terms">Terms and Conditions</li>
	
	
		</ul>

	<form name="frmRegistration" id="signup-form" method="post" data-persist="garlic" enctype="multipart/form-data">
		
		<div id="personal-field">
			<DIV id="outer">
				<DIV id="productper">
					<?php require_once("personalDetails.php") ?>
				</DIV>
			</DIV>
		</div>
		<div id="family-field" style="display:none;">
			<DIV id="outer">
				<DIV id="productfamily">
					<?php require_once("familyDetails.php") ?>
				</DIV>
			</DIV>
		</div>
		<div id="sblings1-field" style="display:none;">

			<DIV id="outer">

				<DIV id="sblings">
					<?php require_once("sblingfees.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input class="btn btn-success" type="button" name="add_item" value="Add More" onClick="addSiblings();" />
					<input class="btn btn-danger" type="button" name="del_item" value="Delete" onClick="deleteRowsiblings();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
			</DIV>
		</div>
		<div id="ik-field" style="display:none;">
			<DIV id="outer">

				<DIV id="productik">
					<?php require_once("earningInfo.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input class="btn btn-success" type="button" name="add_item" value="Add More" onClick="addMoreik();" />
					<input class="btn btn-danger" type="button" name="del_item" value="Delete" onClick="deleteRowik();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
			</DIV>
		</div>
		<div id="AssetIncome1-field" style="display:none;">
			<DIV id="outer">

				<DIV id="AssetIncome">
					<?php require_once("assetIncome.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input class="btn btn-success" type="button" name="add_item" value="Add More" onClick="addAssetIncome();" />
					<input class="btn btn-danger" type="button" name="del_item" value="Delete" onClick="deleteAssetIncome();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
			</DIV>
		</div>
		<div id="AccExpen-field" style="display:none;">
			<DIV id="outer">
				<DIV id="product4">
					<?php require_once("AccExpen2.php") ?>
				</DIV>
			</DIV>
		</div>
		<div id="Expen-field" style="display:none;">
			<DIV id="outer">
				<DIV id="product55">
					<?php require_once("Expenditures.php") ?>
				</DIV>
			</DIV>
		</div>
		
		<div id="goals-field" style="display:none;">
			<DIV id="outer">
				<DIV id="producGoals">
					<?php require_once("careerGoals.php") ?>
				</DIV>
			</DIV>
		</div>
		
		<div id="Transport-field" style="display:none;">
			<DIV id="outer">
				<DIV id="product3">
					<?php require_once("transport.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input class="btn btn-success" type="button" name="add_item" value="Add More" onClick="addMore3();" />
					<input class="btn btn-danger" type="button" name="del_item" value="Delete" onClick="deleteRow3();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
			</DIV>

		</div>
		<div id="Land-field" style="display:none;">
			<DIV id="outer">
				<DIV id="landd">
					<?php require_once("land.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input type="button" name="add_item" value="Add More" onClick="addMoreland();" />
					<input type="button" name="del_item" value="Delete" onClick="deleteRowland();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
				<DIV class="footer">
					<input type="submit" name="save" value="Save" />
				</DIV>
			</DIV>
		</div>
		<div id="Assetsworth-field" style="display:none;">
			<DIV id="outer">
				<DIV id="product2">
					<?php require_once("assetWorth.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input class="btn btn-success" type="button" name="add_item" value="Add More" onClick="addMore2();" />
					<input class="btn btn-danger" type="button" name="del_item" value="Delete" onClick="deleteRow2();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
			</DIV>
		</div>
		<div id="password-field" style="display:none;">
			<DIV id="outer">
				<DIV id="product">
					<?php require_once("fundAvailability.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input class="btn btn-success" type="button" name="add_item" value="Add More" onClick="addMore();" />
					<input class="btn btn-danger" type="button" name="del_item" value="Delete" onClick="deleteRow();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
			</DIV>
		</div>
		<div id="usman-field" style="display:none;">
			<DIV id="outer">
				<DIV id="product1">
					<?php require_once("educationalRecord.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input class="btn btn-success" type="button" name="add_item" value="Add More" onClick="addMore1();" />
					<input class="btn btn-danger" type="button" name="del_item" value="Delete" onClick="deleteRow1();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
			</DIV>
		</div>
		<div id="scholarship-field" style="display:none;">
			<DIV id="outer">
				<DIV id="scholar">
					<?php require_once("scholarship.php") ?>
				</DIV>
				<DIV class="btn-action float-clear">
					<input class="btn btn-success" type="button" name="add_item" value="Add More" onClick="addMorescholar();" />
					<input class="btn btn-danger" type="button" name="del_item" value="Delete" onClick="deleteRowscholar();" />
					<span class="success"><?php if(isset($message)) { echo $message; }?></span>
				</DIV>
			</DIV>
		</div>
		<div id="file-field" style="display:none;">
			<DIV id="outer">
				<DIV id="productik">
					<?php require_once("file.php") ?>
				</DIV>
			</DIV>
		</div>
		<div id="terms-field" style="display:none;">
			<DIV id="outer">
				<DIV id="productik">
					<?php require_once("agreement.php") ?>
				</DIV>
			</DIV>
		</div>
			
		
		
		
		<div>
			<input class="btnAction btn btn-primary" type="button" name="back" id="back" value="Back" style="display:none;"/>
			<input class="btnAction btn btn-primary" type="button" name="next" id="next" value="Next" />
			<input class="btnAction btn btn-danger delete" type="submit" disabled="disabled" name="finish" id="finish" value="Finish" style="display:none;"/>
			<input name="h" type="hidden" id="h" value="0" />
		</div>
	</form>
<script>
	$(function(){
    var $select = $(".1-100");
    for (i=15;i<=30;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
});

			$(function(){
    $('#sameaddress').click(function(){
      $('#applicant_permenent_address').val($('#applicant_present_address').val());
    });
});

$(function() {
    $(".checkbox").click(function(){
        $('.delete').prop('disabled',$('input.checkbox:checked').length == 0);
    });
});
</script>
</body>
</html>

<?php
       
require_once ('connection.inc.php');


        if(isset($_POST['finish']))
        {
        	$itemCount = count($_POST["scholarship_institute"]);
		    $itemValues=0;
		for($i=0;$i<$itemCount;$i++) {
			
				$itemValues++;
			$scholarship_institute=  $_POST["scholarship_institute"][$i]; 
			 $scholarship_level= $_POST["scholarship_level"][$i];
			 $scholarship_name= $_POST["scholarship_name"][$i];
			 
			 $scholarship_amount= $_POST["scholarship_amount"][$i];
			   $scholarship_period= $_POST["scholarship_period"][$i];
			    $apid=$_SESSION['username'];
			       
			        $sql="INSERT INTO `applicant_scholarship`(`applicant_id`, `applicant_institute`, `educational_level`, `scholarship_name`, `scholarship_amount`, `scholarship_period`) VALUES('$apid','$scholarship_institute','$scholarship_level','$scholarship_name','$scholarship_amount','$scholarship_period')";
                      if ($mysqli->query($sql)) {
                        echo "Submited scholarship";
                      } else {
                     echo "Failed scholarship";
                     }
                     
			

		}
		$itemCount = count($_POST["ins"]);
		$itemValues=0;
		
		
		for($i=0;$i<$itemCount;$i++) {
				$itemValues++;
			$name=  $_POST["name"][$i]; 
			 $relation= $_POST["relation"][$i];
			 $ins= $_POST["ins"][$i];
			  $mnthlyfee= $_POST["mnthlyfee"][$i];
			   $tutionfee= $_POST["tutionfee"][$i];
			$apid=$_SESSION['username'];
			       
			        $sql="INSERT INTO `sibblings_studying`(`applicant_id`, `sibbling_name`, `sibbling_relation`, `sibbling_institue`, `sibbling_monthly_fee`, `sibbling_tution_fee`) VALUES ('$apid','$name','$relation','$ins','$mnthlyfee','$tutionfee')";
                      if ($mysqli->query($sql)) {
                        echo "Submited Sibblings";
                      } else {
                     echo "Failed Sibblings";
                     }
                     
			

		}
		$itemCount = count($_POST["AssetTitle"]);
		    $itemValues=0;
		for($i=0;$i<$itemCount;$i++) {
			
				$itemValues++;
			$AssetTitle=  $_POST["AssetTitle"][$i]; 
			 $AssetHolderRelation= $_POST["AssetHolderRelation"][$i];
			 $AssetTotal= $_POST["AssetTotal"][$i];
			   $apid=$_SESSION['username'];
			       
			        $sql="INSERT INTO `assets_worth`( `applicant_id`, `assets_title`, `asset_holdr_reltion`, `total`) VALUES('$apid','$AssetTitle','$AssetHolderRelation','$AssetTotal')";
                      if ($mysqli->query($sql)) {
                        echo "Submited asstes worth";
                      } else {
                     echo "Failed assets_worth";
                     }
                     
			

		}
			
            
          	$itemCount = count($_POST["TransportType"]);
		    $itemValues=0;
		for($i=0;$i<$itemCount;$i++) {
			
				$itemValues++;
			$TransportType=  $_POST["TransportType"][$i]; 
			 $Model= $_POST["Model"][$i];
			 $EngineCapacity= $_POST["EngineCapacity"][$i];
			  $RegNo= $_POST["RegNo"][$i];
			   $OwnPeriod= $_POST["OwnPeriod"][$i];
			    $apid=$_SESSION['username'];
			       
			        $sql="INSERT INTO `transport_assets`(`applicant_id`, `transport_type`, `transport_model`, `transport_engine`, `transport_registration`, `ownership_period`) VALUES('$apid','$TransportType','$Model','$EngineCapacity','$RegNo','$OwnPeriod')";
                      if ($mysqli->query($sql)) {
                        echo "Submited TransportType";
                      } else {
                     echo "Failed TransportType";
                     }
                     
			

		}
            $num =$_POST['h'];
			$uid=$_POST["applicant_id"]; 
            for($i=0;$i<=$num;$i++)
            {
                $membername= $_POST["membername_$i"];
                $membersrelationship= $_POST["membersrelationship_$i"];
                $memberstatus = $_POST["memberstatus_$i"];
				$memberremarks = $_POST["memberremarks_$i"];
				
				$sql1="INSERT INTO `family_member_info` (`sr_no`, `applicant_id`, `member_name`, `member_relation`, `member_martial_status`, `member_remarks`) VALUES (NULL, '$uid', '$membername', '$membersrelationship', '$memberstatus', '$memberremarks')";
				$res1=mysqli_query($mysqli,$sql1); 

             
            }
			
			$goal1=$_POST['goal1'];
			$goal2=$_POST['goal2'];
			$goal3=$_POST['goal3'];
			$goal4=$_POST['goal4'];
			
			$sql2="INSERT INTO `career_goals` (`sr_no`, `applicant_id`, `goal1`, `goal2`, `goal3`, `goal4`) VALUES (NULL,'$uid','$goal1','$goal2','$goal3','$goal4')";
			$res2=mysqli_query($mysqli,$sql2); 
			
			
			$applicant_age=$_POST["applicant_age"];
			$applicant_id=$_POST["applicant_id"];
			$applicant_name=$_POST["applicant_name"];
			$applicant_gender=$_POST["applicant_gender"];
			$applicant_cnic=$_POST["applicant_cnic"];
			$applicant_birth_place=$_POST["applicant_birth_place"];
			$applicant_present_address=$_POST["applicant_present_address"];
			$applicant_permenent_address=$_POST["applicant_permenent_address"];
			$applicant_email=$_POST["applicant_email"];
			$applicant_residence_telephone=$_POST["applicant_residence_telephone"];
			$applicant_mobile=$_POST["applicant_mobile"];
			$applicant_earning_members=$_POST["applicant_earning_members"];
			$applicant_living_family_members=$_POST["applicant_living_family_members"];
			$applicant_not_earning_members=$_POST["applicant_not_earning_members"];
			$applicant_total_family_members=$_POST["applicant_total_family_members"];
			$applicant_married_family_members=$_POST["applicant_married_family_members"];
			$applicant_studying_members=$_POST["applicant_studying_members"];
			
			$earningsoruce = count($_POST["income_relation"]);
			$itemValues=0;


		for($i=0;$i<$earningsoruce;$i++) {
			$income_source= $_POST["income_source"][$i];
			$income_relation= $_POST["income_relation"][$i];
			$icome_price1= $_POST["icome_price1"][$i];
			$sql="INSERT INTO `funds_availablity`(`sr_no`, `applicant_id`, `funds_frm_income`, `provider_relation`, `funds_amount`) VALUES (NULL,'$applicant_id','$income_source','$income_relation','$icome_price1')";
			$res=mysqli_query($mysqli,$sql); 
		}
		///////////
		$earningsoruce = count($_POST["income_source_astincone"]);
			$itemValues=0;


		for($i=0;$i<$earningsoruce;$i++) {
			$income_source_astincone= $_POST["income_source_astincone"][$i];
			$income_relation_astincone= $_POST["income_relation_astincone"][$i];
			$price_astincone= $_POST["price_astincone"][$i];
			 $apid=$_SESSION['username'];
			$sql="INSERT INTO  `assets_income`(`sr_no`, `applicant_id`, `asset_info`, `relation`, `toal`) VALUES (NULL,'$apid','$income_source_astincone','$income_relation_astincone','$price_astincone')";
			$res=mysqli_query($mysqli,$sql); 
		}
		
		////////
		$sql="INSERT INTO `personal_info` (`sr_no`, `applicant_id`, `applicant_name`, `applicant_gender`, `applicant_cnic`, `applicant_age`, `applicant_birth_place`, `applicant_present_address`, `applicant_permenent_address`, `applicant_residence_telephone`, `applicant_mobile`, `applicant_email`, `applicant_total_family_members`, `applicant_living_family_members`, `applicant_married_family_members`, `applicant_earning_members`, `applicant_not_earning_members`, `applicant_studying_members`) VALUES (NULL, '$applicant_id', '$applicant_name', '$applicant_gender', '$applicant_cnic', '$applicant_age', '$applicant_birth_place', '$applicant_present_address', '$applicant_permenent_address', '$applicant_residence_telephone', '$applicant_mobile', '$applicant_email', '$applicant_total_family_members', '$applicant_living_family_members', '$applicant_married_family_members', '$applicant_earning_members', '$applicant_not_earning_members', '$applicant_studying_members')";
        $res=mysqli_query($mysqli,$sql); 
		
  if($res){
    echo "Information Submitted";
  }
		$elec=$_POST['elec'];
		$tel=$_POST['tel'];
		$gas=$_POST['gas'];
		$water=$_POST['water'];
		$mob=$_POST['mob'];
		
		$elec6=$_POST['elec6'];
		$tel6=$_POST['tel6'];
		$gas6=$_POST['gas6'];
		$water6=$_POST['water6'];
		$mob6=$_POST['mob6'];
		
		$total6=$_POST['total6'];
		
		
		$food=$_POST['food'];
		$servant=$_POST['servant'];
		$medical=$_POST['medical'];
		$travel=$_POST['travel'];
		
		$sqlex="INSERT INTO `other_expenditures`(`sr_no`, `applicant_id`, `telephone_last`, `electricity_last`, `gas_last`, `water_last`, `mobile_last`, `telephone_six`, `electricity_six`, `gas_six`, `water_six`, `mobile_six`, `kitchen_expenditures`, `servent_expenditures`, `utility_expenditures`, `medical_expenditures`, `traveling_expenditures`) VALUES (NULL,'$applicant_id','$tel','$elec','$gas','$water','$mob','$tel6','$elec6','$gas6','$water6','$mob6','$food', '$servant','$total6','$medical','$travel')";
		 $resex=mysqli_query($mysqli,$sqlex); 
		 
		 $educational = count($_POST["institute"]);
		 
			$itemValues=0;


		for($i=0;$i<$educational;$i++) {
			$Educational_Record= $_POST["Educational_Record"][$i];
			$institute= $_POST["institute"][$i];
			$fee_monthly= $_POST["fee_monthly"][$i];
			$from_year= $_POST["from_year"][$i];
			$to_year= $_POST["to_year"][$i];
			$divison_gpa= $_POST["divison_gpa"][$i];
			$cgpa_percentage= $_POST["cgpa_percentage"][$i];
			
			$sqled="INSERT INTO `educational_record`(`sr_no`, `applicant_id`, `level`, `applicant_institute`, `applicant_monthly_fee`, `start_school`, `finish_school`, `applicant_division`, `applicant_percentage`) VALUES (NULL,'$applicant_id','$Educational_Record','$institute','$fee_monthly','$from_year','$to_year','$divison_gpa','$cgpa_percentage')";
			$resed=mysqli_query($mysqli,$sqled); 
		}
		
		
		 $assetIncomecount = count($_POST["income_source_astincone"]);
		 
			$itemValues=0;


		for($i=0;$i<$assetIncomecount;$i++) {
			$income_source_astincone= $_POST["income_source_astincone"][$i];
			$income_relation_astincone= $_POST["income_relation_astincone"][$i];
			$price_astincone= $_POST["price_astincone"][$i];
			
			
			$sqlei="INSERT INTO `assets_earning`(`sr_no`, `applicant_id`, `assets_title`, `assets_relation`, `assets_price`, `assets_total`) VALUES (NULL,'$applicant_id','$income_source_astincone','$income_relation_astincone','$price_astincone','1000')";
			$resei=mysqli_query($mysqli,$sqlei); 
		}
		
		
		$earnerscount = count($_POST["name1"]);
		$itemValues=0;
		
		
		for($i=0;$i<$earnerscount;$i++) {
			
				
			$name=  $_POST["name1"][$i]; 
			 $relation1= $_POST["relation1"][$i];
			 
			 $ocp= $_POST["ocp"][$i];
			  $org= $_POST["org"][$i];
			   $dsg= $_POST["dsg"][$i];
			    $mearng= $_POST["mearng"][$i];
			    $rmrks= $_POST["rmrks"][$i];
			    $anlincome= $_POST["anlincome"][$i]; 
			 $cnic= $_POST["cnic"][$i];
			 $status= $_POST["status"][$i];
			  $prf_status= $_POST["prf_status"][$i];
			   $cmpny_name= $_POST["cmpny_name"][$i];
			      $address= $_POST["address"][$i];
			    $mobile= $_POST["mobile"][$i];
			    $office_num= $_POST["office_num"][$i];
			    $grade= $_POST["grade"][$i];
			    $ntn= $_POST["ntn"][$i];
			       
			       $sqlearn="INSERT INTO `earning_info`(`applicant_id`, `earning_member_name`, `earning_member_relation`, `earning_member_occupation`, `earning_member_organization`, `earning_member_designation`, `earning_member_monthly_earning`, `earning_member_remarks`, `earning_member_annual_income`, `earning_member_cnic`, `earning_member_status`, `earning_member_professional_status`, `earning_member_company_name`, `earning_member_address`, `earning_member_mobile`, `earning_member_office_number`, `earning_member_grade`, `earning_member_ntn`) VALUES
			        ('$apid','$name','$relation1','$ocp','$org','$dsg','$mearng','$rmrks','$anlincome','$cnic','$status','$prf_status','$cmpny_name','$address','$mobile','$office_num','$grade','$ntn')";
					$researn=mysqli_query($mysqli,$sqlearn); 
					
		}
		$agriLand = count($_POST["Qty"]);
		 
			$itemValues=0;


		for($i=0;$i<$agriLand;$i++) {
			$tLandd= $_POST["tLand"][$i];
			$qtyy= $_POST["Qty"][$i];
			$sizee= $_POST["Size"][$i];
			$Locationn= $_POST["Location"][$i];
			$areaa= $_POST["area"][$i];
			$yieldd= $_POST["yield"][$i];
			//$sqled="INSERT INTO `educational_record`(`sr_no`, `applicant_id`, `level`, `applicant_institute`, `applicant_monthly_fee`, `start_school`, `finish_school`, `applicant_division`, `applicant_percentage`) VALUES (NULL,'$applicant_id','$Educational_Record','$institute','$fee_monthly','$from_year','$to_year','$divison_gpa','$cgpa_percentage')";
			$sqlld="INSERT INTO `agriculture_assets` (`sr_no`, `applicant_id`, `assets_title`,`assets_qty`,`assets_size`,`assets_location`,`assets_cultivable_area`,`agriculture_yield`) 
             VALUES(NULL,'$applicant_id','$tLandd','$qtyy','$sizee','$Locationn','$areaa','$yieldd')";
			$resed=mysqli_query($mysqli,$sqlld); 
		}
		
		$housetype=$_POST['housetype'];
		$rented=$_POST['Rented'];
		$Inherited=$_POST['Inherited'];
		$Self=$_POST['Self'];
		$PlotSize=$_POST['PlotSize'];
		$CoveredArea=$_POST['CoveredArea'];
		$CurrentMarketValue=$_POST['CurrentMarketValue'];
		$AAdd=$_POST['AAdd'];
		$BedRoom=$_POST['BedRoom'];
		$Airconditioner=$_POST['Airconditioner'];
		$mRent=$_POST['mRent'];
		$aRent=$_POST['aRent'];
		$sqleex="INSERT INTO `accomodation_expenditure`(`sr_no`, `applicant_id`, `accomodation_type`, `accomodation_status`, `accomodation_ownership`, `accomodation_rent_provider`, `accomodation_size`, `accomodation_area`, `accomodation_value`, `accomodation_address`, `accomodation_bedroom`, `accomodation_ac`, `accomodation_rent`, `accomodation_annual`) VALUES (NULL,'$applicant_id','$housetype','$rented','$Inherited','$Self','$PlotSize','$CoveredArea','$CurrentMarketValue', '$AAdd','$BedRoom','$Airconditioner','$mRent','$aRent')";
		$reseex=mysqli_query($mysqli,$sqleex); 
		
		   $v1=rand(1111,9999);
   $v2=rand(1111,9999);

   $v3=$v1.$v2;

   $v3=md5($v3);
$fncnic="NULL";
$mncnic="NULL";
$gncnic="NULL";

$fincm="NULL";
$mincm="NULL";
$gincm="NULL";

$fslry="NULL";
$mslry="NULL";
$gslry="NULL";

$ectrcty="NULL";
$gas="NULL";
$tlphn="NULL";
$watr="NULL";

$rentag="NULL";
$feesb="NULL";
$scrdoc="NULL";
$ppdoc="NULL";
$bnkst="NULL";
$uob=15026431;
if ($_FILES['fcnic']['size'] != 0)
{
    $fnm=$_FILES["fcnic"]["name"];
   $fncnic="files/".$v3.$fnm;
   move_uploaded_file($_FILES["fcnic"]["tmp_name"],$fncnic);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['mcnic']['size'] != 0)
{
    $fnm=$_FILES["mcnic"]["name"];
   $mncnic="files/".$v3.$fnm;
   move_uploaded_file($_FILES["mcnic"]["tmp_name"],$mncnic);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['gcnic']['size'] != 0)
{
    $fnm=$_FILES["gcnic"]["name"];
   $gncnic="files/".$v3.$fnm;
   move_uploaded_file($_FILES["gcnic"]["tmp_name"],$gncnic);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['incfcnic']['size'] != 0)
{
    $fnm=$_FILES["incfcnic"]["name"];
   $fincm="files/".$v3.$fnm;
   move_uploaded_file($_FILES["incfcnic"]["tmp_name"],$fincm);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['incmmcnic']['size'] != 0)
{
    $fnm=$_FILES["incmmcnic"]["name"];
   $mincm="files/".$v3.$fnm;
   move_uploaded_file($_FILES["incmmcnic"]["tmp_name"],$mincm);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['incmgcnic']['size'] != 0)
{
    $fnm=$_FILES["incmgcnic"]["name"];
   $gincm="files/".$v3.$fnm;
   move_uploaded_file($_FILES["incmgcnic"]["tmp_name"],$gincm);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['slryfcnic']['size'] != 0)
{
    $fnm=$_FILES["slryfcnic"]["name"];
   $fslry="files/".$v3.$fnm;
   move_uploaded_file($_FILES["slryfcnic"]["tmp_name"],$fslry);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['slrymcnic']['size'] != 0)
{
    $fnm=$_FILES["slrymcnic"]["name"];
   $mslry="files/".$v3.$fnm;
   move_uploaded_file($_FILES["slrymcnic"]["tmp_name"],$mslry);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['slrygcnic']['size'] != 0)
{
    $fnm=$_FILES["slrygcnic"]["name"];
   $gslry="files/".$v3.$fnm;
   move_uploaded_file($_FILES["slrygcnic"]["tmp_name"],$gslry);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['ectrcty']['size'] != 0)
{
    $fnm=$_FILES["ectrcty"]["name"];
   $ectrcty="files/".$v3.$fnm;
   move_uploaded_file($_FILES["ectrcty"]["tmp_name"],$ectrcty);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['gas']['size'] != 0)
{
    $fnm=$_FILES["gas"]["name"];
   $gas="files/".$v3.$fnm;
   move_uploaded_file($_FILES["gas"]["tmp_name"],$gas);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['tlphn']['size'] != 0)
{
    $fnm=$_FILES["tlphn"]["name"];
   $tlphn="files/".$v3.$fnm;
   move_uploaded_file($_FILES["tlphn"]["tmp_name"],$tlphn);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['wtr']['size'] != 0)
{
    $fnm=$_FILES["wtr"]["name"];
   $watr="files/".$v3.$fnm;
   move_uploaded_file($_FILES["wtr"]["tmp_name"],$watr);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['rentag']['size'] != 0)
{
    $fnm=$_FILES["rentag"]["name"];
   $rentag="files/".$v3.$fnm;
   move_uploaded_file($_FILES["rentag"]["tmp_name"],$rentag);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['feesb']['size'] != 0)
{
    $fnm=$_FILES["feesb"]["name"];
   $feesb="files/".$v3.$fnm;
   move_uploaded_file($_FILES["feesb"]["tmp_name"],$feesb);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['scrdoc']['size'] != 0)
{
    $fnm=$_FILES["scrdoc"]["name"];
   $scrdoc="files/".$v3.$fnm;
   move_uploaded_file($_FILES["scrdoc"]["tmp_name"],$scrdoc);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['ppdoc']['size'] != 0)
{
    $fnm=$_FILES["ppdoc"]["name"];
   $ppdoc="files/".$v3.$fnm;
   move_uploaded_file($_FILES["ppdoc"]["tmp_name"],$ppdoc);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['bnkst']['size'] != 0)
{
    $fnm=$_FILES["bnkst"]["name"];
   $bnkst="files/".$v3.$fnm;
   move_uploaded_file($_FILES["bnkst"]["tmp_name"],$bnkst);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}



// $rentag="NULL";
// $feesb="NULL";
// $scrdoc="NULL";
// $ppdoc="NULL";
// $bnkst="NULL";
echo $ectrcty;
echo "<br>";
echo $gas;
echo "<br>";
echo $tlphn;
echo "<br>";
echo $watr;


   



$query="INSERT INTO `files`(`uob`, `fcnic`, `mcnic`,`gnic`, `ftax`, `mtax`, `gtax`, `fslry`, `mslry`, `gslry`,`etrctcty`, `gas`, `tlphn`, `wtr`, `rentag`, `feesb`, `scrdoc`, `ppdoc`, `bnkst`) VALUES('$uob','$fncnic','$mncnic','$gncnic','$$fincm','$mincm','$gincm','$fslry','$mslry','$gslry','$ectrcty','$gas','$tlphn','$watr', '$rentag', '$feesb', '$scrdoc', '$ppdoc', '$bnkst')";

$check=mysqli_query($mysqli,$query);
		
		
		
		
		
		
		
		}
		
		
        ?>