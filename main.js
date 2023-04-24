const chart = document.querySelector("#chart").getContext('2d');

// create a new chart instance

new Chart(chart, {
    type: 'line',
    data: {
        labels:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    
        datasets: [
            {
                label: 'BTC',
                data: [29376,33647,46576,75246,42658,32475,67425,71204,60241,80214,97165,80240],
                borderColor: 'red',
                borderWidth: 2
            },
            {
                label: 'EHT',
                data: [39376,43647,26576,55246,12658,42475,87425,81204,50241,90214,77165,85240],
                borderColor: 'blue',
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true,
    }
});


// show or hide side bar
const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector('#close-btn');
const sidebar = document.querySelector('aside');


menuBtn.addEventListener('click',() => {
    sidebar.style.display = 'block';
})

closeBtn.addEventListener('click',() => {
    sidebar.style.display = 'none';
})


// change theme
const themeBtn = document.querySelector('.theme-btn');

themeBtn.addEventListener('click',() =>{
    document.body.classList.toggle('dark-theme');

    themeBtn.querySelector('span:first-child').classList.toggle('active');
    themeBtn.querySelector('span:last-child').classList.toggle('active');
})

$('a.act').click(function() {
    $('a.act').removeClass('active'); 
    $(this).addClass('active'); 
  });

