// // Hammer Shredding Gallery JS Start
// function openModal(card) {
//     const modal = document.getElementById('imageModal');
//     const modalImg = document.getElementById('modalImage');
//     const img = card.querySelector('img');
    
//     modalImg.src = img.src;
//     modal.style.display = 'block';
//     document.body.style.overflow = 'hidden';
// }

// function closeModal() {
//     const modal = document.getElementById('imageModal');
//     modal.style.display = 'none';
//     document.body.style.overflow = 'auto';
// }

// // ESC key se modal band karna
// document.addEventListener('keydown', function(e) {
//     if (e.key === 'Escape') {
//         closeModal();
//     }
// });

// // Smooth scroll animation
// document.querySelectorAll('.image-card').forEach(card => {
//     card.addEventListener('mouseenter', function() {
//         this.style.zIndex = '10';
//     });
    
//     card.addEventListener('mouseleave', function() {
//         this.style.zIndex = '1';
//     });
// });
// // Hammer Shredding Gallery JS End




// Form Submission JS Start

// Form Submission JS End




// Header New Start
// Sticky Header with Logo Change
const header = document.getElementById('header');
const logoWhite = document.getElementById('logo-white');
const logoDark = document.getElementById('logo-dark');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
        logoWhite.style.display = 'none';
        logoDark.style.display = 'block';
    } else {
        header.classList.remove('scrolled');
        logoWhite.style.display = 'block';
        logoDark.style.display = 'none';
    }
});

// Mobile Menu Toggle
const mobileToggle = document.getElementById('mobileToggle');
const closeMenu = document.getElementById('closeMenu');
const navMenu = document.getElementById('navMenu');

mobileToggle.addEventListener('click', () => {
    navMenu.classList.add('active');
});

closeMenu.addEventListener('click', () => {
    navMenu.classList.remove('active');
});

// Function to handle dropdowns in mobile
function setupMobileDropdowns() {
    const navItems = document.querySelectorAll('.nav-item');
    const subDropdowns = document.querySelectorAll('.sub-dropdown');

    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        const dropdown = item.querySelector('.dropdown-menu-custom');

        if (dropdown) {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    // Close others
                    navItems.forEach(i => {
                        if (i !== item) i.classList.remove('active');
                    });
                    item.classList.toggle('active');
                }
            });
        }
    });

    subDropdowns.forEach(sub => {
        const link = sub.querySelector('.dropdown-item-custom');
        const subMenu = sub.querySelector('.sub-dropdown-menu');

        if (subMenu) {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    sub.classList.toggle('active');
                }
            });
        }
    });
}

setupMobileDropdowns();

// Close mobile menu when clicking outside
document.addEventListener('click', (e) => {
    if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
        navMenu.classList.remove('active');
    }
});

// Responsive behavior on resize
window.addEventListener('resize', () => {
    if (window.innerWidth > 992) {
        navMenu.classList.remove('active');
        document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
        document.querySelectorAll('.sub-dropdown').forEach(s => s.classList.remove('active'));
    }
});
// Header New End



// Banner Start
const particlesContainer = document.getElementById('particles');
for (let i = 0; i < 50; i++) {
    const particle = document.createElement('div');
    particle.className = 'particle';
    particle.style.left = Math.random() * 100 + '%';
    particle.style.animationDelay = Math.random() * 15 + 's';
    particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
    particlesContainer.appendChild(particle);
}

let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
let autoPlayInterval;

function showSlide(index) {
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');

    currentSlide = (index + slides.length) % slides.length;

    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
    resetAutoPlay();
}

function goToSlide(index) {
    showSlide(index);
    resetAutoPlay();
}

function autoPlay() {
    autoPlayInterval = setInterval(() => {
        changeSlide(1);
    }, 6000);
}

function resetAutoPlay() {
    clearInterval(autoPlayInterval);
    autoPlay();
}

autoPlay();

document.querySelector('.slider-container').addEventListener('mouseenter', () => {
    clearInterval(autoPlayInterval);
});

document.querySelector('.slider-container').addEventListener('mouseleave', () => {
    autoPlay();
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') changeSlide(-1);
    if (e.key === 'ArrowRight') changeSlide(1);
});

// Smooth scroll effect
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
    });
});
// Banner End






// Sticky Header with Background Change
window.addEventListener('scroll', function () {
    const header = document.querySelector('.NRJ_header_headerISSC');
    const logo = document.getElementById('headerLogo');
    
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
        logo.src = './assets/img/logo-black.webp'; // Scrolled logo (dark version)
    } else {
        header.classList.remove('scrolled');
        logo.src = './assets/img/logo.png'; // Original logo (light version)
    }
});





// Social Icon Sticky JS Start
	function openWhatsApp() {
		const phoneNumber = '9962065659';
		const message = 'Hello! I would like to get in touch.';
		const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
		window.open(whatsappUrl, '_blank');
	}

	function makeCall() {
		const phoneNumber = '9962065659';
		window.location.href = `tel:${phoneNumber}`;
	}

	// Enhanced 3D interaction
	document.querySelectorAll('.social-icon').forEach(icon => {
		icon.addEventListener('mouseenter', function() {
			this.style.transform = 'rotateX(-15deg) rotateY(15deg) scale(1.1) translateZ(20px)';
		});

		icon.addEventListener('mouseleave', function() {
			this.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1) translateZ(0px)';
		});

		// Add click ripple effect
		icon.addEventListener('click', function(e) {
			let ripple = document.createElement('div');
			ripple.style.position = 'absolute';
			ripple.style.borderRadius = '50%';
			ripple.style.background = 'rgba(255,255,255,0.6)';
			ripple.style.transform = 'scale(0)';
			ripple.style.animation = 'ripple 0.6s linear';
			ripple.style.left = '50%';
			ripple.style.top = '50%';
			ripple.style.width = '100px';
			ripple.style.height = '100px';
			ripple.style.marginLeft = '-50px';
			ripple.style.marginTop = '-50px';
			ripple.style.pointerEvents = 'none';

			this.appendChild(ripple);

			setTimeout(() => {
				ripple.remove();
			}, 600);
		});
	});

	// Add CSS for ripple animation
	const style = document.createElement('style');
	style.textContent = `
		@keyframes ripple {
			to {
				transform: scale(2);
				opacity: 0;
			}
		}
	`;
	document.head.appendChild(style);
// Social Icon Sticky JS End




// Form Validation JS Start
document.getElementById("contact-form").addEventListener("submit", function (e) {
    let isValid = true;

    // Get fields
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const phone = document.getElementById("phone");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");

    // Clear previous errors
    document.querySelectorAll(".error").forEach(el => el.innerText = "");

    // Name validation
    if (name.value.trim() === "") {
        document.getElementById("nameError").innerText = "Name is required";
        isValid = false;
    }

    // Email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.value.trim() === "") {
        document.getElementById("emailError").innerText = "Email is required";
        isValid = false;
    } else if (!emailPattern.test(email.value)) {
        document.getElementById("emailError").innerText = "Enter a valid email address";
        isValid = false;
    }

    // Phone validation (10 digits numeric)
    const phonePattern = /^[0-9]{10}$/;
    if (phone.value.trim() === "") {
        document.getElementById("phoneError").innerText = "Phone number is required";
        isValid = false;
    } else if (!phonePattern.test(phone.value)) {
        document.getElementById("phoneError").innerText = "Enter a valid 10-digit phone number";
        isValid = false;
    }

    // Subject validation
    if (subject.value.trim() === "") {
        document.getElementById("subjectError").innerText = "Subject is required";
        isValid = false;
    }

    // Message validation
    if (message.value.trim() === "") {
        document.getElementById("messageError").innerText = "Message is required";
        isValid = false;
    }

    // CAPTCHA validation
    if (grecaptcha.getResponse() === "") {
        document.getElementById("captchaError").innerText = "Please verify that you are not a robot";
        isValid = false;
    }

    // Stop form submission if invalid
    if (!isValid) {
        e.preventDefault();
    }
});

// Form Validation JS End



// Image Preview JS Start
// ── Intersection Observer for scroll-triggered animation ──
const observerOptions = {
root: null,
rootMargin: '0px 0px -80px 0px',
threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
entries.forEach(entry => {
    if (entry.isIntersecting) {
    entry.target.classList.add('is-visible');
    observer.unobserve(entry.target); // animate once
    }
});
}, observerOptions);

// Observe heading
document.querySelector('.imagePrivW__heading') &&
observer.observe(document.querySelector('.imagePrivW__heading'));

// Observe every card inside #ImagePriVVWeNrJJ
document.querySelectorAll('#ImagePriVVWeNrJJ .imagePrivW__card')
.forEach(card => observer.observe(card));
// Image Preview JS End



// Tyre Recycling JS Start
(function () {
  const targets = document.querySelectorAll(
    '.sa-fade-up, .sa-fade-left, .sa-fade-right, .sa-scale'
  );
 
  const obs = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('sa-visible');
          obs.unobserve(entry.target);
        }
      });
    },
    { rootMargin: '0px 0px -80px 0px', threshold: 0.08 }
  );
 
  targets.forEach((el) => obs.observe(el));
})();
// Tyre Recycling JS End








