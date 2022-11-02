  const nrWrite = document.getElementById('number');
  const montCr = document.getElementById('upgCr');
  const calculateBtn = document.getElementById('Btn-calculate');
  const currentResultOutput = document.getElementById('current-result');

  function calculator() {    
   if (nrWrite.value <= 30) {
     if ((nrWrite.value <= 30) && !montCr.checked) {
      result = standard * nrWrite.value;
     } else if ((nrWrite.value <= 30) && montCr.checked) {
      result = (standard * nrWrite.value) + (200 * nrWrite.value);
     }
   } else if (30 < nrWrite.value <= 60) {
    if ((30 < nrWrite.value <= 60) && !montCr.checked) {
      result = mOpt * nrWrite.value;
     } else if ((30 < nrWrite.value <= 60) && montCr.checked) {
      result = (mOpt * nrWrite.value) + (200 * nrWrite.value);
     }
      let currentResult = parseInt(result);
      currentResultOutput.textContent = currentResult;
    }
     if (60 < nrWrite.value) {
      if ((60 < nrWrite.value) && !montCr.checked) {
        result = kOpt * nrWrite.value;
       } else if ((60 < nrWrite.value) && montCr.checked) {
        result = (kOpt * nrWrite.value) + (200 * nrWrite.value);
       }
      let currentResult = parseInt(result);
      currentResultOutput.textContent = currentResult;
  }
    let currentResult = parseInt(result);
    currentResultOutput.textContent = currentResult;
    // if (nrWrite.value <= 0 || nrWrite = '') {
    //   currentResultOutput.textContent = 'Skotina nika nu a scris';      
    // }
  }

  document.onkeydown=key;
function key()
{
 window.status=event.keyCode;
 if(event.keyCode==13)document.getElementById("Btn-calculate").click();;
}


  calculateBtn.addEventListener('click', calculator);
  calculateBtn.addEventListener(key, calculator);
