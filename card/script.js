const button = document.getElementById('btn');
button.addEventListener('contextmenu', (e) => {
  e.preventDefault();
});

button.addEventListener('mouseup', (e) => {
  switch (e.button) {
    case 0:
      alert((textContent = 'Left mouse button clicked.'));
      break;
    case 1:
      alert((textContent = 'middle mouse button clicked.'));
      break;
    case 2:
      alert((textContent = 'right mouse button clicked.'));
      break;
    default:
      alert((textContent = `Unknown mouse button code: ${event.button}`));
  }
});
