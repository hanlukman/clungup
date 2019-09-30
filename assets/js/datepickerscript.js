function showDate() {

    var str=document.getElementById("mymonth").value;
    var str1=document.getElementById("myyear").value;
  if (str==0) {// if nothing is selected from first drop down
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else {
                    // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                        document.getElementById("txtHint").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","getdate.php?selectedmonth="+str+"&selectedyear="+str1,true);
                xmlhttp.send();
            }