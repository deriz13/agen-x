@extends('home.layouts.app')

@section('content')
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to Agen-X</h1>
      <h2>Silahkan Submit Untuk Membuat Ticket Anda</h2>
      <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Ticket
        </button>
    </div>
  </section>
  @include('home.modal')
@endsection