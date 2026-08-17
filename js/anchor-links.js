if (document.getElementById("about-main")) {
 
    const HISTORY = document.getElementById("history");
    const APPROACH = document.getElementById("approach");
    const PEOPLE = document.getElementById("people");
    
    const HISTORY_LINK = document.getElementById("history-anchor");
    const APPROACH_LINK = document.getElementById("approach-anchor");
    const PEOPLE_LINK = document.getElementById("people-anchor");
    
    if (document.getElementById("testimonials-anchor")) {
        const TESTIMONIALS = document.getElementById("testimonials");
        const TESTMONIALS_LINK = document.getElementById("testimonials-anchor");

        if (TESTMONIALS_LINK) {
            TESTMONIALS_LINK.addEventListener('click', (event) => {
                // Don't follow the link
                event.preventDefault();
                TESTIMONIALS.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        } else {
            console.log("no Testimonials");
        }
    }
    

    HISTORY_LINK.addEventListener('click', (event) => {
        // Don't follow the link
        event.preventDefault();
        HISTORY.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    APPROACH_LINK.addEventListener('click', (event) => {
        // Don't follow the link
        event.preventDefault();
        APPROACH.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    PEOPLE_LINK.addEventListener('click', (event) => {
        // Don't follow the link
        event.preventDefault();
        PEOPLE.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

}