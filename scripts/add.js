const input = document.querySelector("#input");
const view = document.querySelector("#view");
const convert = new showdown.Converter();
convert.setFlavor('github');

input.addEventListener("keyup", (key) => {
    const {value} = key.target;
    let text = convert.makeHtml(value);
    view.innerHTML = text;
})
