const active_page = window.location.pathname
const links = document.querySelectorAll('nav-item').
    forEach(link => {
    if (link.href.includes(`${active_page}`))
       link.classList.add('active');
    else
       link.classList.remove('active');     
    });
    console.log(active_page);
   
    