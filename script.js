 function Goodshoot() {
            

        var Name=document.getElementById("txtName").value;
        var Name=document.getElementById("txtEmail").value;
        var Name=document.getElementById("txtMobile").value;
        var Name=document.getElementById("txtOccasions").value;
        
        if (txtName.value =="") 
        {
            window.alert("Please enter your name");
            Name.focus();
            return false;
        }

        if (txtEmail.value =="") 
        {
            window.alert("Please enter your valid Email address");
            Name.focus();
            return false;
        }

        if (txtMobile .value =="") 
        {
            window.alert("Please enter you Mobile Number");
            Name.focus();
            return false;
            
        }

        if (txtOccasions.selectedIndex < 1) 
        {
            alert("Please enter your occasion");
            Occasions.focus();
            return false;
        }
  
        return true;



        
    }
