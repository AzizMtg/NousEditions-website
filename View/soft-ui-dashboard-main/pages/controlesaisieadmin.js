let myForm=document.getELementByID('myForm');
        myForm.addEventListener('submit',function(e){
            let myInput=document.getELementByID('firstName');
            let myRegex=/^[a-zA-Z\s]+$/;
            if(myInput.value.trim()=="" ){
                let myError=document.getElementById('error');
                myError.innerHTML="le firstname est requis";
                myError.style.color='red';
                e.preventDefault();


            }else if(myRegex.test(myInput.value)==false){
                let myError=document.getElementById('error');
                myError.innerHTML="le firstname doit comporter des lettre, des tiraits";
                myError.style.color='red';
                e.preventDefault();

            }
        }

        );