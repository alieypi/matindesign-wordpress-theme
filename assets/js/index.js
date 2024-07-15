const mainTabs = document.getElementById("main-tabs");
const aboutTabs = document.getElementById("about-tabs");

if (aboutTabs) {
  const aboutTabsButtons = aboutTabs.querySelectorAll("button");
  const enData = document.getElementById("about-en");
  const faData = document.getElementById("about-fa");

  if (aboutTabsButtons.length === 1) {
    aboutTabsButtons[0].classList.add("active");

    switch (aboutTabsButtons[0].id) {
      case "en":
        faData.classList.remove("active");
        enData.classList.add("active");
        break;
      case "fa":
        enData.classList.remove("active");
        faData.classList.add("active");
        break;
    }
  }

  aboutTabsButtons.forEach((button) => {
    button.addEventListener("click", () => {
      aboutTabsButtons.forEach((_) => _.classList.remove("active"));

      button.classList.add("active");

      switch (button.id) {
        case "en":
          faData.classList.remove("active");
          enData.classList.add("active");
          break;
        case "fa":
          enData.classList.remove("active");
          faData.classList.add("active");
          break;
      }
    });
  });
}

if (mainTabs) {
  const mainTabsButtons = mainTabs.querySelectorAll("button");
  const projects = document.querySelectorAll("#projects .project");

  mainTabsButtons.forEach((button) => {
    button.addEventListener("click", () => {
      mainTabsButtons.forEach((_) => _.classList.remove("active"));
      projects.forEach((_) => _.classList.remove("active"));

      button.classList.add("active");

      projects.forEach((section) => {
        if (section.getAttribute("data-tab") === button.id) section.classList.add("active");
      });
    });
  });
}

const getRouteParam = () => {
  const pathArray = window.location.pathname.split("/").filter((_) => _.length > 0);
  return pathArray[pathArray.length - 1];
};

const sidebarTabs = document.querySelectorAll("#sidebar-tabs a");
const param = getRouteParam();

sidebarTabs.forEach((tab) => {
  if (tab.id === "home" && (!param || param === "" || param.toLowerCase() === "matindesign")) {
    tab.classList.add("active");
  } else if (param.toLowerCase() === tab.id) {
    tab.classList.add("active");
  }
});
