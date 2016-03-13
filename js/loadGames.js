var returnObject = [{"name":"Bloodborne", "id":"1"},{"name":"Assasin's creed 3","id":"2"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"},{"name":"Resident Evil 4", "id":"3"}];
var appendString = "<div class = 'row'>";
$(returnObject).each(function(index) {
  appendString += "<div class = 'col s12 m6 l3'><div class = 'card hoverable'><div class = 'card-image'>"
   + "<a class = '" + $(this)[0].id + "' href='../borrow/gameView.html'><img class = 'gamePic' height = '250' width = '200' src = '../images/cover"
   + $(this)[0].id
   + ".jpg'></a>"
   + "</div><div class = 'card-content row><div class='col s6 m6 l6'>"
   + $(this)[0].name
   + "</div></div></div>";
});
appendString += "</div>";
$('#index-banner > div.gameCardContainer').append(appendString);
