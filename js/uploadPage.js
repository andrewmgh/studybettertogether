

toggle_SpecificSharingBox = function () {
    $("#specificSharingBox").hide();
    
    if ($(this).val() == 'specific' ){
    $("#specificSharingBox").show();
    }
    
};

$(document).ready(function() {
    
    $("#sharingStatus").change(toggle_SpecificSharingBox);
    toggle_SpecificSharingBox.apply($("#sharingStatus"));
    
});


$(document).ready(function() {
    $("#s1").dropdownchecklist( { emptyText: "Click here to share with specific users...", width: 350, maxDropHeight: 150 } );
});


/*
		<p>
		<label  for="SpecificSharing">Share with Specific Users: </label>
		<select id="s1" name="CarBrandPref[]" multiple="multiple" size="3" tabindex="1" style="height:150px; width:150px" >
		   <option  value="Test"             > Test</option>
		   <option  value="Ford"            > Ford</option>
		   <option  value="Mercedes"        > Mercedes </option>
		   <option  value="GMC"             > GMC</option>
		   <option  value="Volkswagen"      > Volkswagen </option>
		   <option  value="Toyota"          > Toyota </option>
		   <option  value="Audi"            > Audi </option>
		 <option  value="BMW"             > BMW</option>
		   <option  value="Ford"            > Ford</option>
		   <option  value="Mercedes"        > Mercedes </option>
		   <option  value="GMC"             > GMC</option>
		   <option  value="Volkswagen"      > Volkswagen </option>
		   </select>
		</p> 

*/