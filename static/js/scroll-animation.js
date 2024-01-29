document.addEventListener('DOMContentLoaded', function () {
    const paragraphs = document.querySelectorAll('.animate-paragraph');
    let lastScrollTop = 0;
  
    function checkVisibility() {
      const currentScrollTop = window.scrollY || document.documentElement.scrollTop;
  
      const scrollDirection = (currentScrollTop > lastScrollTop) ? 'down' : 'up';
  
      paragraphs.forEach(paragraph => {
        const rect = paragraph.getBoundingClientRect();
        const isVisible = (rect.top >= 0) && (rect.bottom <= window.innerHeight);
  
        if (isVisible) {
          if (scrollDirection === 'down') {
            paragraph.classList.add('show');
          } else {
            paragraph.classList.remove('show');
          }
        }
      });
  
      lastScrollTop = currentScrollTop;
    }
  
    checkVisibility();
  
    window.addEventListener('scroll', checkVisibility);
  });