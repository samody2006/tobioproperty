@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('styles')

@endsection

@section('content')


    <section class="section">
    <div class="container">
            <div class="row">

                <div class="col s12 m6">
                    <div class="contact-content">
                        <h4 class="contact-title">About Us</h4>

                        <div class='equal-height'>
                <div class='is-flex is-horizontal-center'>
                <img class="chip" src='/frontend/images/girl1.jpeg'>
                </div>
            </div>
                        <br>
                        <p>Welcome to Tobio Properties, your number one Realtor and Real Estate Consultant for all kind of Real Estate, with a focus on fast, trust and efficient service.<br>
                            <br>
                            <p>Founded in August 2018 by Mercy T. Okoro, Tobio Properties has come a long way to assist home and abroad to axis. When Mercy T. Okoro first started out, her passion for fast and trustworthy drove them to do tons of search so that Tobio Properties can offer you the world's most advanced real state search engine. We now serve customers all over the world, and are thrilled that we're able to turn our passion into our own website.</p>
                            <br>
                            <p>We hope you enjoy our service as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
                            <br>
                            <p><i><b>Mercy T. Okoro</b></i></p>

                    </div>
                </div> <!-- /.col -->

                <div class="col s12 m6">
                    <div class="contact-sidebar">
                      <div id="player"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>
         var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '315',
          width: '560',
          videoId: 'nL2wlMnaGYA',
          playerVars: {
            'playsinline': 1
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

     
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
@endsection