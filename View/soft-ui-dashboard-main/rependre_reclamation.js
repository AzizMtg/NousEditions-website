



let submit = document.getElementById("submit");

function hello(event) {

    let repense = document.getElementById("repense"); 





    // kan il kolhom is7a7
    if (repense.value.length >= 1 )
    {
            let form = document.getElementById("form"); // Replace "yourFormId" with the actual ID of your form
            form.submit();
        
    }
    else 
  {    event.preventDefault(); // Prevent the default form submission
       
       
        //textarea
        if (repense.value.length >= 1 ) {
            displayMessage('div1', 'correcte', 'green'); 
        } else {
            displayMessage('div1', 'Ecrire votre repense', 'red');
            
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