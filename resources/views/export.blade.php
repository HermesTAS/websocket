<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Export</title>
</head>

<body>
  <button class="export-button">Start Export</button>

  <div id="progress"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- <script src="{{ asset('js/app.js') }}"></script> -->
  <script src="https://js.pusher.com/7.0.3/pusher.min.js"></script>
  <script>
    let pusher = new Pusher('tes', {
      broadcaster: 'pusher',
      cluster: 'mt1',
      wsPort: 6001,
      wssPort: 6001,
      wsHost: '192.168.3.252',
      key: 'tes',
      forceTLS: false,
    })


    // broadcaster: 'pusher',
    // key: 'tes',
    // wsHost: window.location.hostname,
    // wsPort: 6001,
    // forceTLS: false,
    // disableStats: true,
    pusher.subscribe('client-progress')
    console.log(pusher);
  </script>
  <!-- <script>
    let echo = Echo.channel('progress')
      .listen('Exporting', event => {
        $('#progress').text(event.progress)
      })

    console.log(echo);

    $('.export-button').click(function() {
      $.ajax({
        url: `http://websocket-server.test/api/export`,
        method: 'POST',
        dataType: 'JSON',
        success: response => {
          console.log(response.message);
        },
        error: error => {
          console.log(error);
        }
      })
    })
  </script> -->
</body>

</html>