const activitiesBox = document.querySelectorAll('.activities .slider .box')
const hamburger = document.querySelector('.hamburger')
const nav = document.querySelector('nav')
const links = nav.querySelector('.links')
const mobileLinks = document.querySelector('.mobile-links')
const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const sliderBox = document.querySelectorAll('.slider .box')
const searchIcon = document.querySelector('.icons .bx-search')
const searchBox = document.querySelector('.search')
const searchBoxCancel = document.querySelector('.search i')
const mediaQuery = window.matchMedia("(max-width: 580px)");


let currentIndex = 0;
let slidePerScreen  
let scrollLimit 
let boxWidth
let iconsVisible = true

activitiesBox.forEach((box)=>{
    box.addEventListener('click',()=>{
        activitiesBox.forEach((bx)=>{
            if (bx !== box) {
                bx.classList.remove('expanded')
            }
           
            
        })
        box.classList.toggle('expanded')
    })
})

hamburger.addEventListener('click', ()=>{
    nav.classList.toggle('active')
    mobileLinks.classList.toggle('active')

   nav.classList.add('scrolled')
    
})


function handleScroll() {
    // Check if the page has been scrolled vertically beyond a specific point
    if (window.scrollY > 20) {
       nav.classList.add('scrolled')
    }else{
        nav.classList.remove('scrolled')


    }
}

// Add the scroll event listener to the window
window.addEventListener("scroll", handleScroll);

searchIcon.addEventListener('click', ()=>{
    links.classList.add('hidden');
    searchBox.classList.remove('hidden')
    setTimeout(()=>{
        searchBox.classList.remove('resize')
    }, 200)
    iconsVisible = false
    handleScreenChange(mediaQuery);

})

searchBoxCancel.addEventListener('click', ()=>{
    searchBox.classList.add('resize')

    setTimeout(()=>{
        links.classList.remove('hidden');
        searchBox.classList.add('hidden')
    }, 150)

    iconsVisible = true
    handleScreenChange(mediaQuery);

})

function updateSliderPosition() {
    boxWidth = sliderBox[0].clientWidth * 2
    slider.style.transform = `translateX(-${currentIndex * boxWidth}px)`; // 300px is the width of each box
}

nextBtn.addEventListener('click', () => {
    let num = document.querySelector('.slider-container').clientWidth
    slidePerScreen = num / sliderBox[0].clientWidth
    scrollLimit = Math.round(slider.children.length / slidePerScreen)
    if (currentIndex < scrollLimit ) {
        currentIndex++;
        updateSliderPosition();

    }

    console.log(currentIndex);
    
});

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateSliderPosition();
    }
});


function handleScreenChange(e) {
    if (e.matches) {
        const icons = document.querySelectorAll('.icons i')
        if (!iconsVisible) {
            icons.forEach((icon)=>icon.style.display = 'none') ;
            document.querySelector('.icons').style.gap = 0
            
        }else{
            icons.forEach((icon)=>icon.style.display = 'flex') ;
            document.querySelector('.icons').style.gap = '15px'
            
        }
       
       
    }
  
}

