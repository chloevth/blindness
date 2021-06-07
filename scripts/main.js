//NAVIGATION
let nav = document.getElementById("nav");
let toggle = document.getElementById("toggle");

noScroll = () => window.scrollTo(0, 0);

toggle.addEventListener("change", () =>{
    if (toggle.checked === true) {
        window.addEventListener("scroll", noScroll);
    } else { 
        window.removeEventListener('scroll', noScroll)
    }; 
});

nav.addEventListener("click", () => {
    if (toggle.checked === false){
        toggle.checked = true;
        window.addEventListener("scroll", noScroll);
    } else {
        toggle.checked = false;
    }

});

//STATISTIQUES
const ctxBrowser = document.getElementById('browser').getContext('2d');
let chartBrowser = new Chart(ctxBrowser, {
    type: 'doughnut',
    data: {
        labels: ['Chrome', 'Firefox', 'IE 10 et +', 'IE 6, 7 et 8', 'IE 9', 'Safari', 'Autres'],
        datasets: [{
            data: [16, 165, 144, 51, 28, 76, 25],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)',
                'rgba(48, 129, 96)'
            ]
        }]
    }
});

const ctxScreenReader = document.getElementById('screen-reader').getContext('2d');
let chartScreenReader = new Chart(ctxScreenReader, {
    type: 'bar',
    data: {
        labels: ['Oui', 'Non'],
        datasets: [{
            label: 'Utilisation du lecteur d\'écran (512 personnes aveugles)',
            data: [487, 25],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)'
            ]
        }]
    }
});

const ctxSwitchTools = document.getElementById('switch-tools').getContext('2d');
let chartSwitchTools = new Chart(ctxSwitchTools, {
    type: 'polarArea',
    data: {
        labels: ['Oui', 'Non', 'NonRenseigné'],
        datasets: [{
            labels: 'Utilisation du lecteur d\'écran différent du travail et de la maison',
            data: [203, 237, 70],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(75, 192, 192)',
                'rgba(54, 162, 235)'
            ]
        }]
    }
});

const ctxTypeScreen = document.getElementById('type-screen').getContext('2d');
let chartTypeScreen = new Chart(ctxTypeScreen, {
    type: 'line',
    data: {
        labels: ['Ecran NVDA', 'Ecran Jaws', 'Ecran Orca', 'Ecran ZoomText', 'Ecran ChromeVox', 'Autres'],
        datasets: [{
            data: [190, 141, 14, 34, 0, 133],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ]
        }]
    }
});

const ctxPhoneTools = document.getElementById('phone-tools').getContext('2d');
let chartPhoneTools = new Chart(ctxPhoneTools, {
    type: 'radar',
    data: {
        labels: ['Android', 'Iphone', 'Nokia', 'WindowsPhone', 'Autre', 'NonRenseigné'],
        datasets: [{
            data: [69, 237, 24, 16, 1, 148],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ]
        }]
    }
});
