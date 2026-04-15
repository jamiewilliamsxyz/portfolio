(() => {
  const observer = new IntersectionObserver(
    (entries) => {
      // Runs when observed elements enter/leave the viewport
      entries.forEach((entry) => {
        const animatedEl = entry.target.querySelector(
          ".jpt-fade-in-up, .jpt-fade-in-left",
        );

        if (animatedEl) {
          animatedEl.classList.toggle("jpt-in-view", entry.isIntersecting);
        }
      });
    },
    { rootMargin: "-60px 0px -60px 0px" },
  );

  document.querySelectorAll(".jpt-observe").forEach((el) => {
    observer.observe(el);
  });
})();
