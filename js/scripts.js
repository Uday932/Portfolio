/*!
* Start Bootstrap - Resume v7.0.5 (https://startbootstrap.com/theme/resume)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const sideNav = document.body.querySelector('#sideNav');
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#sideNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

 const form = document.forms['contact-form']
    const msg = document.getElementById("msg")
    form. addEventListener('submit ', e =>{
        e. preventDefauIt()
        fetch(scriptURL, { method: ' POST',body: new FormData(form)})
            .then(response => console.log( 'Success! response', response))
            . catch(error => console.error( ' Error! ',error. message) )
                                        
    })


    const skills = [
        // Define your skills here
    ];
    
    window.onload = function() {
        const skillsContainer = document.querySelector('.skills-container');
    
        skills.forEach(skill => {
            const skillElement = document.createElement('div');
            skillElement.classList.add('skill');
    
            const skillTitle = document.createElement('div');
            skillTitle.classList.add('skill-title');
            skillTitle.textContent = skill.title;
            skillElement.appendChild(skillTitle);
    
            const skillList = document.createElement('div');
            skillList.classList.add('skill-list');
    
            skill.skills.forEach(item => {
                const skillItem = document.createElement('div');
                skillItem.classList.add('skill-item');
    
                const skillImage = document.createElement('img');
                skillImage.classList.add('skill-image');
                skillImage.src = item.image;
    
                const skillName = document.createElement('div');
                skillName.textContent = item.name;
    
                skillItem.appendChild(skillImage);
                skillItem.appendChild(skillName);
                skillList.appendChild(skillItem);
            });
    
            skillElement.appendChild(skillList);
            skillsContainer.appendChild(skillElement);
        });
    };

    // JavaScript pour gérer le filtrage des projets
const filterButtons = document.querySelectorAll('.filter-btn');
const projects = document.querySelectorAll('.col-md-6');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        const filterValue = button.dataset.filter;
        projects.forEach(project => {
            if (filterValue === 'all') {
                project.style.display = 'block';
            } else {
                if (project.classList.contains(filterValue)) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            }
        });
    });
});


