$(function(){
  var photo_url = "";
  $('#edit-modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var object;
    var modal = $(this);
    
    $.ajax("api.php?action=get_object&id="+id).done(function(list) {
      object = JSON.parse(list);
      updateModal(modal, object);
    });
    
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    

  })
  
  function updateModal(modal, object){
    modal.find('.modal-title').text('Редактирование '+object.name);
    photo_url = object.photo;
    $.each(object, function(key, data){
      modal.find('#edit-'+key).val(data);
    });
    $("#edit-photo-img").attr("src", photo_url);
    if(object.worktime != ""){
      var tt = JSON.parse(object.worktime);
      $.each(tt, function(key, data){
        modal.find('#edit-timetable-'+key).val(data);
      })
    }
  }

$('#edit-photo-link').click(function(event){
  var link = prompt("Ссылка на изображение:")
  $("#edit-photo").val(link);
  $("#edit-photo-img").attr("src", link);
});
$(window).keydown(function(event){
  if(event.keyCode == 13) {
    event.preventDefault();
    return false;
  }
});

  $('#edit-object-btn').click(function(event){
    $('#edit-object-btn').addClass('btn-warning').removeClass('btn-primary')
                       .empty().append('Отправляю...').prop( "disabled", true );
    // var newObj = {};
    // newObj['photo'] = photo_url;


    // $('.edit-obj').each(function(i,el){
    //   newObj[$(el).attr('id')] = $(el).val();
    // });

    //console.log(newObj);
      var input = $("#uploadimage");
      var newObj = new FormData;

      newObj.append('img', input.prop('files')[0]);

      newObj.append('photo', photo_url);
      $('.edit-obj').each(function(i,el){
          // newObj[$(el).attr('id')] = $(el).val();
          newObj.append($(el).attr('id'), $(el).val());
      });


    $.ajax({
     method: "POST",
     url: "/admin.php?action=update_object",
     data: newObj,
        processData: false,
        contentType: false,
    })
    .done(function( msg ) {
     console.log(msg);
     if(msg=="OK"){
       $('#edit-object-btn').addClass('btn-success').removeClass('btn-warning')
                           .empty().append('Успех!').prop( "disabled", false );
     }else{
      $('#edit-object-btn').addClass('btn-danger').removeClass('btn-warning')
                          .empty().append('Ошибка связи с сервером').prop( "disabled", false );
     }
    });
  });
  
});