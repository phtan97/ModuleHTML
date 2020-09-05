$("#ex2").slider({});
var slider = new Slider('#ex2', {});
var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value;

            slider.oninput = function() {
            output.innerHTML = this.value;
            }