window.onload = () => {
  var loadIdeas = {
    pagenum: 2,
    num_per_page: 5
  }
  $.post('../api/getPosts.php', loadIdeas, data => {
    var elements = JSON.parse(data);
    var container = document.querySelector(".idea-container");
    for (let i = 0; i < elements.length; i++) {
      var idea_container = document.createElement("div")
      idea_container.setAttribute("class", "card")
      var title = "<h3 class='card-title'>" + elements[i].title.toUpperCase() + "</h3>"
      var author = "<h5 class='card-subtitle blockquote-footer'>" + elements[i].name + "</h5>"
      var idea = "<p class='card-body'>" + elements[i].content + "</p>"
      idea_container.innerHTML = title + author + idea;
      container.appendChild(idea_container);
      idea_container.addEventListener("click", () => {
        window.location = "../display/display.php?id=" + elements[i].id
      })
    }
  })
}
