
<!-- Start Modals -->



<!-- Upload Featured Image -->

<div id="upload-featured-image" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="upload-featured-imageLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close text-button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="upload-featured-imageLabel">Add a Featured Image</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="button" data-dismiss="modal">Cancel</button>
        <button type="button" class="button">Add Image</button>
      </div>
    </div>
  </div>
</div><!-- end: upload-featured-image -->



<!-- Upload Images -->

<div id="upload-images-modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="upload-images-modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close text-button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="upload-images-modalLabel">Upload Images</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="button" data-dismiss="modal">Cancel</button>
        <button type="button" class="button">Add Images</button>
      </div>
    </div>
  </div>
</div><!-- end: upload-images-modal -->



<!-- Edit Contact Info -->

<div id="edit-contact-info" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="edit-contact-infoLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close text-button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="edit-contact-infoLabel">Edit: Your Contact Information</h4>
      </div>
      <div class="modal-body">
		<form>
			<span><b>Name:</b></span>
		  	<div class="form-group">
		    	<label class="hidden" for="firstNameInput">First Name</label>
		    	<input type="text" class="form-control" id="firstNameInput" placeholder="First">
		  	</div>
		  	<div class="form-group">
		    	<label class="hidden" for="lastNameInput">Last Name</label>
		    	<input type="text" class="form-control" id="lastNameInput" placeholder="Last">
		  	</div>
			<span><b>Your Current Address:</b></span>
		  	<div class="checkbox">
			  	<label>
			    	<input type="checkbox">Same as Listing Address
			  	</label>
			</div>
			<span><b>Address:</b></span>
		  	<div class="form-group">
		    	<label class="hidden" for="streetAddressInput">Street Address</label>
		    	<input type="text" class="form-control" id="streetAddressInput" placeholder="Street Address">
		  	</div>
		  	<div class="form-group">
		    	<label class="hidden" for="addressLine2Input">Address Line 2</label>
		    	<input type="text" class="form-control" id="addressLine2Input" placeholder="Address Line 2">
		  	</div>
		  	<div class="form-group">
		    	<label class="hidden" for="cityInput">City</label>
		    	<input type="text" class="form-control" id="cityInput" placeholder="City">
		  	</div>
			<select>
				<option value=""></option><option value="Alabama" selected="selected">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option><option value="Armed Forces Americas">Armed Forces Americas</option><option value="Armed Forces Europe">Armed Forces Europe</option><option value="Armed Forces Pacific">Armed Forces Pacific</option>
			</select>
			<br>
			<br>
		  	<div class="form-group">
		    	<label class="hidden" for="zipCodeInput">Zip Code</label>
		    	<input type="number" class="form-control" id="zipCodeInput" placeholder="Zip Code">
		  	</div>
		  	<div class="form-group">
		    	<label class="hidden" for="unitFloorBuildingInput">Unit / Floor / Building</label>
		    	<input type="text" class="form-control" id="unitFloorBuildingInput" placeholder="Unit / Floor / Building">
		  	</div>
		</form>
      </div><!-- end: modal-body -->
      <div class="modal-footer">
        <button type="button" class="button" data-dismiss="modal">Cancel</button>
        <button type="button" class="button">Update</button>
      </div>
    </div>
  </div>
</div><!-- end: edit-contact-info -->



<!-- Edit Listing Home Address -->

<div id="edit-listing-home-address" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="edit-listing-home-addressLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close text-button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="edit-listing-home-addressLabel">Edit: Listing Home Address</h4>
      </div>
      <div class="modal-body">
		<span><b>Address:</b></span>
	  	<div class="form-group">
	    	<label class="hidden" for="streetAddressInput2">Street Address</label>
	    	<input type="text" class="form-control" id="streetAddressInput2" placeholder="Street Address">
	  	</div>
	  	<div class="form-group">
	    	<label class="hidden" for="addressLine2Input2">Address Line 2</label>
	    	<input type="text" class="form-control" id="addressLine2Input2" placeholder="Address Line 2">
	  	</div>
	  	<div class="form-group">
	    	<label class="hidden" for="cityInput2">City</label>
	    	<input type="text" class="form-control" id="cityInput2" placeholder="City">
	  	</div>
		<select>
			<option value=""></option><option value="Alabama" selected="selected">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option><option value="Armed Forces Americas">Armed Forces Americas</option><option value="Armed Forces Europe">Armed Forces Europe</option><option value="Armed Forces Pacific">Armed Forces Pacific</option>
		</select>
		<br>
		<br>
	  	<div class="form-group">
	    	<label class="hidden" for="zipCodeInput2">Zip Code</label>
	    	<input type="number" class="form-control" id="zipCodeInput2" placeholder="Zip Code">
	  	</div>
	  	<div class="form-group">
	    	<label class="hidden" for="unitFloorBuildingInput2">Unit / Floor / Building</label>
	    	<input type="text" class="form-control" id="unitFloorBuildingInput2" placeholder="Unit / Floor / Building">
	  	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="button" data-dismiss="modal">Cancel</button>
        <button type="button" class="button">Update</button>
      </div>
    </div>
  </div>
</div><!-- end: edit-listing-home-address -->



<!-- Information About the Listing -->


<div id="edit-info-about-listing" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="edit-info-about-listingLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close text-button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="edit-info-about-listingLabel">Edit: Information About the Listing</h4>
      </div>
      <div class="modal-body">
      	<form>
      		<span><b>Property Description</b></span>
	    	<textarea class="form-control" rows="8"></textarea>
	    	<br>
	    	<div class="">
		    	<div class="col-xs-6">
		      		<span><b>Listing Price</b></span>
			      	<input type="number" class="form-control" id="listingPrice" placeholder="$">
		      		<br>
		      		<span><b>Property Type</b></span>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					    Single family residential
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					    Condo
					  </label>
					</div>
		      		<span><b>Lot Size</b></span>
		      		<br>
		      		<span>Width</span>
			      	<input type="number" class="form-control" id="lotWidth" placeholder="">
		      		<span>Depth</span>
			      	<input type="number" class="form-control" id="lotDepth" placeholder="">
			    </div><!-- end: col-xs-6 -->
		    	<div class="col-xs-6">
		      		<span><b>HOA/Maintenance</b></span>
			      	<input type="number" class="form-control" id="hoaMaintenance" placeholder="$">
			      	<br>
		      		<span><b>Bedrooms</b></span>
					<select class="form-control">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					</select>
			      	<br>
		      		<span><b>Bathrooms</b></span>
					<select class="form-control">
					  <option>1</option>
					  <option>1.5</option>
					  <option>2</option>
					  <option>2.5</option>
					  <option>3</option>
					  <option>3.5</option>
					</select>
					<br>
		      		<span><b>House/condo squre footage</b></span>
			      	<input type="number" class="form-control" id="squareFootage" placeholder="">
			      	<br>
		      		<span><b>Year Built</b></span>
			      	<input type="number" class="form-control" id="yearBuilt" placeholder="">
			    </div><!-- end: col-xs-6 -->
	    	</div>
    	</form>
    	<div class="clearfix"></div>
    	<button type="button" class="button" data-dismiss="modal">Cancel</button>
        <button type="button" class="button">Update</button>
      </div><!-- end: modal-body -->
    </div><!-- end: modal-content -->
  </div><!-- end: modal-dialog -->
</div><!-- end: edit-info-about-listing -->




<!-- Specific Information About the Property -->

<div id="edit-specific-property-info" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="edit-specific-property-infoLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close text-button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="edit-specific-property-infoLabel">Edit: Specific Information About the Property</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="button" data-dismiss="modal">Cancel</button>
        <button type="button" class="button">Update</button>
      </div>
    </div>
  </div>
</div><!-- end: edit-specific-property-info -->

<!-- End Modals -->


<!-- Start Popovers -->

<!-- Move Popover -->

<div id="move-popover-title" class="hidden">Move Image</div>
<div id="move-popover-content" class="hidden">
	<span>Position:</span>
	<select>
	  <option value="1">1 (current)</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	</select>
	<br>
	<br>
	<button class="text-button tooltip-text-button">Cancel</button>
	<button class="tooltip-primary-button">Move</button>
 </div><!-- end: move-popover-content -->

<!-- End Popovers -->
