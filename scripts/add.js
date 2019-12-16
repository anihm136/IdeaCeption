const input = document.querySelector("#input");
const view = document.querySelector("#view");
const convert = new showdown.Converter({
  literalMidWordAsterisks: true,
  literalMidWordUnderscores: true,
  emoji: true,
  requireSpaceBeforeHeadingText: true,
  simpleLineBreaks: true,
  strikethrough: true,
  underline: true,
  smartIndentationFix: true,
  smoothLivePreview: true
});

setInterval(() => {
  const value = input.value;
  let text = convert.makeHtml(value);
  view.innerHTML = text;
}, 500);

document.getElementById("bold").addEventListener("click", () => {
  input.value += "****";
  input.focus();
  input.selectionEnd -= 2;
});

document.getElementById("italics").addEventListener("click", () => {
  input.value += "**";
  input.focus();
  input.selectionEnd -= 1;
});

document.getElementById("underline").addEventListener("click", () => {
  input.value += "____";
  input.focus();
  input.selectionEnd -= 2;
});

document.getElementById("strikethrough").addEventListener("click", () => {
  input.value += "~~~~";
  input.focus();
  input.selectionEnd -= 2;
});

document.getElementById("quote").addEventListener("click", () => {
  input.value += "\n> ";
  input.focus();
});

document.getElementById("code").addEventListener("click", () => {
  input.value += "```\n\n```";
  input.focus();
  input.selectionEnd -= 4;
});

if (sessionStorage.getItem("logged_in") == null) {
  $("#input_area").hide();
  $(".title-input").hide();
  $("#add_idea_btn").hide();
  $(".alert.alert-custom").show();
}

function addfunc() {
  var title = $(".title").val().toProperCase();
  if (title == "") {
    $(".required-message").show();
    return;
  }
  // var post=$("#input").val();
  var content = document.getElementById("input").value;
  // console.log(content);

  var sendObj = {
    postTitle: title,
    postContent: content
  };
  console.log(sendObj);
  var target = "../api/add_idea.php";
  console.log(target);

  $.ajax({
    method: "POST",
    url: target,
    data: sendObj
  }).done(data => {
    // console.log(" After call"+data);
    try {
      if (typeof JSON.parse(data) == "object") {
        // console.log(JSON.parse(data));
        window.location = "../display/display.php?id=" + JSON.parse(data)["id"];
      } else {
        console.log("Error: Already exist");
      }
    } catch (e) {
      console.log("ERROR: " + e);
    }
  });
}
