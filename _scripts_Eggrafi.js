function checkPatter(id){
    
    if(document.getElementById(id).validity.patternMismatch){
        document.getElementById(id).submit();
    }
    else{
        
    }
    
                    
}

function validate(obj){
  if(!obj.checkValidity()){
    alert("You have invalid input. Correct it!");
    obj.focus();
  }
}
function handleWizardNext() {
        
            if (document.getElementById('ButtonNext').name == 'Step2') { 
                
                
            
                // Change the button name - we use this to keep track of which step to display on a click
                document.getElementById('ButtonNext').name = 'Step3';
                document.getElementById('ButtonPrevious').name = 'Step1';

                // Disable/enable buttons when reach reach start and review steps   
                document.getElementById('ButtonPrevious').disabled = '';
                
                // Set new step to display and turn off display of current step
                document.getElementById('Step1').style.display = 'none';
                document.getElementById('Step2').style.display = '';
                

                // Change background color on header to highlight new step
                document.getElementById('HeaderTableStep2').style.color= '#66CCFF';
                document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';

            }

            else if (document.getElementById('ButtonNext').name == 'Step3'){

                // Change the button name - we use this to keep track of which step to display on a click
                document.getElementById('ButtonNext').name = '';
                document.getElementById('ButtonPrevious').name = 'Step2';
                document.getElementById('Step2').style.display = 'none';
                document.getElementById('Step3').style.display = '';
                document.getElementById('ButtonNext').disabled = 'disabled';
                
                // Change background color on header to highlight new step
                document.getElementById('HeaderTableStep3').style.color= '#66CCFF';
                document.getElementById('HeaderTableStep2').style.color = '#9DA1A3';

            }

    }

        
        // This function handles style and display changes for each previous button click
        function handleWizardPrevious(){

            if (document.getElementById('ButtonPrevious').name == 'Step1'){

                // Change the button name - we use this to keep track of which step to display on a click
                document.getElementById('ButtonNext').name = 'Step2';
                document.getElementById('ButtonPrevious').name = '';

                // Disable/enable buttons when reach reach start and review steps
                document.getElementById('ButtonPrevious').disabled = 'disabled';

                // Set new step to display and turn off display of current step
                document.getElementById('Step2').style.display = 'none';
                document.getElementById('Step1').style.display = '';

                // Change background color on header to highlight new step
				document.getElementById('HeaderTableStep1').style.color= '#66CCFF';
                document.getElementById('HeaderTableStep2').style.color = '#000000';

            }

            else if (document.getElementById('ButtonPrevious').name == 'Step2'){

                // Change the button name - we use this to keep track of which step to display on a click
                document.getElementById('ButtonNext').name = 'Step3';
                document.getElementById('ButtonPrevious').name = 'Step1';

                // Set new step to display and turn off display of current step
                document.getElementById('Step3').style.display = 'none';
                document.getElementById('Step2').style.display = '';

                document.getElementById('ButtonNext').disabled = '';
                
                // Change background color on header to highlight new step
                document.getElementById('HeaderTableStep2').style.color= '#66CCFF';
                document.getElementById('HeaderTableStep3').style.color = '#000000';
            }

        }


        

        // This function handles loading the review table innerHTML for the user to review before final submission

        function loadStep5Review()

        {

           
        }