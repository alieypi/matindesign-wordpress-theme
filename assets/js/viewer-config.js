const options = {
  toolbar: false,
  title: false,
  navbar: false,
  viewed() {
    const viewerCanvas = document.querySelector(".viewer-container");

    viewerCanvas.addEventListener("contextmenu", (event) => {
      event.preventDefault();
    });
  },
};

const imagesSection = document.querySelectorAll(".images");

imagesSection.forEach((sec) => {
  new Viewer(sec, options);
});
