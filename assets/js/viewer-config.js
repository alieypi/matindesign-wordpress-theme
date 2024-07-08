const options = {
  toolbar: false,
  title: false,
};

const imagesSection = document.querySelectorAll(".images");

imagesSection.forEach((sec) => {
  new Viewer(sec, options);
});
