window.onload = () => {
  $(".btn-login")[0].addEventListener("click", prevPage)
  $(".btn-login")[1].addEventListener("click", nextPage)
  var getargs = new URLSearchParams(window.location.search)
  loadIdeas = new Object()
  if (getargs.get("pagenum")) {
    loadIdeas.pagenum = parseInt(getargs.get("pagenum"))
  } else {
    loadIdeas.pagenum = 1
  }
  loadIdeas.num_per_page = 5
  $.post('../api/getPosts.php', loadIdeas, data => {
    var elements = JSON.parse(data);
    if (elements.length < loadIdeas.num_per_page) {
      $(".btn-login")[1].removeEventListener("click", nextPage).attr("disabled", true)
    }
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

  if (loadIdeas.pagenum == 1) {
    $(".btn-login")[0].removeEventListener("click", prevPage).attr("disabled", true)
  }
}

function prevPage() {
  loadIdeas.pagenum -= 1
  window.location = "./index.php?pagenum=" + loadIdeas.pagenum
}

function nextPage() {
  loadIdeas.pagenum += 1
  window.location = "./index.php?pagenum=" + loadIdeas.pagenum
}
