const options = {
  toolbar: false,
  title: false,
  navbar: false,
  viewed() {
    const viewerCanvases = document.querySelectorAll(".viewer-container");

    viewerCanvases.forEach((vc) => {
      vc.addEventListener("contextmenu", (event) => {
        event.preventDefault();
      });
    });
  },
};

const imagesSection = document.querySelectorAll(".images");

imagesSection.forEach((sec) => {
  new Viewer(sec, options);
});
