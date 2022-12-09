const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';  
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})

/*preenchimento de dados na tabela com base em um array de dados, há condicional que determina a cor do status
*/
Orders.forEach(order => {
    const tr = document.createElement('tr');
    const trContent =   /*'<td>${}</td>
                        <td>${}</td>
                        <td>${}</td>
                        <td class="${ === '' ? 'danger' :
                                      === '' ? 'warning':
                                       'primary'}">${}</td>
                        <td class="primary">Details</td>';*/
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
})