 (() => {
            gsap.registerPlugin(ScrollTrigger);

            // Add smooth scrolling to all links within the page
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        gsap.to(window, { scrollTo: target, duration: 1, ease: "power2.inOut" });
                    }
                });
            });
        })();



