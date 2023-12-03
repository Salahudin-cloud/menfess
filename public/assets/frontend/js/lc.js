$(document).ready(function () {
  $(".btnlove").on("click", function () {
    var loveCount = $(this).siblings(".love-count");
    var currentCount = parseInt(loveCount.text());
    loveCount.text(currentCount + 1 + " Love");
  });

  $(".comment-btn").on("click", function () {
    $(this).siblings(".comment-form").slideToggle();
  });

  $(".btncomment").on("click", function () {
    var commentText = $(this).siblings("textarea").val();

    if (commentText.trim() !== "") {
      var commentsContainer = $(this).closest(".post").find(".comments");
      var newComment =
        '<div class="comment"><p>Username:</p><p>' + commentText + "</p></div>";
      commentsContainer.append(newComment);
      $(this).siblings("textarea").val("");
      $(this).closest(".comment-form").slideUp();
    }
  });
});
