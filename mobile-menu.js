(function(){
  'use strict';

  class Menu {
    constructor(settings) {
      this.menuNode = settings.menuNode;
    }
    
    toggleMenuState(className) {      
      if (typeof className !== 'string' || className.length === 0) {
        return console.log('you did not give the class for toggleState function');
      } 
      return  this.menuNode.classList.toggle(className);
    }
  }

  const jsMenuNode = document.querySelector('.menu');
  const demoMenu = new Menu ({
    menuNode: jsMenuNode
  });
  
  function callMenuToggle(event) {
    demoMenu.toggleMenuState('menu_activated');
  }
  
  jsMenuNode.querySelector('.menu__hamburger').addEventListener('click', callMenuToggle);

  var elements = document.querySelectorAll(".menu__link");
  let elementsArray = Array.prototype.slice.call(elements);
  elementsArray.forEach(function(elem){
    elem.addEventListener("click", function(){
      jsMenuNode.classList.remove("menu_activated");
    });
  });
})();