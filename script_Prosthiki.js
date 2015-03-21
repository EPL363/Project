
    function handleWizardNextStep2To3() {
        document.getElementById('Step1').style.display = 'none';
        document.getElementById('Step2').style.display = 'none';
        document.getElementById('Step4').style.display = 'none';
        document.getElementById('Step5').style.display = 'none';
        document.getElementById('Step3').style.display = '';

        // Change background color on header to highlight new step
        document.getElementById('HeaderTableStep2').style.color= '#9DA1A3';
        document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep3').style.color = '#66CCFF';
        document.getElementById('HeaderTableStep4').style.color = '#000000';
        document.getElementById('HeaderTableStep5').style.color = '#000000';
    }

    function handleWizardNextStep4To5() {
        document.getElementById('Step1').style.display = 'none';
        document.getElementById('Step2').style.display = 'none';
        document.getElementById('Step4').style.display = 'none';
        document.getElementById('Step3').style.display = 'none';
        document.getElementById('Step5').style.display = '';

        // Change background color on header to highlight new step
        document.getElementById('HeaderTableStep2').style.color= '#9DA1A3';
        document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep3').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep4').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep5').style.color = '#66CCFF';
    }

    function handleWizardPreviousStep5to4(){
        document.getElementById('Step1').style.display = 'none';
        document.getElementById('Step2').style.display = 'none';
        document.getElementById('Step5').style.display = 'none';
        document.getElementById('Step3').style.display = 'none';
        document.getElementById('Step4').style.display = '';

        // Change background color on header to highlight new step
        document.getElementById('HeaderTableStep2').style.color= '#9DA1A3';
        document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep3').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep5').style.color = '#000000';
        document.getElementById('HeaderTableStep4').style.color = '#66CCFF';
    }

    function handleWizardPreviousStep4to3(){
        document.getElementById('Step1').style.display = 'none';
        document.getElementById('Step2').style.display = 'none';
        document.getElementById('Step5').style.display = 'none';
        document.getElementById('Step4').style.display = 'none';
        document.getElementById('Step3').style.display = '';

        // Change background color on header to highlight new step
        document.getElementById('HeaderTableStep2').style.color= '#9DA1A3';
        document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep3').style.color = '#66CCFF';
        document.getElementById('HeaderTableStep5').style.color = '#000000';
        document.getElementById('HeaderTableStep4').style.color = '#000000';
    }

    function handleWizardPreviousStep3to2(){
        document.getElementById('Step1').style.display = 'none';
        document.getElementById('Step3').style.display = 'none';
        document.getElementById('Step5').style.display = 'none';
        document.getElementById('Step4').style.display = 'none';
        document.getElementById('Step2').style.display = '';

        // Change background color on header to highlight new step
        document.getElementById('HeaderTableStep2').style.color= '#66CCFF';
        document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep3').style.color = '#000000';
        document.getElementById('HeaderTableStep5').style.color = '#000000';
        document.getElementById('HeaderTableStep4').style.color = '#000000';
    }

    function handleWizardPreviousStep2to1(){
        document.getElementById('Step2').style.display = 'none';
        document.getElementById('Step3').style.display = 'none';
        document.getElementById('Step5').style.display = 'none';
        document.getElementById('Step4').style.display = 'none';
        document.getElementById('Step1').style.display = '';

        // Change background color on header to highlight new step
        document.getElementById('HeaderTableStep2').style.color= '#000000';
        document.getElementById('HeaderTableStep1').style.color = '#66CCFF';
        document.getElementById('HeaderTableStep3').style.color = '#000000';
        document.getElementById('HeaderTableStep5').style.color = '#000000';
        document.getElementById('HeaderTableStep4').style.color = '#000000';
    }


