const my_form_validator= new validator("contactform");
my_form_validator.addvalidation("name","req"," please provide your name");
my_form_validator.addvalidation("email","req"," please provide your email");
my_form_validator.addvalidation("name","email"," please provide a valid emali");