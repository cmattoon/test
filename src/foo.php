<?php
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
    </title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style class="custom-css">
#jumbo {
  background-color: #333;
  color: #eee;
}
#jumbo p {
  font-size: 16px;
}
#try-header {
  margin: 30px 0px;
}
#try-more {
  margin: 30px 0px;
  font-style: italic;
}
</style>
</head>

  <body>
    <div id="jumbo" class="jumbotron">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                Quick Edit
              </h3>
            </div>
            <div class="panel-body">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      Cell 1
                      <div class="form-group">
                        <label>
                          Add Note:
                        </label>
                        <input type="text" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-add-note btn-primary">
                        AddNote
                      </button>
                    </td>
                    <td>
                      Cell 2
                      <div class="form-group">
                        <label>
                          Label
                        </label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>
                          Upload your file:
                        </label>
                        <input type="file" class="form-control">
                        <div class="form-group">
                          <label>
                            Choose wisely:
                          </label>
                          <select class="form-control">
                            <option value="pizza">
                              Pizza
                            </option>
                            <option value="salad">
                              Salad
                            </option>
                            <option value="pizzasalad">
                              Pizza and Salad
                            </option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-add-attachment btn-primary">
                        Add-Attachment
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              Panel content
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h3>
            Span 4
          </h3>
          <p>
            Content
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            Span 4
          </h3>
          <p>
            Content
          </p>
        </div>
      </div>
      <div class="container">
        <img src="https://s3.amazonaws.com/jetstrap-site/images/website/common/jetstrap_logo.png">
        <h1>
          Welcome to Jetstrap!
        </h1>
        <p>
          This is the Jetstrap demo. Feel free to play around with it!
        </p>
        <p>
          Try dragging new Bootstrap 3 components from the left side onto this page.
        </p>
        <p>
          When you are ready to try the real thing, click Sign up above!
        </p>
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <h2 id="try-header">
        Try the full version to get
      </h2>
      <div class="row">
        <div class="col-md-4">
          <h3>
            Cloud Saving
          </h3>
          <p>
            Jetstrap saves all your projects and screens in the cloud, so you can
            work on them from anywhere, at any time.
          </p>
          <p>
            No software to install means Jetstrap is fast and easy to use!
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            Sharing and Linking
          </h3>
          <p>
            You can wire up screens to link to each other, and share your work with
            anyone in the world!
          </p>
          <p>
            Quickly show clients and co-workers your work, and let them preview the
            page on different screen sizes.
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            Full HTML/JS/CSS Editing
          </h3>
          <p>
            Jetstrap lets you edit the full HTML of each screen you design, and you
            can add custom CSS and Javascript to give your screens some life!
          </p>
          <p>
            Add backend services like
            <a href="http://firebase.com/">Firebase</a>
            , or customize the look and feel of your page.
          </p>
        </div>
      </div>
      <h2 id="try-more">
        And more!
      </h2>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
      </script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js">
      </script>
    </div>


</body></html>