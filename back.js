const sendInfoGet = () =>{
    let xml = new XMLHttpRequest();
    xml.onreadystatechange = () => {
        if(xml.readyState == 4 && xml.status == 200){
            console.log(xml.responseText);
            document.getElementById("res").innerText = "";
            document.getElementById("res").innerHTML = xml.responseText;
        }else {
            console.log('Error: ' + xml.statusText);
        }
    };
    xml.open("GET", "back.php?", true);
    xml.send();
};

sendInfoGet();