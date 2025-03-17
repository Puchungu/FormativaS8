const sendInfoGet = () =>{
    let num = document.getElementById("num1").value;
    let cadena = `num=${num}`;
    let xml = new XMLHttpRequest();
    xml.onreadystatechange = () => {
        if(xml.readyState == 4 && xml.status == 200){
            console.log(xml.responseText);
            document.getElementById("res").innerText = "";
            document.getElementById("res").innerHTML = xml.responseText;
        }
    };
    xml.open("GET", "back.php?" + cadena, true);
    xml.send();
};
document.getElementById("btn").addEventListener("click", sendInfoGet);