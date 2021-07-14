function setup() {
    createCanvas(400, 400);
}

function draw() {
    if (mouseIsPressed) {
        fill(0);
    } else {
        fill(255);
    }
    background(220);
    rect(mouseX, mouseY, 80, 80);
}