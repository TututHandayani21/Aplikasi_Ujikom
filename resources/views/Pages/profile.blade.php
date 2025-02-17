@extends('layouts.app')

@section('content')
<div class="profile-card">
          <img src="https://via.placeholder.com/100" alt="Profile Picture">
          <h2>Nama Anda</h2>
          <p>UI/UX Designer</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <div class="social-links">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-google"></i></a>
          </div>
          <div class="buttons">
              <button>Message</button>
              <button>Contact</button>
          </div>
      </div>


          <style>
                              body {
          font-family: Arial, sans-serif;
          background-color: #f2f2f2;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
      }
      .profile-card {
          background: white;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          text-align: center;
          max-width: 350px;
      }
      .profile-card img {
          width: 100px;
          height: 100px;
          border-radius: 50%;
          border: 3px solid #6a0dad;
      }
      .profile-card h2 {
          margin: 10px 0 5px;
      }
      .profile-card p {
          color: gray;
          font-size: 14px;
      }
      .social-links {
          margin: 10px 0;
      }
      .social-links a {
          color: #6a0dad;
          margin: 0 10px;
          font-size: 18px;
          text-decoration: none;
      }
      .buttons button {
          background-color: #6a0dad;
          color: white;
          border: none;
          padding: 10px 15px;
          margin: 5px;
          cursor: pointer;
          border-radius: 5px;
      }
      .buttons button:hover {
          background-color: #540b91;
      }

          </style>
@endsection