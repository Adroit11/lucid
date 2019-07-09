@extends('layouts.lucid')
@section('sidebar')
@parent
@endsection
@section('content')
 <!-- beginning of settings page -->
  <div class="settings">
    <!-- tab navigation here -->
    <h3><strong>Settings</strong></h3>
    <ul class="nav nav-tabs navbar-light" id="settings-tabs" role="tablist">
      <li class="nav-item">
        <a
          href="#profile"
          class="nav-link tab-link active"
          id="profile-tab"
          data-toggle="tab"
          role="tab"
          aria-controls="profile"
          aria-selected="true"
        >
          <h5>Profile</h5>
        </a>
      </li>
      <li class="nav-item">
        <a
          href="#account"
          class="nav-link tab-link"
          id="account-tab"
          data-toggle="tab"
          role="tab"
          aria-controls="account"
          aria-selected="false"
        >
          <h5>Account</h5>
        </a>
      </li>
      <li class="nav-item">
        <a
          href="#links"
          class="nav-link tab-link"
          id="links-tab"
          data-toggle="tab"
          role="tab"
          aria-controls="links"
          aria-selected="false"
        >
          <h5>Links</h5>
        </a>
      </li>
      <li class="nav-item">
        <a
          href="#security"
          class="nav-link tab-link"
          id="security-tab"
          data-toggle="tab"
          role="tab"
          aria-controls="links"
          aria-selected="false"
        >
          <h5>Security</h5>
        </a>
      </li>
    </ul>
    <!-- tab content here -->
    <div class="tab-content" id="settings-tabs-content">
      <!-- profile settings tab -->
      <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form action="" class="mt-5">
          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="name"><strong>Your Name</strong></label>
              <input class="form-control" type="text" name="name" id="name" value="" placeholder="Jon Champion" />
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label for="email"><strong>Your Email Address</strong></label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                value=""
                placeholder="example@gmail.com"
              />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="nick-name"><strong>Your Nick Name</strong></label>
              <input
                class="form-control"
                type="text"
                name="nickname"
                id="nick-name"
                value=""
                placeholder="Ninja"
              />
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label for="profile-image"><strong>Your Profile Image</strong></label>
              <input
                type="file"
                name="profileimage"
                id="profileimage"
                class="form-control-file"
                accept=".png,.jpg"
              />
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label for="bio"><strong>Your Short Bio</strong></label>
              <textarea name="bio" id="bio" class="form-control" rows="5" placeholder="type here.."></textarea>
            </div>
          </div>
          <!-- submit button -->
          <button type="submit" class="btn btn-lg col-sm-12 col-md-3 mt-5">Update Profile</button>
        </form>
      </div>
      <!-- account tab -->
      <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
        <h3 class="mt-5">coming soon...</h3>
      </div>
      <!-- links tab -->
      <div class="tab-pane fade" id="links" role="tabpanel" aria-labelledby="links-tab">
        <h3 class="mt-5">coming soon...</h3>
      </div>
      <!-- security tab -->
      <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
        <h3 class="mt-5">coming soon...</h3>
      </div>
    </div>
  </div>
@endsection