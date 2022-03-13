const quest = document.getElementById("quest");
const number = document.getElementById("number");
const typeRep = document.getElementById("typeRep");
const inputs = document.getElementById("inputs");
const btnPlus  = document.getElementById(" btnPlus ");


// creation des evenements

btnPlus.addEventListener("click", addQuestion)


function addQuestion() {
    switch (typeRep.value) {
        case "texte":
            choixTexte();

            break;
        case "choix multiple":
            choixMultiple();
            break;
        case "choix simple":
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
        })
        // btnPlus.style.visibility = "hidden"
}


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