
let display = document.getElementById('display');

function press(value) {
  if (value === '=') {
    try {
      display.value = eval(display.value);
    } catch (e) {
      display.value = 'Error';
    }
  } else {
    display.value += value;
  }
}

function clearDisplay() {
  display.value = '';
}

function toggleMode() {
  const body = document.body;
  if (body.classList.contains('mode-dark')) {
    body.classList.remove('mode-dark');
    body.classList.add('mode-light');
  } else {
    body.classList.remove('mode-light');
    body.classList.add('mode-dark');
  }
}

