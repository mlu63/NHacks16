var returnObject = [{"name":"Bloodborne", "price":"5","time":"3", "id":"1"},{"name":"Assasin's creed 3", "price":"10","time":"2","id":"2"},{"name":"Resident Evil 4", "price":"3","time":"2","id":"3"}];
var appendString = "";
$(returnObject).each(function(index) {
  appendString += "<div class = 'row'><div class = 'col s12 m6 l3'><div class = 'card hoverable'><div class = 'card-image'>"
   + "<a href='../borrow/gameView.html'><img class = 'gamePic' height = '250' width = '200' src = '../images/cover"
   + $(this)[0].id
   + ".jpg'></a><span class = 'card-title'>"
   + $(this)[0].name
   + "</span></div><div class = 'card-content row'><div class='green-text text-darken-2 col s6 m6 l6'>$ "
   + $(this)[0].price
   + "</div><div class = 'col s6 m6 l6 blue-text text-darker-2'><i class = 'fa fa-clock-o'></i> "
   + $(this)[0].time
   + " Weeks</div></div></div></div>";
});

$('#index-banner > div.gameCardContainer').append(appendString);
