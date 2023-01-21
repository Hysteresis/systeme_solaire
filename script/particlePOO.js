const canvas = document.querySelector('#canvas1');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
let particleArray = [];
const numberOfParticles = Math.floor(Math.random() * 10 + 130);

class Particle {
    constructor(x, y, size) {
        this.x = x;
        this.y = y
        this.size = size;

    }

    // dessiner un circle
    draw(color) {
        this.color = color;

        ctx.fillStyle = this.color;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.filter = 'blur(1px)';
        ctx.closePath();
        ctx.fill();
    }
}

function init() {
    // creation de 100 particules
    for (let i = 0; i < numberOfParticles; i++) {
        let x = Math.random() * canvas.width;
        let y = Math.random() * canvas.height;
        let size = Math.random() * 1.5 + 0.1;

        // particule speciale planet top left
        // if (i == 50) {
        //     x = 100;
        //     y = 50;
        //     size = 100;
        // }

        particleArray.push(new Particle(x, y, size));
    }

    // console.log(particleArray);
    for (let i = 0; i < particleArray.length; i++) {
        particleArray[i].draw('white');

        // planet top left
        if (i == 50) {
            particleArray[i].draw('coral');
        }

    }

    console.log(particleArray[49]);
    console.log(particleArray[50]);
    console.log(particleArray[51]);
}


init();
// shootingStar();



