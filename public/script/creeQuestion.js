const quest = document.getElementById("quest");
const number = document.getElementById("number");
const typeRep = document.getElementById("typeRep");
const inputs = document.getElementById("inputs");
const btnPlus  = document.getElementById("btnPlus");
const vide=document.getElementById('vide');
// creation des evenements
let i=1;
function ajoutInput(){

    var div=document.createElement('div');
    var label=document.createElement('label');
    label.innerHTML='reponse' +i
    var input=document.createElement('input');
    input.setAttribute('type','text');
    var img=document.createElement('img');
    img.src='img/ic-supprimer.png';
    var input2=document.createElement('input');
    input.setAttribute('class','input');
    i++;
    img.addEventListener('click',function(e){
        div.remove();
    })
    switch (typeRep.value) {
        case 'opt1':
            input2.type='radio';
            
            break;
            case 'opt2':
                input2.type='checkbox';
            
                break;
                case 'opt3':
                    input2.type='hidden';
            
                break;
           
        default:
            '0';
            break;
    }
   
    div.append(label,input,input2,img)
    vide.appendChild(div);
}

btnPlus.onclick=ajoutInput;



































/* btnPlus.addEventListener("click", addQuestion)


function addQuestion() {
    switch (typeRep.value) {
        case "opt3":
            choixTexte();

            break;
        case "opt2":
            choixMultiple();
            break;
        case "opt1":
            ReponseSimple();
            alert("choix simple")
            break;
        default:
             alert("veuillez choisir un type")
    }
}


function choixTexte() {
    var divContent = document.createElement("div")
    var label = document.createElement("label")
    var inputText = document.createElement("input")
    var btnSup = document.createElement("button")

    label.innerHTML = "Reponse"
    inputText.setAttribute("name", "reponse[]")
    btnSup.innerHTML = "sup"


    divContent.appendChild(label)
    divContent.appendChild(inputText)
    divContent.appendChild(btnSup)
    divContent.className = "quest"

    inputs.appendChild(divContent)

    btnSup.addEventListener("click", function() {
            divSup = this.parentElement;
            inputs.removeChild(divSup)
        }) */
        // btnPlus.style.visibility = "hidden"
/* }
 */

/* function choixMultiple() {
    var divContent = document.createElement("div")
    var label = document.createElement("label")
    var inputText = document.createElement("input")
    var btnSup = document.createElement("button")
    var inputCheck = document.createElement("input")

    label.innerHTML = "Reponse"
    inputText.setAttribute("name", "choix[]")
    btnSup.innerHTML = "sup"
    inputCheck.setAttribute("type", "checkbox")
    inputCheck.setAttribute("name", "reponse[]")

    inputCheck.addEventListener("click", function() {
        inputCheck.setAttribute("value", inputText.value)
        alert("okkk")
        console.log(inputText.value)
    })


    divContent.appendChild(label)
    divContent.appendChild(inputText)
    divContent.appendChild(inputCheck)
    divContent.appendChild(btnSup)
    divContent.className = "divInputQuest"

    divAllInput.appendChild(divContent)

    btnSup.addEventListener("click", function() {
        divSup = this.parentElement;
        divAllInput.removeChild(divSup)
    })
} */


