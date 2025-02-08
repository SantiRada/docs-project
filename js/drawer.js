let title = document.querySelector('.title');
let folders = document.querySelector('.folders');
let viewProject = document.querySelector('.view-project');

title.addEventListener('click', () => {
    folders.classList.toggle("close");
    viewProject.classList.toggle("close-content");
});