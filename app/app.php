<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobClass.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <html>
          <head>
            <title></title>
          </head>
          <body>
              <form action='/view_jobboard'>
                  <div class='form-group'>
                      <label for='title'>Job Title</label>
                      <input name='title' class='form-control' id='title' type='text'>
                  </div>
                  <div class='form-group'>
                      <label for='description'>Job Description</label>
                      <input name='description' class='form-control' id='description' type='text'>
                  </div>
                  <div class='form-group'>
                      <label for='contact_info'>Contact Info</label>
                      <input name='contact_info' class='form-control' id='contact_info' type='text'>
                  </div>
                  <button type='submit' class='btn'>SUBMIT</button>
              </form>
          </body>
        </html>
        ";
    });

    $app->get("/view_jobClass", function() {
        $my_jobOpening = new JobOpening($_GET['title'], $_GET['description'], $_GET['contact_info']);
        $output = '';
        $output = $output . $my_jobOpening->getTitle();
        $my_jobOpening->getDescription();
        $my_jobOpening->getContactInfo();
        return $output;
    });
    return $app;
?>
