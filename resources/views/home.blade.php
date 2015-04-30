@extends('layouts/master')

@section('content')
  <div ng-controller="HomeController">
    <section class="blurbs">
      <div class="ui centered grid">
        <div class="twelve wide centered column">
          <h1 class="ui center aligned header">My name is Pierce Moore.</h1>
          <h2 class="ui center aligned header">I spend my time building things on the web.</h2>
        </div>
      </div>
    </section>
    <section class="status-modules">
      <h1 class="centered uppercase light roomy">My Footprint on the Web</h1>

      <div class="ui grid">
        <div class="sixteen wide column">
          <card-github></card-github>
        </div>

        <div class="eight wide column">
          <card-stackoverflow></card-stackoverflow>
        </div>

        <div class="eight wide column">
          <card-npm></card-npm>
        </div>

        <div class="eight wide column">
          <card-rubygems></card-rubygems>
        </div>

        <div class="eight wide column">
          <card-digitalocean></card-digitalocean>
        </div>

        <div class="eight wide column">
          <card-twitter></card-twitter>
        </div>

        <div class="eight wide column">
          <card-instagram></card-instagram>
        </div>

        <div class="eight wide column">
          <card-mixcloud></card-mixcloud>
        </div>

        <div class="eight wide column">
          <card-soundcloud></card-soundcloud>
        </div>
      </div>
    </section>

    <div class="ui basic modal">
      <i class="close icon"></i>
      <div class="header">
        Archive Old Messages
      </div>
      <div class="content">
        <div class="image">
          <i class="archive icon"></i>
        </div>
        <div class="description">
          <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
        </div>
      </div>
      <div class="actions">
        <div class="two fluid ui inverted buttons">
          <div class="ui red basic inverted button">
            <i class="remove icon"></i>
            No
          </div>
          <div class="ui green basic inverted button">
            <i class="checkmark icon"></i>
            Yes
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  $(function() {
    $("a.js-digitalocean-status").click(function(e) {
      e.preventDefault()
      $(".ui.basic.modal").modal('show')
    })
  })
  </script>
@endsection
