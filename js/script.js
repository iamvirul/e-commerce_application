function Googlelogin(){ 
   var xhttps = new XMLHttpRequest();
   xhttps.onreadystatechange = function(){
    if(this.readyState == 4){
        var text = xhttps.responseText;
        alert(text);
        window.location.href = text;
    }
   }
   xhttps.open("POST","backend/loginP.php",true);
   xhttps.send();
}