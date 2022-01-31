/* Script that periodically lunch animated elements */

let repiteAnimations = setInterval(sequenceSwithcer, 10000);
function sequenceSwithcer() {
  
  function sequenceIcon1() {
    let x = document.getElementById("theme-left-container");
    x.className = "theme-left-container";
    function reset(){
      x.className = "x";
    }
    let fireRest = setTimeout(reset, 8000);
  }
  function sequenceIcon2() {
    let x = document.getElementById("theme-right-container");
    x.className =  "theme-right-container";
    function reset(){
      x.className = "x";
    }
    let fireRest = setTimeout(reset, 8000);
  }
  function sequenceIcon3() {
    let x = document.getElementById("plugin-left-container");
    x.className = "plugin-left-container";
    function reset(){
      x.className = "x";
    }
    let fireRest = setTimeout(reset, 8000);
  }
  function sequenceIcon4() {
    let x = document.getElementById("plugin-right-container");
    x.className = "plugin-right-container";
    function reset(){
      x.className = "x";
    }
    let fireRest = setTimeout(reset, 8000);
  }
  
  let sequenceArray = [sequenceIcon1, sequenceIcon2, sequenceIcon3, sequenceIcon4];
  let i = Math.floor(Math.random() * sequenceArray.length);
  sequenceArray[i]();
}