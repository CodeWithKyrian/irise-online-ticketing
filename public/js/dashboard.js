const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".themeToggler");

if(navigator.userAgent.indexOf('iPhone') > -1 )
{
    document
        .querySelector("[name=viewport]")
        .setAttribute("content","width=device-width, initial-scale=1, maximum-scale=1");
}

let isDark =
    localStorage.getItem('isDark') ? JSON.parse(localStorage.getItem('isDark')) :
    window.matchMedia('(prefers-color-scheme: dark)').matches;

menuBtn.addEventListener("click", () => {
    sideMenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
    sideMenu.style.display = "none";
});

const applyTheme = () => {
    if (isDark) {
        document.body.classList.add('dark-theme-variables');
        themeToggler.querySelector("span:nth-child(1)").classList.remove("active");
        themeToggler.querySelector("span:nth-child(2)").classList.add("active");
    } else {
        document.body.classList.remove('dark-theme-variables');
        themeToggler.querySelector("span:nth-child(1)").classList.add("active");
        themeToggler.querySelector("span:nth-child(2)").classList.remove("active");
    }
}

applyTheme()

themeToggler.addEventListener("click", () => {
    isDark = !isDark;
    localStorage.setItem('isDark', isDark)
    applyTheme();
});

