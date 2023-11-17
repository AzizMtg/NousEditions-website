
/***************  partie 1  *************************/
let submit = document.getElementById("submit");

function hello(event) {

    let nom = document.getElementById("nom");
    let prenom = document.getElementById("prenom");
    let sujet = document.getElementById("suijet");
    let textarea = document.getElementById("textarea"); 
    let email = document.getElementById("email"); 




    let c1 = /^[A-Za-z]+$/;  // lettre uniquement
    let c2 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // les mail il kol ay forme
    let c3 = /^[A-Za-z]$|^[A-Za-z][A-Za-z0-9]*$/; // 7arf louwil yizim ikoun lettre il ba9i 3adi


    // kan il kolhom is7a7
    if ((nom.value.length >= 1 && c1.test(nom.value)) && (prenom.value.length >= 1 && c1.test(prenom.value)) && (sujet.value.length >= 1) && (textarea.value.length >= 1 ) && (email.value.length >= 1 && c2.test(email.value)))
    {
            let form = document.getElementById("form"); // Replace "yourFormId" with the actual ID of your form
            form.submit();
        
    }
    else 
  {    event.preventDefault(); // Prevent the default form submission
       //nom
        if (nom.value.length >= 1 && c1.test(nom.value))
        {
            displayMessage('div1', 'correcte', 'green'); 
        }
        else 
        {
         displayMessage('div1', 'veuillez entrer un nom valide (lettre uniquement)', 'red');
        }

        //prenom
        if (prenom.value.length >= 1 && c1.test(prenom.value)) {
            displayMessage('div2', 'correcte', 'green'); 
        } else {
            displayMessage('div2', 'veuillez entrer un prenom valide (lettre uniquement)', 'red');
             
        }
        
        //subject
        
        if (sujet.value.length >= 1 && c3.test(sujet.value)) {
            displayMessage('div3', 'correcte', 'green'); 
        } else {
            displayMessage('div3', 'veuillez remplir ce champ ', 'red');
            
        }

         
        //textarea
        if (textarea.value.length >= 1 ) {
            displayMessage('div4', 'correcte', 'green'); 
        } else {
            displayMessage('div4', 'veuillez remplir ce champ', 'red');
            
        }
        
        // email
        if (email.value.length >= 1 && c2.test(email.value))
         { displayMessage('div5', 'correcte', 'green');
         } 
        else {
            displayMessage('div5', 'email invalide', 'red');
            
        }



    }

  
}

function displayMessage(containerId, message, color) 
{
    let p = document.createElement('p');
    let div = document.getElementById(containerId);
    let content = document.createTextNode(message);
    p.appendChild(content);
    p.style.color = color;

    let pre = div.querySelector('p');
    if (pre) { div.removeChild(pre); }

    div.appendChild(p);

   
}

submit.addEventListener('click', hello);






       
      