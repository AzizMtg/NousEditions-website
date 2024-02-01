
/***************  partie 1  *************************/
let submit = document.getElementById("submit");

function hello(event) {

   
    let sujet = document.getElementById("suijet");
    let textarea = document.getElementById("textarea"); 




  
    let c3 = /^[A-Za-z]$|^[A-Za-z][A-Za-z0-9]*$/; // 7arf louwil yizim ikoun lettre il ba9i 3adi


    // kan il kolhom is7a7
    if ((sujet.value.length >= 1) && (textarea.value.length >= 1 )  )
    {
            let form = document.getElementById("form"); // Replace "yourFormId" with the actual ID of your form
            form.submit();
        
    }
    else 
  {    event.preventDefault(); // Prevent the default form submission
      
        
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






       
      