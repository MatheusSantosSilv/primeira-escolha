document.addEventListener('DOMContentLoaded', () => {
  console.log('DOM carregado');
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  const targets = document.querySelectorAll('.target');
  targets.forEach(target => {
    observer.observe(target);
  });

  
  window.onload = function () {
    const menuClickable = document.getElementById('menu-clickable');
    const collapseTarget = document.querySelector('.collapse-target');

    if (!menuClickable || !collapseTarget) return;

    menuClickable.addEventListener('click', () => {
      collapseTarget.classList.toggle('visible-collapse');
    });


    //funcao collapse pra navegacao na parte do catalogo
    const menuClickableCatalogo = document.getElementById('menu-clickable-catalogo');
    const collapseTargetCatalogo = document.querySelector('.collapse-target-catalogo');


    if (!menuClickableCatalogo || !collapseTargetCatalogo) return;

    menuClickableCatalogo.addEventListener('click', (event) => {
      event.preventDefault();
      collapseTargetCatalogo.classList.toggle('visible-collapse');
    });
    window.addEventListener('scroll', () => {
      if (window.scrollY > 0) { // Se o usuário rolou para baixo
        collapseTargetCatalogo.classList.remove('visible-collapse');
        collapseTarget.classList.remove('visible-collapse');
      }
    });


    //funcao para fazer o jogo de palavras da home  
    const texts = ["jóias.", "prata.", "ouro.", "bijuterias.", "presentes.", "acessórios."];

    let index = 0;
    const textElement = document.getElementById("replaceable");

    function changeText() {
      index = (index + 1) % texts.length;
      textElement.style.opacity = 0;
      setTimeout(() => {
        textElement.textContent = texts[index];
        textElement.style.opacity = 1;
      }, 700);
    }

    setInterval(changeText, 2500);
  };

});
