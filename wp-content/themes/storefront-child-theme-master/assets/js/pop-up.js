 var button1 = document.querySelector('#link');

 button1.addEventListener('click', (e) => {
     sessionStorage.setItem('idade', 1);
 })

function closeModal(mn){
  let modal = document.getElementById(mn);
  if(typeof modal == 'undefined' || modal == null)
  return
  modal.style.display = 'none';
  let element = document.body;
     element.classList.toggle('com-scroll');
}

     function openModal(mn) { 
     let modal = document.getElementById(mn);
     if(typeof modal == 'undefined' || modal === null)
     return;
     modal.style.display = 'block';
     let element = document.body;
     element.classList.toggle('sem-scroll');

   }


   var button2 = document.getElementById('btn1');
  button2.addEventListener('click', (e) => {
  sessionStorage.setItem('idade', 2);
})
    let teste = sessionStorage.getItem('idade');
    if( teste == 1 ){
      console.log(teste)
     window.addEventListener('load', (event) => {
      
       openModal('dv-modal');
         });
     }

	

     window.addEventListener('load', (event) => {
	if(teste == 2) {
       closeModal('dv-modal');
} else {
openModal('dv-modal');
}
         });

