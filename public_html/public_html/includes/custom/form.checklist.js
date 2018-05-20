// JavaScript Document




window.addEvent('domready', function(){
	var fieldArray				= new Array();
	fieldArray['name'] 			= "Name:";
	fieldArray['company'] 		= "Company:";
	fieldArray['phone'] 		= "Phone:";
	fieldArray['website'] 		= "Website:";
	fieldArray['email'] 		= "Email:";
	fieldArray['message'] 		= "Questions / Comments";
	
	new fieldReplacer('.checklist', fieldArray);
});

function onFormSubmitChecklist() {
	
}