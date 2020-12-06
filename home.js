function Getstore() {//Function for onchange 
    var str = document.getElementById("getstore").value;
    var xmlhttp = new XMLHttpRequest();//creating an object for xmlhttprequest
    xmlhttp.onreadystatechange = function () {//onreadystate
        if (this.readyState == 4 && this.status == 200) {//when ready state is ok
            document.getElementById("txtHint").innerHTML = this.responseText;//put text back to html page
        }
    };
    xmlhttp.open("GET", "getstore.php?q=" + str, true);//open php file for further operations
    xmlhttp.send();//send request
}
function fun()
    {
        var x = document.getElementById('submit');
        if(x)
        {
            alert('We will Came to you soon!');
        }
    
}