
const input = document.getElementById('input');
const pushBtn = document.querySelector('#pushBtn');
const unshiftBtn = document.querySelector('#unshiftBtn');
const popBtn = document.querySelector('#popBtn');
const shiftBtn = document.querySelector('#shiftBtn');

var list = [];

pushBtn.onclick = e => {
  e.preventDefault();
  var value = input.value;
  if (value) {
    const a = list.push(value);
    itemList.innerHTML = list.join('<br>');
    input.value = '';
  } else {
    alert('Please type something!');
  }
};

popBtn.onclick = e => {
  e.preventDefault();
  var value = input.value;
  if (list.length == 0) {
    alert('!');
  } else {
    const a = list.pop();
    itemList.innerHTML = list.join('<br>');
    input.value = '';
  }
};

shiftBtn.onclick = e => {
  e.preventDefault();
  const value = input.value;
  if (list.length == 0) {
    alert('!');
  } else {
    const a = list.shift();
    itemList.innerHTML = list.join('<br>');
    input.value = '';
  }
};

unshiftBtn.onclick = e => {
  e.preventDefault();
  var value = input.value;
  if (value) {
    const a = list.unshift(value);
    itemList.innerHTML = list.join('<br>');
    input.value = '';
  } else {
    alert('Please type something!');
  }
};
