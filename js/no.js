// Dirty .js where all non-UI job processes

var map;
var geocoder;
var markers = [];
var bounds;
var infoViewContent = [];
var photo_url = "";
var autoload = true;

var tiles = false;

function rearrange() {
  try {
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    var infoViewContent = [];
    for (i = 0; i < markers.length; i++) {
     markers[i].setMap(null); 
    }
    if(locations!=null){
      for (i = 0; i < locations.length; i++) {
        var full = JSON.parse(locations[i][3]);
        var fullphoto = full['photo'];
        var fullphoto = fullphoto.replace('["','');
        var fullphoto = fullphoto.replace('"]','');
        infoViewContent.push("<div style='width:200px;'><img class='rounded' src='"+fullphoto+"' width='100%'><h5 class='txt-red map-font-fix'>"+full['name']+"</h5><a class='map-font-fix' href='/place.php?id="+full['id']+"'>Подробнее..</a></div");

        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map
        });
        
        markers.push(marker);
        bounds.extend(marker.position);

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            //buildInfoView(infowindow, map, marker, false);
            //reGeocode(locations[i][1], locations[i][2], infowindow, map, marker);
            //infoViewContent = JSON.parse(locations[i][3]);
            infowindow.setContent(infoViewContent[i]);
            infowindow.open(map, marker);
          }
        })(marker, i));

        var center;
        function calculateCenter() {
          center = map.getCenter();
        }
        google.maps.event.addDomListener(map, 'idle', function() {
          calculateCenter();
        });
        google.maps.event.addDomListener(window, 'resize', function() {
          map.setCenter(center);
        });
      }
    }else{
      locations = null;
    }
    map.fitBounds(bounds);
  } catch (err) {
    console.log("Google is not loaded");
  }
}

function initMap() {
  map = new google.maps.Map(document.getElementById('map_canvas'), {
    zoom: 10,
    center: new google.maps.LatLng(59.9, 30),
    disableDefaultUI: true,
    zoomControl: true
  });
  geocoder = new google.maps.Geocoder;
  bounds = new google.maps.LatLngBounds();
  
  getLocations();
}

function initFilter(){
  //$.ajax("api.php?action=clear_filter");

  $('.dropdown-submenu a.sbmenu').hover(function(e){
    $('.dropdown-sbmenu').hover(function(e){
      $(this).show();
    }, function(e){
      $(this).hide();
    });
    $(this).next('ul').show();
  }, function(e){
    $(this).next('ul').hide();
  });
  
 // Filter click listener
function clickInit(){
  $(".sbmenu").unbind("click");
  $(".sbmenu").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    $(this).toggleClass("filter-pending").find(".fa").toggleClass("fa-square-o").toggleClass("fa-check-square-o");
    if($(this).hasClass("main")){
      if($(this).hasClass("filter-pending")){
        // Set children
        $("a[dt-relate="+$(this).attr('id')+"]").not(".filter-pending").toggleClass("filter-pending").find(".fa").toggleClass("fa-square-o").toggleClass("fa-check-square-o");
      }else{
        // Unset children
        $("a[dt-relate="+$(this).attr('id')+"].filter-pending").toggleClass("filter-pending").find(".fa").toggleClass("fa-square-o").toggleClass("fa-check-square-o");
      }
    }
    if($(this).hasClass("filter-checked") || $(this).hasClass("filter-was")){
      $(this).toggleClass("filter-checked").toggleClass("filter-was");
    }
  })
}
clickInit();



  // Change to #set-filter on update
  $('#set-filter').click(function(e){
    e.preventDefault();
    $(".filter-checked").removeClass('filter-checked');
    $.each($(".sbmenu.filter-pending"), function(index, element){
      $(element).removeClass('filter-pending');
      // $(element).toggleClass('active').toggleClass('filter-checked');
      $.ajax("api.php?action=update_filter&name="+$(this).attr('dt-type')+"&val="+$(this).attr('id')+(autoload? "&mode=set":"")).done(function(resp) {
        var list = JSON.parse(resp);
        console.log(list);
        if ('extend' in list){
          $.ajax("api.php?action=extend_filter").done(function(extend){
            $('#extend-holder').empty().append(extend);
            clickInit();
            filterUpdate(list);
          });
        }else{
          filterUpdate(list); 
        }
        getLocations();
      });
    });
  });

  //////////////////////////////////////////////////////
  // api.php?action=update_filter&name=city&val=city-1
  // Тот самый костыль для автовыбора города

  // $("#city-1").click();
  // $("#set-filter").delay(750).click();
  // autoload = false;

//////////////////////////////////////////////////////

  $('#clear-filter').click(function(e){
    e.preventDefault();
    $.ajax("api.php?action=clear_filter");
    $(".filter-checked").removeClass("filter-checked");
    $(".fa-check-square-o").removeClass("fa-check-square-o").addClass("fa-square-o");
    getLocations();
  })
}



function filterUpdate(list){
  console.log(list);
  Object.keys(list).forEach(function(key) {
    var value = ""+list[key];
    value.split(",").forEach(function(item, i){
      console.log("#"+key+"-"+item);
      $("#"+key+"-"+item).addClass('filter-checked').find(".fa").removeClass("fa-square-o").addClass("fa-check-square-o");
    })
  });  
}

function getLocations(){
  $.ajax("api.php?action=get_locations").done(function(list) {
    // console.log(list);
    locations = JSON.parse(list);
    rearrange();
    if(tiles){
      reassemble();
    }
  });
}

function searchLocations(text){
  $.ajax("api.php?action=search_obj&q="+text).done(function(list){
    locations = JSON.parse(list);
    rearrange();
    if(tiles){
      reassemble();
    }
  })
}

function presetCategory(name){
  $.ajax("api1.php?action=clear_filter");
  $.ajax("api1.php?action=update_filter&mode=set&name=category&val=category-"+name).done(function(resp) {
    var list = JSON.parse(resp);
    console.log(list);
    filterUpdate(list); 
    getLocations();
  });
}

window.addEventListener("hashchange", function(event) {
  // $('html, body').animate({
  //       scrollTop: $($.attr(this, 'href')).offset().top
  // }, 500);
  scrollBy(0, -50);
  // window.location.hash = 
});

$('#add-photo-link').click(function(event){
  photo_url = prompt("Ссылка на изображение:");
});
$(window).keydown(function(event){
  if(event.keyCode == 13) {
    event.preventDefault();
    return false;
  }
});

$(function() {

  $('#add-object-btn').click(function(event){

    try{

    $('#add-object-btn').addClass('btn-warning').removeClass('btn-primary')
                       .empty().append('Отправляю...').prop( "disabled", true );

    var input = $("#uploadimage");
    var fd = new FormData;

    fd.append('img', input.prop('files')[0]);

    // $.ajax({
    //     url: 'http://example.com/script.php',
    //     data: fd,
    //     processData: false,
    //     contentType: false,
    //     type: 'POST',
    //     success: function (data) {
    //         alert(data);
    //     }
    // });


    // var newObj = {};
    // newObj['photo'] = photo_url;
    fd.append('photo', photo_url);
    $('.add-obj').each(function(i,el){
      // newObj[$(el).attr('id')] = $(el).val();
      fd.append($(el).attr('id'), $(el).val());
    });

   //console.log(newObj['add-location']);
    try{
      geocoder.geocode( { 'address': newObj['add-address']}, function(results, status) {
          if (status == 'OK') {
          // newObj['add-location'] = [results[0].geometry.location.lat(), results[0].geometry.location.lng()];
          fd.append('add-location', [results[0].geometry.location.lat(), results[0].geometry.location.lng()]);
        }
      });
    }catch(err){
      // newObj['add-location'] = "";
      fd.append('add-location', "");
    }

    //console.log(newObj);
     $.ajax({
      method: "POST",
      url: "/api.php?action=add_object",
      data: fd,
      processData: false,
      contentType: false,
      })
      .done(function( msg ) {
             //var msg = msg.replace(/[|&;$%@"<>()+,]\n/g, "");
             //console.log(msg.split(/\n/g))
       console.log(msg);
       //if(msg=="OK"){
       if(msg=="OK"){
        $('#add-object-btn').addClass('btn-success').removeClass('btn-warning').empty().append('Успех!').prop( "disabled", true );
        setTimeout(function() {
          $('#add-modal').modal('hide');
          $('#add-object-btn').addClass('btn-primary').removeClass('btn-success').empty().append('Отправить').prop( "disabled", false );
          $('.add-obj').val("");
        }, 2500);
       }else{
        $('#add-object-btn').addClass('btn-danger').removeClass('btn-warning').empty().append('Ошибка связи с сервером').prop( "disabled", false );
       }
      });
    }
    catch(err){
      console.log(err);
    }
  });

});
