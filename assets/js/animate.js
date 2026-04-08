(() => {
  const fadeInEls = [
    ...document.querySelectorAll(".jpt-fade-in-left"),
    ...document.querySelectorAll(".jpt-fade-in-up"),
  ];

  const observer = new IntersectionObserver(
    (entries) => {
      // Runs when observed elements enter/leave the viewport
      entries.forEach((entry) => {
        entry.target.classList.toggle("jpt-in-view", entry.isIntersecting);
      });
    },
    { rootMargin: "-60px 0px -60px 0px" },
  );

  fadeInEls.forEach((el) => {
    observer.observe(el);
  });
})();
