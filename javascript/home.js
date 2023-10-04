// // Function to check if an element is in the viewport
// function isElementInViewport(el) {
//     const rect = el.getBoundingClientRect();
//     return (
//         rect.top >= 0 &&
//         rect.left >= 0 &&
//         rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//         rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//     );
// }

// // Function to add animation class when element is in the viewport
// function addAnimationOnScroll() {
//     const animatedElement = document.getElementById('animated-element');

//     if (isElementInViewport(animatedElement)) {
//         animatedElement.classList.add('animated');
//     }
// }

// // Add an event listener to trigger the animation when scrolling
// window.addEventListener('scroll', addAnimationOnScroll);

// // Initial check in case the element is already in the viewport when the page loads
// addAnimationOnScroll();

