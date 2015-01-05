@extends('layouts.base')

@section('main')
  <header class="banner">
    <div class="container-fluid">
      <h1 class="logo upper">
        Todo List <i class="fa fa-check-square-o"></i>
      </h1>
      <nav class="menu">
        <ul>
          <li><a href="/account/login" class="upper">Login</a></li>
          <li><a href="/account/register" class="upper sing">Sing up</a></li>
        </ul>
      </nav>

      <h1 class="title upper center">Remember anything.</h1>
      <p class="center upper">We develop it simple, but you can fork this project on <a href="#" class="link">Github</a> and use our <a href="" class="link">API</a>.</p>

      <div class="callto center">
        <a href="/account/register" class="btn btn-lg btn-primary">Create a free account</a>
      </div>
    </div>
  </header>
  <section class="display center">
    <h1>Never forget what to do!</h1>
    <p>Simple and easy to use for work, studies or something else.</p>
  </section>
  <section class="container center features">
    <h1>Why use this?</h1>
    <div class="col-md-4 item">
      <i class="fa fa-github"></i>
      Is open source.
    </div>
    <div class="col-md-4 item">
      <i class="fa fa-code"></i>
      Have a simple RESTful API.
    </div>
    <div class="col-md-4 item">
      <i class="fa fa-smile-o"></i>
      You have nothing to lose.
    </div>
  </section>
  <footer class="footer center">
    <div class="container">
      <div class="col-sm-12">
        <p>This project was made to show some friends how to develop API's using PHP, MySQL and Laravel.</p>
      </div>
    </div>
  </footer>
@stop