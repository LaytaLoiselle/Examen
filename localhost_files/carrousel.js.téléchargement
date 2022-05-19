(function(){
   /**
  * Carrousel qui permet d'ouvrir une boite modale afin de naviger d'une image à l'autre
  *  */ 

   /* Le conteneur de la gallerie */
  let boite__carrousel = document.querySelector('.boite__carrousel')
   /* le bouton de fermeture du carrousel */
  let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme')
  /* le conteneur des bouton de navigation du carrousel */
  let boite__carrousel__nav = document.querySelector('.boite__carrousel__nav')
/* La collection des images de la galerie */
  let galerie__img = document.querySelectorAll('.galerie img')

  let elmImg = document.createElement('img')
  boite__carrousel.append(elmImg)


  
  let index = 0; // pour associer chaque bouton radio à une image de la galerie.
  for (const img of galerie__img){
      let bouton = document.createElement('button')
      bouton.dataset.index = index++
      boite__carrousel__nav.append(bouton)
      bouton.addEventListener('mousedown', function(){
          elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
      })

      img.addEventListener('mousedown',function(){
          console.log(this.tagName)
          boite__carrousel.classList.add('boite__carrousel__ouvrir')
          //console.log(this.getAttribute('src'))
          elmImg.setAttribute('src', this.getAttribute('src'))
      })

  }

/**
 * 
 * Écouteur pour fermer la fenêtre 
 * 
 */ 

  boite__carrousel__ferme.addEventListener('mousedown', function(){
      boite__carrousel.classList.remove('boite__carrousel__ouvrir')
  })

})()