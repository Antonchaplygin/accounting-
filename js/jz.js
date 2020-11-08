function reassemble(){
  $("#tiles-holder").empty();
  // $("#tiles-holder").append('<br><div id="filter-block" class="center-block"></div><!-- <button class="btn btn-primary" id="add-new-obj" data-toggle="modal" data-target="#add-modal">Добавить</button> --><br>');
  if(locations!=null){
      locations.forEach(function(location, i, list){
        var object = JSON.parse(location[3]);
        // console.log(object);

//<div class="card" style="width: 20rem;">
// <img class="card-img-top" src="..." alt="Card image cap">
// <div class="card-body">
//  <h4 class="card-title">Card title</h4>
//  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//  <a href="#" class="btn btn-primary">Go somewhere</a>
// </div>
//</div>

      var cardholder = $(document.createElement('div'));
      $(cardholder).addClass("col-md-5").addClass("justify-content-center").addClass("container");

      var card = $(document.createElement('div'));
      $(card).addClass("card").css("margin-top", "5px");//.addClass("col-md-6");

      var cih = $(document.createElement('div'));
      $(card).addClass("card-img-holder");//.addClass("col-md-6");

      var img = $(document.createElement('img'));
      try{
        var imgTmp = JSON.parse(object['photo']);
        // console.log(imgTmp);
        $(img).addClass("card-img-top").attr("src", imgTmp[0]).css("max-height", "200px");
      }catch(err){
        $(img).addClass("card-img-top").attr("src", object['photo']).css("max-height", "200px");
      }

      cih.append(img);

      var body = $(document.createElement('div'));
      body.addClass('card-body');

      var title = $(document.createElement('h5'));
      $(title).addClass("card-title").html(object['name']);

      var link = $(document.createElement('a'));
      $(link).addClass("btn").addClass("btn-sm").addClass("btn-outline-primary").attr("href", "place.php?id="+object['id']).html("Подробнее");

      var descr = $(document.createElement('p'));
      var descr_limit = 50;  //Set char qty limit in descriptions
      if(object['description'].length > descr_limit){
        $(descr).addClass("card-text").html(object['description'].substring(0, object['description'].substring(0, descr_limit).lastIndexOf(" "))+"...");
      }else{
        $(descr).addClass("card-text").html(object['description']);
      }

      var footer = $(document.createElement('div'));
      footer.addClass('card-footer');

      var address = $(document.createElement('small'));
      $(address).addClass("muted").html(object['address']);

      $(body).append(title).append(descr).append(link);

      $(footer).append(address);

      $(card).append(cih).append(body).append(footer);

      $(cardholder).append(card);

        $("#tiles-holder").addClass("row").addClass("no-gutters").append(cardholder);
      })
    }else{
      // Сообщение об отсутствии объектов
      console.log("Nothing");
      var msgHolder = $(document.createElement("div"));
      
      var header = $(document.createElement('h2'));
      header.html("Объекты не найдены");
      
      msgHolder.append(header);
      
      if (($.getUrlVar("q") != null) && ($.getUrlVar("q") != "") && false) {
        var searchTxt = $(document.createElement("p"));
        searchTxt.html("Мы ничего не смогли найти по запросу \""+$.getUrlVar("q")+'"');

        var endST = $(document.createElement("p"));
        endST.html("Попробуйте изменить запрос или подобрать объект по параметрам");
        
        msgHolder.append(searchTxt).append(endST);
      }
      
      $("#tiles-holder").append(msgHolder);
    }
}

$(function(){
  tiles = true;
  if (($.getUrlVar("q") != null) && ($.getUrlVar("q") != "")) {
    searchLocations($.getUrlVar("q"));
  }
  if (($.getUrlVar("cat") != null) && ($.getUrlVar("cat") != "")) {
    console.log("Hello?");
    presetCategory($.getUrlVar("cat"));
  }
});