@extends('layouts.plain')

<?php if(isset($pattern)): ?>
  @section('content')
    <body style="background-image: url(/images/subtle_patterns/{{ $pattern }}/{{ $pattern }}.png);">
      <div style="padding: 10px;">
        <a href="/helpers/patterns">View All Patterns</a>
      </div>
      <h1>{{ $pattern }}</h1>
    </body>
  @endsection
<?php else: ?>
  @section('content')
    <body>
      @foreach ($patterns as $pattern)
        <section class="pattern-block {{ $pattern }}">
          <h1>
            <a href="/helpers/patterns/{{ $pattern }}" style="color: #fff;">
              <?= $pattern ?>
            </a>
          </h1>
        </section>
      @endforeach
    </body>
  @endsection
<?php endif; ?>