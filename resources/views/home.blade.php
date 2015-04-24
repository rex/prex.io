@extends('layouts/master')

@section('content')
  <section class="blurbs">
    <div class="ui centered grid">
      <div class="twelve wide centered column">
        <h1 class="ui center aligned header">My name is Pierce Moore.</h1>
        <h2 class="ui center aligned header">I spend my time building things on the web.</h2>
      </div>
    </div>
  </section>
  <section class="status modules">
    <div class="ui grid">
      <div class="four wide column">
        <div class="ui raised segment">
          <div class="ui active dimmer">
            <div class="ui small text loader">Loading</div>
          </div>

          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised segment">
          <div class="ui active dimmer">
            <div class="ui small text loader">Loading</div>
          </div>

          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised loading segment">
          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised loading segment">
          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised segment">
          <div class="ui active dimmer">
            <div class="ui small text loader">Loading</div>
          </div>

          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised segment">
          <div class="ui active dimmer">
            <div class="ui small text loader">Loading</div>
          </div>

          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised loading segment">
          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised loading segment">
          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised segment">
          <div class="ui active dimmer">
            <div class="ui small text loader">Loading</div>
          </div>

          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised segment">
          <div class="ui active dimmer">
            <div class="ui small text loader">Loading</div>
          </div>

          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised loading segment">
          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised loading segment">
          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>

      <div class="four wide column">
        <div class="ui raised segment">
          <div class="ui active dimmer">
            <div class="ui small text loader">Loading</div>
          </div>

          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised segment">
          <div class="ui active dimmer">
            <div class="ui small text loader">Loading</div>
          </div>

          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised loading segment">
          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
      </div>
      <div class="four wide column">
        <div class="ui raised loading segment">
          This is a loading segment! Lorem ipsum dolor sit amet, blah blah foo bar calculus mermaids.
        </div>
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

  <script type="text/javascript">
  $(function() {
    $("a.js-digitalocean-status").click(function(e) {
      e.preventDefault()
      $(".ui.basic.modal").modal('show')
    })
  })
  </script>
@endsection
