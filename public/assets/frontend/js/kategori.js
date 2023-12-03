function filterArticles(category) {
  var articles = document.querySelectorAll(".ctb");

  articles.forEach(function (article) {
    var articleCategory = article.getAttribute("data-category");

    if (category === "all" || category === articleCategory) {
      article.style.display = "block";
    } else {
      article.style.display = "none";
    }
  });
}
