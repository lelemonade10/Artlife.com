const toggleBtn = document.querySelector('.toggle-btn')
const toggleBtnIcon = document.querySelector('.toggle-btn i')
const dropDownMenu = document.querySelector('.drop-down-menu')

toggleBtn.onclick = function ()
{
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

}