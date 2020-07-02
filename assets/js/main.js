// aspetto che il dom sia pronto
document.addEventListener("DOMContentLoaded", function() {
    //costruisco un array con tutte le immagini con classe lazy 
    let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
    let active = false;

    const lazyLoad = function() {
        if (active === false) {
            active = true;

            setTimeout(function() {
                // per ogni immagine nell'array lazyImage:
                lazyImages.forEach(function(lazyImage) {
                    // controllo se l'immagine è in vista e se è visibile
                    if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                        // idrato src data-src
                        lazyImage.src = lazyImage.dataset.src
                            // se esiste il data-srcset allora idrato anche l'attributo srcset con data-srcset
                        if (lazyImage.dataset.srcset) {
                            lazyImage.srcset = lazyImage.dataset.srcset
                        }

                        // rimuovo la classe lazy per non ripetere l'operazione su questa immagine
                        lazyImage.classList.remove("lazy");

                        // tolgo l'immagine corrente dall'array delle immagini
                        lazyImages = lazyImages.filter(function(image) {
                            return image !== lazyImage;
                        })

                        //rimuovo i listeners
                        if (lazyImages.length === 0) {
                            document.removeEventListener("scroll", lazyLoad);
                            window.removeEventListener("resize", lazyLoad);
                            window.removeEventListener("orientationchange", lazyLoad);
                        }
                    }
                });

                active = false;
            }, 200);
        }
    }

    // trigger funzione lazyLoad
    lazyLoad();
    // mi metto in ascolto sugli eventi di scroll e di resize per attivare la funzione lazyLoad
    document.addEventListener("scroll", lazyLoad);
    window.addEventListener("resize", lazyLoad);
    window.addEventListener("orientationchange", lazyLoad);

})