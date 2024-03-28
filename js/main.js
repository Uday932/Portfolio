// Attendre que le DOM soit chargé avant d'exécuter le script
document.addEventListener("DOMContentLoaded", function() {
    // Initialiser Typed.js avec l'ID de l'élément HTML cible
    let typingText = new Typed("#text", {
        strings : ["UDAY BHAVSAR"],
        typeSpeed: 45
    });

    const form = document.forms['contact-form']
    const msg = document.getElementById("msg")
    form. addEventListener('submit ', e =>{
        e. preventDefauIt()
        fetch(scriptURL, { method: ' POST',body: new FormData(form)})
            .then(response => console.log( 'Success! response', response))
            . catch(error => console.error( ' Error! ',error. message) )
                                        
    })
});



    // protfolio filters
    $(window).on("load", function() {
        var t = $(".portfolio-container");
        t.isotope({
            filter: ".new",
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: !1
            }
        }), $(".filters a").click(function() {
            $(".filters .active").removeClass("active"), $(this).addClass("active");
            var i = $(this).attr("data-filter");
            return t.isotope({
                filter: i,
                animationOptions: {
                    duration: 750,
                    easing: "linear",
                    queue: !1
                }
            }), !1
        });
    });