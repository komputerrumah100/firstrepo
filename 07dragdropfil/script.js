const fill = document.querySelector('.fill');
const emptys = document.querySelectorAll('empty');

// Fill listener
fill.addEventListener('dragstart',dragStart);
fill.addEventListener('dragend',dragEnd);

//  loop through empties
for( const empty of emptys) {
    empty.addEventListener('dragover', dragOver);
    empty.addEventListener('dragenter', dragEnter);
    empty.addEventListener('dragLeave', dragLeave);
    empty.addEventListener('drop', dragDrop);
}

//  Drag function
function dragStart(){
    this.className += ' hold';
    setTimeout(()=>(this.className = 'invisbly'),0);
    console.log('start');
}
function dragEnd(){
    this.className = "fill";
    console.log('end');
}

function dragOver(e){
    e.preventDevault();
    console.log('over');
}
function dragEnter(e){
    e.preventDevault();
    console.log('Enter');

}
function dragLeave(){
    console.log('Leave');

}
function dragDrop(){
    console.log('drop');

}
