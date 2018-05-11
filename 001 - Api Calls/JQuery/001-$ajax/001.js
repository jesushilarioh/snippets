// Jquery
$(document).ready(function () {
  $("button").click(function () {
    var url = "https://api.nytimes.com/svc/search/v2/articlesearch.json";
    url += '?' + $.param({
      'api-key': "<--- YOUR API KEY --->",
      'q': "Grand",
      'begin_date': "20110925",
      'end_date': "20180729",
      'fl': "pub_date, byline",
      'facet_field': "day_of_week"
    });
    $.ajax({
      url: url,
      method: 'GET',

    }).done(function (result) {
      console.log(result);

    }).fail(function (err) {
      throw err;
    });

  });

});