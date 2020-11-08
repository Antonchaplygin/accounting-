<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/income/css/bootstrap.css">
    <link rel="stylesheet" href="/income/css/main.css">
    <link rel="stylesheet" href="/income/css/hell.css">
    <link rel="stylesheet" href="/income/css/bootstrap.css">
    <script src="/income/js/bootstrap.js" type="text/javascript"></script>
    <script src="/income/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/income/js/bootstrap.js" type="text/javascript"></script>
    <title></title>
  </head>
<body>
<header>
  <nav class="navbar navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Dashboard</a>
    <div>
      <a class="btn btn-outline-success my-2 my-sm-0" href="/admin.php?action=export">Export</a>
      <a class="btn btn-outline-danger my-2 my-sm-0" href="">Sign out</a>
    </div>
  </nav>
</header>

<div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <div id="left1">
              <div class="dropdown">
                <svg style="position: relative; left: 10px; top: 10px;" width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-app" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 2H5a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"></path>
</svg>
  <a style=" position: relative; left: 3px; background-color: #ffffff05; color: #007bff;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MyBudget</a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="#">New budget</a>
      <a class="dropdown-item" href="#">Open budget</a>
      <a class="dropdown-item" href="#">Make a fresh start</a>
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Action</a>
    </div>
  </div>
  <p class="email">emailof_person@gmail.com</p>
   <script>
   $('.dropdown').click(function(){
    $('.dropdown-menu').toggleClass('show');
});
</script>
              </div>
                <div id="left2">
            <li class="nav-item">
              <svg style="position:relative; bottom: 40px; left: 10px;" width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
</svg>
<a style="position: relative; left: 30px; bottom: 80px;" class="nav-link" href=""><h5 style="font-size: 105%" ;="">Budget</h5></a>
            </li>
          </div>
          <div id="left3">
            <li class="nav-item">
              <svg style="position:relative; bottom: 40px; left: 10px;" width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"></path>
</svg>
              <a style="position: relative; left: 30px; bottom: 80px;" class="nav-link" href=""><h5 style="font-size: 105%">Reports</h5></a>
            </li>
            </div>
            <div id="left4">
            <li class="nav-item">
              <svg style="position:relative; bottom: 40px; left: 10px; bottom: 25px;" width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-layers-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.188 8L.264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l-4.578 2.441a.5.5 0 0 1-.47 0L3.188 8z"></path>
  <path fill-rule="evenodd" d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4zM1.563 6L8 9.433 14.438 6 8 2.567 1.562 6z"></path>
</svg>
              <a style="position: relative; left: 27px; bottom: 60px;" class="nav-link" href=""><h5 style="font-size: 105%">All accounts</h5></a>
            </li>
            </div>
          </ul>
          <div id="account">
            <h5>No accounts</h5>
            <p>You can't budget without adding accounts to YNAB first. How about adding one now?</p>
            <button class="add_acc">Add account</button>
          </div>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <div id="block">
    <a href="#"><svg style="position: relative; left: 50px; top: 20px;" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
  </svg></a>
          <h1 style="position: relative; left: 100px; bottom: 30px;">Oct 2020</h1>
          <a href="#"><svg style="position: relative; left: 260px; bottom: 97px;" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z"></path>
</svg></a>

        </div>
          <table style="width: 1200px; position: relative; right: 15px;" class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Dates</th>
        <th scope="col">Food</th>
        <th scope="col">Products</th>
        <th scope="col">House</th>
        <th scope="col">Services</th>
        <th scope="col">S-ng</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">2 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">3 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">4 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">5 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">6 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">7 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">8 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">9 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">10 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">11 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">12 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">13 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
      <tr>
        <th scope="row">14 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr><tr>
        <th scope="row">15 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr><tr>
        <th scope="row">16 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr><tr>
        <th scope="row">17 Oct</th>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
        <td><input type="text" class="number" placeholder="$0.00"></td>
      </tr>
    </tbody>
  </table>


        </main>
      </div>
    </div>



    <!-- Модалочка на редактирование объекта -->

      <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Добавить объект</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">


<!-- //////////////////////////////////////////////////////////////////////// -->
              <div class="container">
                <div class="row">
                  <div class="col-md-4 col-12">
                    <div class="edit-photo-holder card">
                      <img class="edit-photo-img card-img-top rounded mx-auto d-block" src="/income/img/no-photo.png">
                      <div class="btn-group" role="group">
                        <button class="btn btn-block btn-primary" id="edit-photo-upload" disabled=""><i class="fa fa-upload" aria-hidden="true"></i></button>
                        <button class="btn btn-block btn-link" id="edit-photo-link"><i class="fa fa-link" aria-hidden="true"></i></button>
                          <form name="uploadimages" method="post" enctype="multipart/form-data">
                              <input id="uploadimage" type="FILE" name="uploadimage">
                          </form>
                      </div>
                    </div>
                   </div>
                   <div class="col-md-8 col-12">
                    <div class="form-group">
                     <input type="text" class="form-control edit-obj" id="edit-name" placeholder="Название">
                     <input type="text" class="form-control edit-obj" id="edit-id" hidden="">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control edit-obj" rows="4" id="edit-description" placeholder="Описание"></textarea>
                    </div>
                   </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                     <input type="text" class="form-control edit-obj" id="edit-ex_description" placeholder="Описание льготы">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="container">
                    <div class="form-group form-inline no-gutters">
                      <div class="col">
                      <select class="form-control edit-obj w-100" id="edit-category" style="width: 24%;">
                        <option value="">Категория</option>


                      </select>
                      </div>
                      <div class="col">
                      <select class="form-control edit-obj w-100" id="edit-city" style="width: 24%;">
                        <option value="">Город</option>


                      </select>
                      </div>
                      <div class="col">
                      <select class="form-control edit-obj w-100" id="edit-subway" style="width: 24%;">
                        <option value="">Метро</option>

                      </select>
                      </div>
                      <div class="col">
                      <select class="form-control edit-obj w-100" id="edit-area" style="width: 24%;">
                        <option value="">Район</option>

                      </select>
                      </div>
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control edit-obj" id="edit-address" placeholder="Адрес">
                 </div>
                 <form class="form-inline">
                     <input type="phone" class="form-control edit-obj w-50" id="edit-phone" placeholder="Телефон">
                     <input type="url" class="form-control edit-obj w-50" id="edit-domain" placeholder="http://">
                 </form>
                 <hr>
                 <div class="form-group">
                   <label for="edit-timetable">Режим работы</label>
                   <table width="100%">
                     <tbody><tr><th>День недели</th><th>С</th><th>До</th></tr>
                     <tr><td>Понедельник</td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-md-from"></td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-md-till"></td>
                    </tr>
                     <tr><td>Вторник</td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-tu-from"></td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-tu-till"></td>
                    </tr>
                     <tr><td>Среда</td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-wd-from"></td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-wd-till"></td>
                    </tr>
                     <tr><td>Четверг</td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-th-from"></td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-th-till"></td>
                    </tr>
                     <tr><td>Пятница</td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-fr-from"></td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-fr-till"></td>
                    </tr>
                     <tr><td>Суббота</td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-sa-from"></td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-sa-till"></td>
                    </tr>
                     <tr><td>Воскресение</td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-su-from"></td>
                         <td><input type="time" class="form-control edit-obj" id="edit-timetable-su-till"></td>
                    </tr>
                   </tbody></table>
                 </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                     <input type="text" class="form-control edit-obj" id="edit-ab_name" placeholder="Ваше имя">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                     <input type="email" class="form-control edit-obj" id="edit-ab_email" placeholder="Ваш email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h5>Подтверждено: <small class="edit-obj" id="edit-approved_by">неизвестно</small></h5>
                  </div>
                </div>

<!-- /////////////////////////////////////////////////////// -->

            </div>
            <div class="modal-footer">
              <form class="form-inline">
                <div class="input-group float-left">
                  <input type="number" class="form-control edit-obj" id="edit-price" placeholder="Стоимость">
                  <div class="input-group-addon">₽</div>
                </div>
              </form>
              <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
              <button type="button" id="edit-object-btn" class="btn btn-primary">Отправить</button>
            </div>
          </div>
        </div>
    </div>



</body>
</html>
