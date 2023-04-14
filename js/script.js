let popupTrigger1 = document.getElementById('popup-trigger1');
let popupTrigger2 = document.getElementById('popup-trigger2');
let popupTrigger3 = document.getElementById('popup-trigger3');
let popupTrigger4 = document.getElementById('popup-trigger4');
let popupTrigger5 = document.getElementById('popup-trigger5');
let closePopupBtn1 = document.getElementById("close-popup1");
let closePopupBtn2 = document.getElementById("close-popup2");
let closePopupBtn3 = document.getElementById("close-popup3");
let closePopupBtn4 = document.getElementById('close-popup4');
let closePopupBtn5 = document.getElementById('close-popup5');
let popup1 = document.getElementById('popup1');
let popup2 = document.getElementById('popup2');
let popup3 = document.getElementById('popup3');
let popup4 = document.getElementById('popup4');
let popup5 = document.getElementById('popup5');

popupTrigger1.addEventListener('click', () => {
  popup1.style.display = 'block';
});
popupTrigger2.addEventListener('click', () => {
  popup2.style.display = 'block';
});
popupTrigger3.addEventListener('click', () => {
  popup3.style.display = 'block';
});
popupTrigger4.addEventListener('click', () => {
  popup4.style.display = 'block';
});
popupTrigger5.addEventListener('click', () => {
  popup5.style.display = 'block';
});

closePopupBtn1.addEventListener('click', () => {
  popup1.style.display = 'none';
});
closePopupBtn2.addEventListener('click', () => {
  popup2.style.display = 'none';
});

closePopupBtn3.addEventListener('click', () => {
  popup3.style.display = 'none';
});
closePopupBtn4.addEventListener('click', () => {
  popup4.style.display = 'none';
});
closePopupBtn5.addEventListener('click', () => {
  popup5.style.display = 'none';
});
