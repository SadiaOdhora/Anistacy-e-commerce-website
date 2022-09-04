const bar = document.getElementById('bar')
const close = document.getElementById('close')
const nav = document.getElementById('navbar');
const nav2 = document.getElementById('navbar2');

if (bar) {
  bar.addEventListener('click', () => {
    nav.classList.add('active');
  });
}
if (bar) {
  bar.addEventListener('click', () => {
    nav2.classList.add('active');
  });
}
if (close) {
  close.addEventListener('click', () => {
    nav.classList.remove('active');
  });
}
