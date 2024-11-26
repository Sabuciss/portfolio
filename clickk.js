function clickCounter() {
    if (typeof(Storage) !== "undefined") {
      if (localStorage.clickcount) {
        localStorage.clickcount = Number(localStorage.clickcount)+1;
      } else {
        localStorage.clickcount = 1;
      }
      document.getElementById("result").innerHTML = "Tu esi nospiedis:  " + localStorage.clickcount + " time(s).";
    } else {
      document.getElementById("result").innerHTML = "Sowwyy";
    }
  }


let mainig = 0 ;
 
function clickk(){
      console.log("strada");
      mainig=mainig + 1 ; 
document.getElementById("poga").textContent= mainig;
  }
