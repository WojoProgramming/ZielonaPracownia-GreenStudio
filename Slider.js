class Slider {
    constructor(elementId, folder) {
        this.index = Math.floor(Math.random() * 5) + 1;
        this.timerChange = 0;
        this.element = document.getElementById(elementId);
        this.folder = folder;

        this.img = document.createElement("img");
        this.element.appendChild(this.img);

        this.changeSlide();
    }

    hide() {
        this.img.style.opacity = 0;
    }

    show() {
        this.img.style.opacity = 1;
    }

    changeSlide() {
        this.index++;
        if (this.index > 5) this.index = 1;
        this.img.src = `gallery/${this.folder}/${this.index}.jpg`;

        this.show();

        this.timerChange = setTimeout(() => this.changeSlide(), 1000);
    }
}
new Slider("slider1", "slides1");
new Slider("slider2", "slides2");
new Slider("slider3", "slides3");
new Slider("slider4", "slides4");
new Slider("slider5", "slides5");
new Slider("slider6", "slides6");
new Slider("slider7", "slides7");
new Slider("slider8", "slides8");
new Slider("slider9", "slides9");
