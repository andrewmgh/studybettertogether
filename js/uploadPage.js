

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
