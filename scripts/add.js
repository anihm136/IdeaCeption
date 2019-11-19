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

if(sessionStorage.getItem("logged_in")==null)
{
  $("#input_area").hide();
  $(".title-input").hide();
  $("#add_idea_btn").hide();
  $(".alert.alert-custom").show();
  // var login_to_add = "Please login to add idea!";
  // $(".alert.alert-danger").innerText = login_to_add;

  // setTimeout(()=>{ window.location="../"},4000);
}

function addfunc(){
  var title=$(".title").val();
  // var post=$("#input").val();
  var content=document.getElementById("input").value;
  // console.log(content);

  var sendObj = {
    postTitle :title,
    postContent:content,

  };
  console.log(sendObj);
  var target="../api/add_idea.php";
  console.log(target);

  $.ajax({
    method: "POST",
    url: target,
    data: sendObj
  }).done(data => {
    console.log(" After call"+data);
    try {
      if(typeof (JSON.parse(data))=="object"){
        console.log("Idea added succesfully");
      }
      else{
        console.log("Error");
      }
    } catch (e) {
      console.log("ERROR: " + e);
    }

    // console.log(JSON.parse(data));
  });
}

function login_redirect() {
  setCookie("source", window.location, 365);
  window.location = "../login";
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
