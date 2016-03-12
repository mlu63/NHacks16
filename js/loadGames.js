var returnObject = [{"name":"Bloodborne", "price":"5","time":"3"},{"name":"Assasin's creed 3", "price":"10","time":"2"},{"name":"Resident Evil 4", "price":"3","time":"2"}]
$(returnObject).each(function(index) {
  <div class="row">
    <div class="col s12 m6 l3">
      <div class="card hoverable">
        <div class="card-image">
          <img class='gamePic' src="../images/cover1.jpg">
          <span class="card-title">Bloodborne</span>
        </div>
        <div class="card-content row">
            <div class='green-text text-darken-2 col s6 m6 l6'>$5.00</div>
            <div class="col s6 m6 l6 blue-text text-darker-2"><i class="fa fa-clock-o"></i> 3 Weeks</div>
        </div>
      </div>
    </div>
  console.log($(this)[0].name);
  console.log($(this)[0].price);
  console.log($(this)[0].time);
})
