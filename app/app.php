<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/pingpong.php";

    $app = new Silex\Application();

    $app->get("/pingpong", function() {
          return
          "<!DOCTYPE html>
          <html>
            <head>
              <meta charset='utf-8'>
              <title>Ping Pong</title>
              <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            </head>

            <body>
              <div class='container'>
                <h1>Ping Pong Test</h1>

                <form action='results'>
                  <div class='form-group'>
                    <label for='number'>Enter a number to count to</label>
                    <input type='number' name='number' id='number'>
                  </div>
                  <button type='submit' class='btn btn-lg btn-warning'>Submit</button>

                </form>
              </div>
            </body>
          </html>";
    });

    $app->get("/results", function() {
        $results = new PingPong($_GET["number"]);

        return "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Ping Pong</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>
          <body>
            <div class='container'>
              <h1>Ping Pong Results</h1>
              <ul>
                <?php
                    $numb1 = 3;
                    $numb2 = 5;
                    $word1 = 'Ping';
                    $word2 = 'Pong';

                    foreach ($array as $index) {
                      if ($index != 0) {
                        if (($index % $numb1 == 0) && ($index % $numb2 == 0)) {
                          echo '<li>' . $word1 . $word2 . '</li>';
                        } elseif ($index % $numb2 == 0) {
                          echo '<li>' . $word2 . '</li>';
                        } elseif ($index % $numb1 == 0) {
                          echo '<li>' . $word1 . '</li>';
                        } else {
                          echo '<li>' . $index . '</li>';
                        }
                      }
                    }
                ?>
              </ul>
            </div>
          </body>
        </html>"
    });

    return $app;
?>
