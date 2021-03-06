function validar(f){
	Username = f.elements["username"].value;
    PasswordOri = f.elements["password"].value;
    PasswordCheck = f.elements["passwordcheck"].value;
    Email = f.elements["mail"].value;
    Name = f.elements["name"].value;
    Lastname = f.elements["lastname"].value;
    Birthday = f.elements["birthday"].value;
    Birthmonth = f.elements["birthmonth"].value;
    Birthyear = f.elements["birthyear"].value;
    Gender = f.elements["gender"].value;
    Maillist = f.elements["maillist"].checked;
    Terms = f.elements["terms"].checked;
    if(!(PasswordOri==null || PasswordOri=="") || !(Username==null || Username=="")){
    	if(Username==null || Username==""){
    		alert("Username field is empty!");
			return false;
    	}
    	passw =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
		if(!PasswordOri.match(passw)){
			alert('Password must have between 7-15 characters and at least one digit and one special character lique / or &');
			return false;
		}
		else if(PasswordOri!=PasswordCheck){
			alert('Passwords don\'t match');
			return false;
		}
	}
	if(!(Email==null || Email=="")){
		atpos=Email.indexOf("@");
		dotpos=Email.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=Email.length){
  			alert("Not a valid e-mail address");
  			return false;
  		}
  	}
  	switch(Birthmonth){
  	    case "April" || "June" || "September" || "November":
  	    	if (Birthday=="31") {
  	    		alert("invalid date");
  	    		return false;
  	    	}
  	    break;
  	    case "February":
  	    	if (Birthday=="31" || Birthday=="30") {
  	    		alert("invalid date");
  	    		return false;
  	   		}
  	    	else if(Birthday=="29"){
  	    		year=parseInt(Birthyear);
  	    		if (!((year % 4 == 0) && ((year % 100 != 0) || (year % 400 == 0)))) {
  	    			alert("invalid date"); 
  	    			return false;
  	    		}
  	    	}
  	    break;
  	}
  	if(!(PasswordOri==null || PasswordOri=="") || !(Username==null || Username=="")){
  		if(Terms==false) {
  			alert("You have to accept our Terms & Conditions");
  			return false;
  		}
  	}
  	f.elements["navegador"].value = get_browser();
  	f.elements["hora"].value = new Date();
    return true;
}

function ChangeMethod(){
	form=document.getElementById("register");
	radio_post=document.getElementById("method_post").checked;
	radio_get=document.getElementById("method_get").checked;
	if(radio_get==true) form.method="get";
	else if(radio_post==true) form.method="post";
}

function ChangeEncType(){
	form=document.getElementById("register");
	radio_url=document.getElementById("enctype_urlencoded").checked;
	radio_multi=document.getElementById("enctype_multipart").checked;
    if(radio_multi==true) form.enctype="multipart/form-data";
    else if(radio_url==true) form.enctype="application/x-www-form-urlencoded";
}

function ChangeAction(){
	form=document.getElementById("register");
	radio_student=document.getElementById("action_student").checked;
	radio_teacher=document.getElementById("action_teacher").checked;
	if(radio_teacher==true)  form.action="/../../~lroprof/p1.php";
    else if(radio_student==true) form.action="p1.php";
}

function get_browser(){
	var Agent = navigator.userAgent;

	// Opera
	Offset=Agent.indexOf("Opera");
	if (Offset!=-1) {
		Name = "Opera";
	 	Offset2=Agent.indexOf("Version");
	 	if (Offset2!=-1) Version = Agent.substring(Offset+8);
	 	else Version = Agent.substring(Offset+6);
	 	Version=trim_version(Version);
	 	return Name + " " + Version;
	}
	//MSIE
	Offset=Agent.indexOf("MSIE");
	if (Offset!=-1) {
	 	Name = "Microsoft Internet Explorer";
	 	Version = Agent.substring(Offset+5);
	 	Version=trim_version(Version);
	 	return Name + " " + Version;
	}
	//Chrome
	Offset=Agent.indexOf("Chrome");
	if (Offset!=-1) {
	 	Name = "Chrome";
	 	Version = Agent.substring(Offset+7);
	 	Version=trim_version(Version);
	 	return Name + " " + Version;
	}
	//Safari
	Offset=Agent.indexOf("Safari");
	if (Offset!=-1) {
	 	Name = "Safari";
	 	Offset2=Agent.indexOf("Version");
	 	if (Offset2!=-1) Version = Agent.substring(Offset+8);
	  	else Version = Agent.substring(Offset+7);
	  	Version=trim_version(Version);
	  	return Name + " " + Version;
	}
	//Firefox
	Offset=Agent.indexOf("Firefox");
	if (Offset!=-1) {
	 	Name = "Firefox";
	 	Version = Agent.substring(Offset+8);
	 	Version=trim_version(Version);
	 	return Name + " " + Version;
	}
	
	return Agent;
}

function trim_version(Version){
	colon=Version.indexOf(";");
	space=Version.indexOf(" ");
	if (colon!=-1) Version=Version.substring(0,colon);
	if (space!=-1) Version=Version.substring(0,space);
   	return Version;
}