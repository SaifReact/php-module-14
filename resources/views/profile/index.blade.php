@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <img src="{{ asset('images/profile.jpg') }}" class="rounded-circle" alt="Profile Image" width="150" height="150">
    <h2 class="mt-3">John Doe</h2>
    <p class="text-muted">Full Stack Developer | Laravel & Vue Expert</p>
</div>

<div class="card mb-4">
    <div class="card-header bg-primary text-white">About Me</div>
    <div class="card-body">
        <p>
            I am a passionate web developer with experience in Laravel, Vue.js, and REST APIs. I love building scalable web applications and working on challenging projects.
        </p>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header bg-success text-white">Work Details</div>
    <div class="card-body">
        <ul>
            <li><strong>Company:</strong> Tech Solutions Ltd.</li>
            <li><strong>Role:</strong> Senior Software Engineer</li>
            <li><strong>Experience:</strong> 5+ Years</li>
            <li><strong>Skills:</strong> Laravel, Vue, React, MySQL, Docker</li>
        </ul>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header bg-info text-white">Location</div>
    <div class="card-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.902366294936!2d90.39192171543244!3d23.75090359459618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b0d1a1b0db%3A0x1e2e28b3f3c4548!2sDhaka!5e0!3m2!1sen!2sbd!4v1696785612321!5m2!1sen!2sbd" 
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endsection