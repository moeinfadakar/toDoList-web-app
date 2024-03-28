



function blue(){
    color.style.backgroundColor = "lightBlue";
    color.style.transition = ".5s";
    color.style.color = "black"

}

function red(){
    color.style.backgroundColor = "pink";
    color.style.transition = ".5s";
    color.style.color = "black"
}
function green(){
    color.style.backgroundColor = "lightGreen"
    color.style.transition = ".5s";
    color.style.color = "black";
}

function yellow(){
    color.style.backgroundColor = "rgb(228, 228, 184)"
    color.style.transition = ".5s"; 
    color.style.color = "black"
}
function black(){
    color.style.backgroundColor = "black"
    color.style.transition = ".5s"; 
    color.style.color = "red";
    color.style.backgroundColor = "black"
}
function white(){
    color.style.backgroundColor = "white"
    color.style.transition = ".5s"; 
    color.style.color = "black"
}

let Send__info = document.getElementById("Send__info");
let recive__info = document.getElementById("recive__info");

function Edit(){
let need =  Send__info.value
recive__info.value = need
recive__info.innerHTML = need
}

function Delete(){
let text = document.getElementById("text");

text.innerHTML = " ";


}
