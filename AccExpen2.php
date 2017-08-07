<div class="container col-sm-12">
<div class="container col-sm-12">
	
	<label><h2>Accommodation Expenditures</h2></label><br><br>

</div>

<div class="col-sm-6 radio-buttons-1">

	
	<p><b>Type:</b></p>
	<label class="radio-inline">
	<input type="radio" name="housetype" value="Bungalow" checked="checked"> Bungalow  </input>
	</label>
	<label class="radio-inline">
	<input type="radio" name="housetype" value="Apartment"> Apartment /Flat</input>
	</label>
	
	<label class="radio-inline">
	<input type="radio" name="housetype" value="TownHouse"> Town House</input>
	</label>
	<label class="radio-inline">
	<input type="radio" name="housetype" value="VillageHouse"> Village House</input>
	</label>
<br><br><br><br>

</div><br><br>
<div class="col-sm-6">

	<p><b>Status:</b></p>
	<label class="radio-inline">
	<input type="radio" name="Rented" value="Rented" checked="checked"> Rented  </input>
	</label>
	<label class="radio-inline">
	<input type="radio" name="Rented" value="owned"> Self or Family owned</input>
	</label>
	
	<label class="radio-inline">
	<input type="radio" name="Rented" value="GovtOwned<"> Employer / Govt Owned</input>
	</label>
<br><br>	<br><br>
</div><br><br>
<div class="col-sm-6">

	<p><b>If Self or Family Owned, then state how it is acquired?</b></p>
	<label class="radio-inline">
	<input type="radio" name="Inherited" value="Inherited" checked="checked"> Inherited  </input>
	</label>
	<label class="radio-inline">
	<input type="radio" name="Inherited" value="Constructed"> Constructed</input>
	</label>
	
	<label class="radio-inline">
	<input type="radio" name="Inherited" value="Purchased"> Purchased</input>
	</label>
<br><br>
</div><br><br>
<div class="col-sm-6">

	<p><b>Rent Payment:</b></p>
	<label class="radio-inline">
	<input type="radio" name="Self" value="Self" checked="checked"> Self  </input>
	</label>
	<label class="radio-inline">
	<input type="radio" name="Self" value="Employer"> Employer/Govt</input>
	</label>
	
	<label class="radio-inline">
	<input type="radio" name="Self" value="Others"> Others</input>
	</label>
<br><br>	
</div><br><br>
<div class="col-sm-12">
		<div class="col-sm-4">
		<label>House Plot Size in Sq. ft.	</label><span id="size-error" class="signup-error"></span><br>
		<input type="text" name="PlotSize" id="sizee" class="form-control"><br>
		</div>
		<div class="col-sm-4">
		<label>Covered Area in Sq. ft.	</label><span id="area-error" class="signup-error"></span><br>
		<input type="text" name="CoveredArea" id="areaa" class="form-control"><br>
		</div>
		<div class="col-sm-4">
		<label>Current Market Value	</label><span id="value-error" class="signup-error"></span><br>
		<input type="text" name="CurrentMarketValue" id="valuee" class="form-control"><br>
		</div>
		
</div>
<div class="col-sm-12">
		<label>Accommodation Location /Address	</label>
		<div>
		<textarea name="AAdd"  id="AAdd"rows="10" cols="73" >   </textarea>
		
		</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
		<label>Number Of Bedrooms</label>
		<div>
		<select name="BedRoom" id="BedRoom" class="form-control">
		<option value="1-2">1-2</option>
		<option value="2-4">2-4</option>
		<option value="4-6">4-6</option>
		<option value="6-8">6-8</option>
		<option value="Above 8">Above 8</option>
		</select></div>

</div>
<div class="col-sm-4">
		<label>Number Of Airconditioners</label>
		<div>
		<select name="Airconditioner" id="Airconditioner" class="form-control">
		<option value="1-2">1-2</option>
		<option value="2-4">2-4</option>
		<option value="4-6">4-6</option>
		<option value="6-8">6-8</option>
		<option value="Above 8">Above 8</option>
		</select></div>

</div >
<div class="col-sm-4">
		<label>Accommodation Monthly Rent	</label><span id="mRent-error" class="signup-error"></span>
		<div>
		<input type="text" name="mRent" id="mRent" class="form-control"><br>
		</div>
</div>

</div>
<div class="col-sm-12">
		<label>Accommodation Annual Rent	</label><span id="aRent-error" class="signup-error"></span>
		<div>
		<input type="text" name="aRent" id="aRent" class="form-control"><br>
		</div>
</div>
</div>