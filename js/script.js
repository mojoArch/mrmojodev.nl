

const projectButton = document.querySelector(".all-projects-button");


if (projectButton) {
    projectButton.addEventListener("mouseenter", () => {
        gsap.to(projectButton, {
            backgroundColor: "white",
            color: "black",
            duration: 0.3
        });
    });

    projectButton.addEventListener("mouseleave", () => {
        gsap.to(projectButton, {
            backgroundColor: "transparent",
            color: "white",
            duration: 0.3
        });
    });
}

const projects = document.querySelectorAll(".project");

projects.forEach((project) => {
    const image = project.querySelector("img");

    if (!image || !window.matchMedia("(hover: hover) and (pointer: fine)").matches) return;

    project.addEventListener("mouseenter", () => {
        gsap.to(image, {
            filter: "brightness(100%)",
            duration: 0.4
        });
    });

    project.addEventListener("mouseleave", () => {
        gsap.to(image, {
            filter: "brightness(35%)",
            duration: 0.4
        });
    });
});

// Project previews move through their photos automatically. Respect reduced-motion settings.
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    document.querySelectorAll("[data-project-carousel]").forEach((carousel) => {
        const track = carousel.querySelector(".project-carousel-track");
        const slides = track ? Array.from(track.querySelectorAll("img")) : [];

        if (slides.length < 2) return;

        let currentSlide = 0;
        window.setInterval(() => {
            if (document.hidden) return;
            currentSlide = (currentSlide + 1) % slides.length;
            track.style.transform = `translateX(-${currentSlide * 100}%)`;
        }, 4000);
    });
}

const contactButtons = document.querySelectorAll(
      "main:not(.home-page) .contact-links a"
  );
contactButtons.forEach((button) => {

    button.addEventListener("mouseenter", () => {
        gsap.to(button, {
            backgroundColor: "white",
            color: "black",
            duration: 0.3
        });
    });

    button.addEventListener("mouseleave", () => {
        gsap.to(button, {
            backgroundColor: "transparent",
            color: "white",
            duration: 0.3
        });
    });

});
const workTitle = document.querySelector(".projects-page .projects-title");

if (
    workTitle &&
    !window.matchMedia("(prefers-reduced-motion: reduce)").matches
) {
    const workJump = gsap.timeline({ paused: true });

    workJump
        .fromTo(
            workTitle,
            { y: 0 },
            {
                y: -35,
                duration: 0.25,
                ease: "power2.out"
            }
        )
        .to(workTitle, {
            y: 0,
            duration: 0.7,
            ease: "bounce.out"
        });

    workTitle.addEventListener("mouseenter", () => {
        if (!workJump.isActive()) {
            workJump.restart();
        }
    });
}
 const cvTitle = document.querySelector(".cv-title");

  if (cvTitle) {
      const jump = gsap.timeline({ paused: true });

      jump
          .to(cvTitle, {
              y: -50,
              duration: 0.25,
              ease: "power2.out"
          })
          .to(cvTitle, {
              y: 0,
              duration: 0.7,
              ease: "bounce.out"
          });

      cvTitle.addEventListener("mouseenter", () => {
          if (!jump.isActive()) {
              jump.restart();
          }
      });
  }

  const cvText = document.querySelector(".cv-column");

  if (cvText) {
      gsap.fromTo(
          cvText,
          {
              x: -100,
              opacity: 0
          },
          {
              x: 0,
              opacity: 1,
              duration: 1.6,
              delay: 0.3,
              ease: "power3.out"
          }
      );
  }
