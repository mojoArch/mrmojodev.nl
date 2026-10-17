

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

  gsap.registerPlugin(ScrollTrigger);

  const aboutStage = document.querySelector(".about-stage");
  const aboutStatement = document.querySelector(".about-statement");

  if (aboutStage && aboutStatement) {
      const originalText = aboutStatement.textContent.trim();
      const media = gsap.matchMedia();

      media.add("(prefers-reduced-motion: no-preference)", () => {
          aboutStage.classList.add("is-animated");

          aboutStatement.setAttribute("aria-label", originalText);
          aboutStatement.replaceChildren();

          // Elke letter krijgt een vaste plek met een beweegbare letter erin.
          Array.from(originalText).forEach((character) => {
              const slot = document.createElement("span");
              slot.setAttribute("aria-hidden", "true");

              if (character === " ") {
                  slot.className = "about-space";
                  slot.textContent = "\u00A0";
              } else {
                  slot.className = "about-char";

                  const letter = document.createElement("span");
                  letter.className = "about-letter";
                  letter.textContent = character;

                  slot.append(letter);
              }

              aboutStatement.append(slot);
          });

          const distance = () =>
              aboutStatement.scrollWidth - aboutStage.clientWidth;

          // De sectie blijft staan terwijl de zin voorbij schuift.
          const horizontalScroll = gsap.fromTo(
              aboutStatement,
              { x: 0 },
              {
                  x: () => -distance(),
                  ease: "none",

                  scrollTrigger: {
                      trigger: aboutStage,
                      start: "top top",
                      end: () => `+=${distance()}`,
                      pin: true,
                      scrub: 1,
                      invalidateOnRefresh: true
                  }
              }
          );

          // Letters bewegen afzonderlijk terwijl ze door beeld schuiven.
          aboutStatement.querySelectorAll(".about-char").forEach((slot, index) => {
              const letter = slot.querySelector(".about-letter");

              gsap.fromTo(
                  letter,
                  {
                      yPercent: index % 2 === 0 ? -110 : 110,
                      rotation: index % 3 === 0 ? -22 : 18
                  },
                  {
                      yPercent: 0,
                      rotation: 0,
                      ease: "elastic.out(1, 0.65)",

                      scrollTrigger: {
                          trigger: slot,
                          containerAnimation: horizontalScroll,
                          start: "left 100%",
                          end: "left 35%",
                          scrub: 0.5
                      }
                  }
              );
          });

          // Herstel gewone tekst als minder beweging wordt ingeschakeld.
          return () => {
              aboutStage.classList.remove("is-animated");
              aboutStatement.textContent = originalText;
              aboutStatement.removeAttribute("aria-label");
          };
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

  gsap.registerPlugin(ScrollTrigger);

  const homePage = document.querySelector(".home-page");

  if (homePage) {
      const homeMedia = gsap.matchMedia();

      homeMedia.add("(prefers-reduced-motion: no-preference)", () => {
          const panels = homePage.querySelectorAll(
              ".about-stage, .contact-section"
          );

          panels.forEach((panel) => {
              gsap.fromTo(
                  panel,
                  { borderRadius: "36px" },
                  {
                      borderRadius: "0px",
                      ease: "none",

                      scrollTrigger: {
                          trigger: panel,
                          start: "top 90%",
                          end: "top 15%",
                          scrub: 1
                      }
                  }
              );
          });
      });
  }
