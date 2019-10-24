const input = document.querySelector("#input");
const view = document.querySelector("#view");
const convert = new showdown.Converter({literalMidWordAsterisks: true,
                                        literalMidWordUnderscores: true,
                                        emoji: true,
                                        requireSpaceBeforeHeadingText: true,
                                        simpleLineBreaks: true,
                                        strikethrough: true,
                                        underline: true,
                                        smartIndentationFix: true,
                                        smoothLivePreview: true});

setInterval(() => {
    const value = input.value;
    let text = convert.makeHtml(value);
    view.innerHTML = text;
},500);

document.getElementById("bold").addEventListener("click", () => {
    input.value += "****";
    input.focus();
    input.selectionEnd -= 2;
})

document.getElementById("italics").addEventListener("click", () => {
    input.value += "**";
    input.focus();
    input.selectionEnd -= 1;
})

document.getElementById("underline").addEventListener("click", () => {
    input.value += "____";
    input.focus();
    input.selectionEnd -= 2;
})

document.getElementById("strikethrough").addEventListener("click", () => {
    input.value += "~~~~";
    input.focus();
    input.selectionEnd -= 2;
})

document.getElementById("quote").addEventListener("click", () => {
    input.value += "\n> ";
    input.focus();
})

document.getElementById("code").addEventListener("click", () => {
    input.value += "```\n\n```";
    input.focus();
    input.selectionEnd -=4;
})

