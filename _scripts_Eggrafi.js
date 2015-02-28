
function checkUsername(){
    var x= document.forms["user-register"]["userName"].value;
    var reg = /^[a-zA-Z][a-zA-Z0-9-_\.]{5,20}$/;
    if(!x.match(reg)){
        $(document).ready(function(){
            $('#wrongUsername').show();
        });
        return false;
    }
    else{
        $(document).ready(function(){
            $('#wrongUsername').hide();
        });
        return true;
    }
    
    
}      

function checkPass(){
    var x= document.forms["user-register"]["pass"].value;
    if(x.length<5){
        $(document).ready(function(){
            $('#wrongPass').show();
        });
        return false;
    }
    else{
        $(document).ready(function(){
            $('#wrongPass').hide();
        });
        return true;
    }
    
}

function checkPassMatch(){
    var p = document.forms["user-register"]["pass"].value;
    var pv =  document.forms["user-register"]["passConf"].value;
    if(p===pv){
        $(document).ready(function(){
            $('#wrongPassM').hide();
            $('#rightPassM').show();
        });
        return true;
    }
    else{
        $(document).ready(function(){
            $('#wrongPassM').show();
            $('#rightPassM').hide();
        });
        return false;
    }
}




function handleWizardNext() {
        
            if (document.getElementById('ButtonNext').name == 'Step2') { 
                if(checkPass() && checkPassMatch() && checkUsername()){
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