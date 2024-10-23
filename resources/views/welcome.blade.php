@extends('layouts.app')

@section('content')
    @guest
    <main class="py-4 pb-0">
        <section class="hero-section d-flex align-items-center justify-content-center p-3 m-2 pt-5 pb-5">
            <div class="text-center">
                <h1 class="display-4 mt-4">Welcome to ASK SPHERE</h1>
                <p class="lead">Ask questions in your field of work, get answers, and explore knowledge from others.</p>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Already Have an Account</a>
            </div>
        </section>

        <section id="features" class="text-center p-3 m-2 pt-5 pb-5">
            <div class="container">
                <h2 class="">How It Works</h2>
                <div class="row">
                    <div class="col-md-4 mt-4">
                        <div class="card p-3">
                            <div class="card-body">
                                <i class="fas fa-question-circle fa-3x text-primary mb-3"></i>
                                <h5 class="card-title">Ask Questions</h5>
                                <p class="card-text">Post your questions in specific categories and get insightful answers from other professionals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card p-3">
                            <div class="card-body">
                                <i class="fas fa-search fa-3x text-primary mb-3"></i>
                                <h5 class="card-title">Search and Explore</h5>
                                <p class="card-text">Browse through a wide range of questions and answers in different fields of expertise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card p-3">
                            <div class="card-body">
                                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                                <h5 class="card-title">Collaborate with Others</h5>
                                <p class="card-text">Engage with a community of experts, share your knowledge, and help others find solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta" class="bg-primary text-white text-center p-3 pt-5 pb-5">
            <div class="container">
                <h2>Ready to Ask and Explore?</h2>
                <p>Join ASK SPHERE today and become part of a thriving knowledge-sharing community.</p>
                <a href="{{ route('register') }}" class="btn btn-light btn-lg">Sign Up Now</a>
            </div>
        </section>
    </main>
    @else
        <script>
            window.location.href = "{{ route('explore') }}";
        </script>
    @endguest
@endsection
