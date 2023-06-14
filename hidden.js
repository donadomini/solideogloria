const el = document.getElementById('box');

const hiddenEl = document.getElementById('hidden');


el.addEventListener('mouseover', function handleMouseOver() {
  hiddenEl.style.display = 'block';

});

el.addEventListener('mouseout', function handleMouseOut() {
  hiddenEl.style.display = 'none';

});
