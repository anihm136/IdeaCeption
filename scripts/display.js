window.onload = function() {
  const view = document.querySelector("#view");
  const convert = new showdown.Converter({
    literalMidWordAsterisks: true,
    literalMidWordUnderscores: true,
    emoji: true,
    requireSpaceBeforeHeadingText: true,
    simpleLineBreaks: true,
    strikethrough: true,
    underline: true,
    smartIndentationFix: true
  });

  view.innerHTML = convert.makeHtml(view.innerText);

  var location = new URLSearchParams(window.location.search);
  var id = location.get("id");
  $.post("../api/getcomments.php", { post_id: id }, data => {
    console.log(JSON.parse(data));
    for (let i = 0; i < JSON.parse(data).length; i++) {
      comment = JSON.parse(data)[i];
      var element = document.createElement("div");
      var text = "<p>" + comment.comment + "</p>";
      var user = comment.user;
      var source = "<p class='blockquote-footer text-right'>" + user + "</p>";
      element.innerHTML = text + source;
      element.setAttribute("class", "card comment");
      var parent = document.querySelector(".suggestions-container");
      var before = $("input")[0];
      parent.insertBefore(element, before);
    }
  });
};

function suggestFunc() {
  var elementText = $("#suggest-input").val();
  if (elementText != 0) {
    $.post("../api/getUsername.php", data => {
      var element = document.createElement("div");
      var comment = "<p>" + elementText + "</p>";
      var user = data.replace(/\s/g, "");
      var source = "<p class='blockquote-footer text-right'>" + user + "</p>";
      element.innerHTML = comment + source;
      element.setAttribute("class", "card comment");
      var parent = document.querySelector(".suggestions-container");
      var before = $("input")[0];
      parent.insertBefore(element, before);
      document.querySelector("#suggest-input").value = "";
      var location = new URLSearchParams(window.location.search);
      console.log(location.get("id"));
      var id = location.get("id");
      var commentObj = { post_id: id, comment: elementText, user: user };
      $.post("../api/postComment.php", commentObj, data => {
        console.log(data);
      });
    });
  }
}
