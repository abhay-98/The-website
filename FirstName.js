 function FirstName()
            {
                var a = document.getElementById("Fname").value;
                /*this will give alert if field is empty*/
                if(a == "")
                {
                    alert("fullname must be filled");
                    return false;
                }else
                {
                   
                }
                /*this will give alert if you entered any special characters*/
                var i=0;
                for(j=0;j<=a.length;j++)
                {
                    /*you can check all ascii character table on http://ascii.cl/htmlcodes.htm*/
                   if(a.charCodeAt(j)>=33 && a.charCodeAt(j)<=47 || a.charCodeAt(j)>=58 && a.charCodeAt(j)<=64 || a.charCodeAt(j)>=91 && a.charCodeAt(j)<=96 || a.charCodeAt(j)>=123 && a.charCodeAt(j)<=126)
                   {
                       i++;
                   }
                }
                /*if special character found after i++ increament of i*/
                if(i!=0)
                {
                    alert("Special characters not allowed");
                   return false;
                }else
                {
                   
                }
                
                
                /*this will give alert if you =entered any number*/
                var i=0;
                for(j=0;j<=a.length;j++)
                {
                    /*you can check all ascii character table on http://ascii.cl/htmlcodes.htm*/
                   if(a.charCodeAt(j)>=48 && a.charCodeAt(j)<=57)
                   {
                       i++;
                   }
                }
                /*give alert if number not found after i++ increament of i*/
                if(i!=0)
                {
                    alert("numbers not allowed");
                   return false;
                }else
                {
                   
                }
                if ((a.length < 5) || (a.length > 15))
                {
                    alert("Your Character must be between 5 to 15 Character");
                    return false;
                }else
                {
                  alert("You have successfully submited a fullname: "+a);   
                }
            }
                