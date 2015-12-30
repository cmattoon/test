<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]---->
      <script src="js/require.js" data-main="js/init.js"></script>
  </head>

  <body>
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
              <div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/#" data-bind="text: txtProjectName"></a></div>
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="/#">Dashboard</a></li>
                      <li><a href="/#">Settings</a></li>
                      <li><a href="/#">Profile</a></li>
                      <li><a href="/#">Help</a></li>
                  </ul>
                  <form class="navbar-form navbar-right">
                      <input type="text" class="form-control" placeholder="Search...">
                  </form>
              </div>
          </div>
      </div>
      <form id="frmQuickEdit" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <fieldset class="col-md-4">
              <legend>1. Add a Note</legend>
              <div class="row">
                  <div class="col-md-12">
                      <label for="txtSubject">Subject</label>
                  </div>
                  <div class="col-md-12">
                      <input type="text" id="txtSubject" class="form-control">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="txtQuickNote">Note</label>
                  </div>
                  <div class="col-md-12">
                      <textarea id="txtQuickNote" class="form-control"></textarea>
                  </div>
              </div>

          </fieldset>
          <fieldset class="col-md-4">
              <legend>2. Attach a File</legend>
              <div class="row">
                  <div class="col-md-4">
                      <label for="fileUpload">File</label>
                  </div>
                  <div class="col-md-8">
                      <input type="file" id="fileUpload">
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-4">
                      <label for="sbType">File Type:</label>
                  </div>
                  <div class="col-md-8">
                      <select id="sbType" class="form-control" data-bind="options: selectableTypes"></select>
                  </div>
              </div>

          </fieldset>
          <fieldset class="col-md-4">
              <legend>3. Meta</legend>

              <div class="row">
                  <div class="col-md-4">
                      <label for="sbRegards">Regards:</label>
                  </div>
                  <div class="col-md-8">
                      <select id="sbRegards" class="form-control" data-bind="options: selectableRegards"></select>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                      <input type="submit" name="txt_quick_note" class="btn btn-primary">
                  </div>
              </div>
          </fieldset>
      </form>
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-3 col-md-2 sidebar">
                  <ul class="nav nav-sidebar">
                      <li class="active"><a href="/#">Overview</a></li>
                      <li><a href="/#">Reports</a></li>
                      <li><a href="/#">Analytics</a></li>
                      <li><a href="/#">Export</a></li>
                  </ul>
                  <ul class="nav nav-sidebar">
                      <li><a href="">Nav item</a></li>
                      <li><a href="">Nav item again</a></li>
                      <li><a href="">One more nav</a></li>
                      <li><a href="">Another nav item</a></li>
                      <li><a href="">More navigation</a></li>
                  </ul>
                  <ul class="nav nav-sidebar">
                      <li><a href="">Nav item again</a></li>
                      <li><a href="">One more nav</a></li>
                      <li><a href="">Another nav item</a></li>
                  </ul>
              </div>
              <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                  <h2 class="sub-header">Recent Activity</h2>
                  <div class="table-responsive">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Time</th>
                                  <th>Subject</th>
                                  <th>Contributor</th>
                                  <th>Type</th>
                                  <th>Scope</th>
                                  <th>Links</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>2015-12-31 23:59:59</td>
                                  <td>Something doesn't work</td>
                                  <td>cmattoon</td>
                                  <td>
                                      <span class="label label-default">Screenshot</span>
                                  </td>
                                  <td>
                                      <span class="label label-primary">Specification</span>
                                  </td>
                                  <td>
                                      <a class="btn btn-sm btn-success">Go</a>
                                  </td>
                              </tr>
                          </tbody></table>
                  </div>
              </div>
          </div>
      </div><!-- Bootstrap core JavaScript
    ================================================== --><!-- Placed at the end of the document so the pages load faster --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </body></html>