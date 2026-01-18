//elements
const wordsWrap = document.querySelector(".wordsWrap");
const typeSpace = document.getElementById("typeSpace");
const caret = document.getElementById("caret");
const wrdContainer = document.getElementById("words");
const words = Array.from(wrdContainer.children);
const overlay = document.getElementById("overlay");
const result = document.getElementById("result");

//functionality
let cntWord = 0;
let cntLttr = 0;
let cntWrdLttr = 0;
let wrdLttrs;

//stats
let errors = 0;
let errorsLeft = 0;
let extras = 0;
let extrasLeft = 0;

//offset
let rowScnd = getRow(1);
let indexLstScnd = rowScnd[rowScnd.length-1].dataset.wordindex;

//timer
let timerElmnt = document.getElementById("timer");
let timerEnd = false;
let typeStart = false;
let time = 30;

//caret blink
let blinkTimeout;

//initial setup
updateWrd();
document.addEventListener("load", () => )

wordsWrap.addEventListener("keydown", keyPrss)
wordsWrap.addEventListener("keydown", (event) => {
    if (!typeStart){
        typeStart = true;
        timerElmnt.textContent = time;
        timerElmnt.style.opacity = 1;
        timer(time);
    }
    caret.classList.add('is-typing');
    clearTimeout(blinkTimeout);
    blinkTimeout = setTimeout(() => {
        caret.classList.remove('is-typing');
    }, 250);
})
document.addEventListener('click', (event) => {

    if (event.target === overlay) {
            sessionStorage.setItem("focused", "true");
        moveCrt(false);
        caret.style.borderLeft = "solid yellow 2px";
        overlay.classList.add('hidden');
        return;
    }

    if (!typeSpace.contains(event.target)) {
            sessionStorage.setItem("focused", "false");
        caret.style.border = "";
        setTimeout(() => {overlay.classList.remove('hidden');}, 500)

    }
});

function result(){
    timerElmnt.style.opacity = 0;
    caret.style.border = "";
    console.log(errors);
    console.log(errorsLeft);
    console.log(extras);
    console.log(extrasLeft);
    //function for showing the result
}
function timer(sec){
    let countdown = setInterval(() => {
        sec--;
        timerElmnt.textContent = sec;
        if (sec <= 0) {
            clearInterval(countdown);
            timerEnd = true;
            result();
        }

    }, 1000)

}
function getRow(n){
    let items = Array.from(wrdContainer.children)
    let rows = [];
    let currentRow = [];
    let currentTop = items[0].offsetTop;

    items.forEach((item) => {

        if (item.offsetTop > currentTop) {
            rows.push(currentRow);
            currentRow = [];
            currentTop = item.offsetTop;
        }
        currentRow.push(item);
    });

    rows.push(currentRow);

    const distinctRow = rows[n];

    if (distinctRow) {
        // Return the last word in that row
        return distinctRow; //[distinctRow.length - 1]
    } else {
        return null; // Row doesn't exist
    }
}
function moveCrt(end, last = false){

    let wordPos;
    let containerPos = wrdContainer.getBoundingClientRect();
    if (last) {wordPos = wrdLttrs[cntLttr-1].getBoundingClientRect();} else
    {wordPos = wrdLttrs[cntLttr].getBoundingClientRect();}

    let moveX = (wordPos.left - containerPos.left) + wrdContainer.scrollLeft;
    if (end){
        moveX = moveX + wordPos.width;
    }
    let moveY = (wordPos.top - containerPos.top) + wrdContainer.scrollTop;
    caret.style.transform = `translate(${moveX}px, ${moveY}px)`;
    caret.style.width = `${wordPos.width}px`;
}
function updateWrd(){
    cntWrdLttr = words[cntWord].childElementCount;
    wrdLttrs = words[cntWord].querySelectorAll('p');
}
function backspace(){
    if (cntLttr < 1 && cntWord != 0){
        cntWord--;
        updateWrd();
        cntLttr = cntWrdLttr;
        moveCrt(true, true);
    } else if (wrdLttrs[cntLttr-1].classList.contains("extra")){

        errorsLeft--;
        extrasLeft--;
        cntLttr--;
        moveCrt(false);
        words[cntWord].lastElementChild.remove();
        updateWrd();

    } else if (cntLttr > 1){
        if (wrdLttrs[cntLttr-1].classList.contains("incorrect")){
            errorsLeft--;
        }
        cntLttr--;
        wrdLttrs[cntLttr].classList.remove("incorrect", "correct");
        moveCrt(false);

    } else {
        if (wrdLttrs[cntLttr-1].classList.contains("incorrect")){
            errorsLeft--;
        }
        cntLttr = 0;
        wrdLttrs[cntLttr].classList.remove("incorrect", "correct");
        moveCrt(false);

    }
}
function validity(key){
    if (key == wrdLttrs[cntLttr].textContent){
        wrdLttrs[cntLttr].classList.add("correct");
    } else {
        wrdLttrs[cntLttr].classList.add("incorrect");
        errors++;
        errorsLeft++;
    }

    moveCrt(true);
    cntLttr++;
}
function space(){
    if (cntWord+1 == indexLstScnd){
        getRow(0).forEach(element => {
            element.remove();
        });
        rowScnd = getRow(1);
        indexLstScnd = rowScnd[rowScnd.length-1].dataset.wordindex;
    }
    cntWord++;
    cntLttr = 0;
    cntWrdLttr = 0;

    wrdLttrs = words[cntWord].querySelectorAll('p');

    moveCrt(false);
}
function extraLttr(key){
    if (document.querySelectorAll('.extra').length > 7){
        extras++;
        return;
    }
    words[cntWord].innerHTML += `<p>${key}</p>`;
    updateWrd();
    wrdLttrs[cntLttr].classList.add("incorrect", "extra");
    extras++;
    errors++;
    errorsLeft++;
    extrasLeft++;
    moveCrt(true);
    cntLttr++;
}
function keyPrss(event){

    if (!timerEnd){

        if (cntWrdLttr == 0){
            updateWrd();
        }

        if (event.key == "Backspace"){
            backspace();
        } else if (cntLttr < cntWrdLttr){
            validity(event.key);
        } else  {
            if (event.key == " "){
                space();
            } else {
                extraLttr(event.key);
            }
        }

    }
}
