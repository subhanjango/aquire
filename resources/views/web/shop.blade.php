@extends('web.home')
@section('content')

<!-- Top Header -->

<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ui-block">
<div class="top-header">
<div class="top-header-thumb">
    <img src="{{asset('web/img/top-header1.jpg')}}" alt="nature">
</div>
<div class="profile-section">
    <div class="row">
        <div class="col-lg-5 col-md-5 ">
            <ul class="profile-menu">
                <li>
                    <a href="02-ProfilePage.html" class="active">Timeline</a>
                </li>
                <li>
                    <a href="05-ProfilePage-About.html">About</a>
                </li>
                <li>
                    <a href="06-ProfilePage.html">Friends</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-5 ml-auto col-md-5">
            <ul class="profile-menu">
                <li>
                    <a href="07-ProfilePage-Photos.html">Photos</a>
                </li>
                <li>
                    <a href="09-ProfilePage-Videos.html">Videos</a>
                </li>
                <li>
                    <div class="more">
                        <svg class="olymp-three-dots-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                        <ul class="more-dropdown more-with-triangle">
                            <li>
                                <a href="#">Report Profile</a>
                            </li>
                            <li>
                                <a href="#">Block Profile</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="control-block-button">
        <a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">
            <svg class="olymp-happy-face-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-happy-face-icon')}}"></use></svg>
        </a>

        <a href="#" class="btn btn-control bg-purple">
            <svg class="olymp-chat---messages-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-chat---messages-icon') }}"></use></svg>
        </a>

        <div class="btn btn-control bg-primary more">
            <svg class="olymp-settings-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-settings-icon')}}"></use></svg>

            <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                <li>
                    <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Profile Photo</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Header Photo</a>
                </li>
                <li>
                    <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="top-header-author">
    <a href="02-ProfilePage.html" class="author-thumb">
        <img src="{{ asset('web/img/author-main1.jpg') }}" alt="author">
    </a>
    <div class="author-content">
        <a href="02-ProfilePage.html" class="h4 author-name">James Spiegel</a>
        <div class="country">San Francisco, CA</div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- ... end Top Header -->



<div class="container">
<div class="row">

<!-- Main Content -->


<!-- ... end Main Content -->


<!-- Left Sidebar -->

<div class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">
<div class="ui-block">
<div class="ui-block-title">
<h6 class="title">Profile Intro</h6>
</div>
<div class="ui-block-content">
<ul class="widget w-personal-info item-block">
    <li>
        <span class="title">About Me:</span>
        <span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
    </li>
    <li>
        <span class="title">Favourite TV Shows:</span>
        <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
    </li>
    <li>
        <span class="title">Favourite Music Bands / Artists:</span>
        <span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
    </li>
</ul>

<div class="widget w-socials">
    <h6 class="title">Other Social Networks:</h6>
    <a href="#" class="social-item bg-facebook">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        Facebook
    </a>
    <a href="#" class="social-item bg-twitter">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        Twitter
    </a>
    <a href="#" class="social-item bg-dribbble">
        <i class="fa fa-dribbble" aria-hidden="true"></i>
        Dribbble
    </a>
</div>
</div>
</div>

<div class="ui-block">
<div class="ui-block-title">
<h6 class="title">James’s Badges</h6>
</div>
<div class="ui-block-content">

<ul class="widget w-badges">
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge1.png')}}" alt="author">
            <div class="label-avatar bg-primary">2</div>
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge4.png')}}" alt="author">
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge3.png')}}" alt="author">
            <div class="label-avatar bg-blue">4</div>
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge6.png')}}" alt="author">
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge11.png')}}" alt="author">
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge8.png')}}" alt="author">
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge10.png') }}" alt="author">
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge13.png')}}" alt="author">
            <div class="label-avatar bg-breez">2</div>
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge7.png')}}" alt="author">
        </a>
    </li>
    <li>
        <a href="24-CommunityBadges.html">
            <img src="{{asset('web/img/badge12.png')}}" alt="author">
        </a>
    </li>
</ul>

</div>
</div>
</div>

<!-- ... end Left Sidebar -->


<!-- Right Sidebar -->

<div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
<div class="ui-block">
<div class="ui-block-title">
<h6 class="title">Last Photos</h6>
</div>
<div class="ui-block-content">
<ul class="widget w-last-photo js-zoom-gallery">
    <li>
        <a href="img/last-photo10-large.jpg">
            <img src="{{asset('web/img/last-photo10-large.jpg')}}" alt="photo">
        </a>
    </li>
    <li>
        <a href="img/last-phot11-large.jpg">
            <img src="{{asset('web/img/last-phot11-large.jpg')}}" alt="photo">
        </a>
    </li>
    <li>
        <a href="img/last-phot12-large.jpg">
            <img src="{{asset('web/img/last-phot12-large.jpg')}}" alt="photo">
        </a>
    </li>
    <li>
        <a href="img/last-phot13-large.jpg">
            <img src="{{asset('web/img/last-phot13-large.jpg')}}" alt="photo">
        </a>
    </li>
    <li>
        <a href="img/last-phot14-large.jpg">
            <img src="{{asset('web/img/last-phot14-large.jpg')}}" alt="photo">
        </a>
    </li>
    <li>
        <a href="img/last-phot15-large.jpg">
            <img src="img/last-phot15-large.jpg" alt="photo">
        </a>
    </li>
    <li>
        <a href="img/last-phot16-large.jpg">
            <img src="img/last-phot16-large.jpg" alt="photo">
        </a>
    </li>
    <li>
        <a href="img/last-phot17-large.jpg">
            <img src="img/last-phot17-large.jpg" alt="photo">
        </a>
    </li>
    <li>
        <a href="img/last-phot18-large.jpg">
            <img src="img/last-phot18-large.jpg" alt="photo">
        </a>
    </li>
</ul>
</div>
</div>

<div class="ui-block">
<div class="ui-block-title">
<h6 class="title">Blog Posts</h6>
</div>
<ul class="widget w-blog-posts">
<li>
    <article class="hentry post">

        <a href="#" class="h4">My Perfect Vacations in South America and Europe</a>

        <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>

        <div class="post__date">
            <time class="published" datetime="2017-03-24T18:18">
                7 hours ago
            </time>
        </div>

    </article>
</li>
<li>
    <article class="hentry post">

        <a href="#" class="h4">The Big Experience of Travelling Alone</a>

        <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>

        <div class="post__date">
            <time class="published" datetime="2017-03-24T18:18">
                March 18th, at 6:52pm
            </time>
        </div>

    </article>
</li>
</ul>
</div>

<div class="ui-block">
<div class="ui-block-title">
<h6 class="title">Friends (86)</h6>
</div>
<div class="ui-block-content">
<ul class="widget w-faved-page js-zoom-gallery">
    <li>
        <a href="#">
            <img src="img/avatar38-sm.jpg" alt="author">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar24-sm.jpg" alt="user">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar36-sm.jpg" alt="author">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar35-sm.jpg" alt="user">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar34-sm.jpg" alt="author">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar33-sm.jpg" alt="author">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar32-sm.jpg" alt="user">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar31-sm.jpg" alt="author">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar30-sm.jpg" alt="author">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar29-sm.jpg" alt="user">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar28-sm.jpg" alt="user">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar27-sm.jpg" alt="user">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar26-sm.jpg" alt="user">
        </a>
    </li>
    <li>
        <a href="#">
            <img src="img/avatar25-sm.jpg" alt="user">
        </a>
    </li>
    <li class="all-users">
        <a href="#">+74</a>
    </li>
</ul>
</div>
</div>

<div class="ui-block">
<div class="ui-block-title">
<h6 class="title">Favourite Pages</h6>
</div>

<ul class="widget w-friend-pages-added notification-list friend-requests">
<li class="inline-items">
    <div class="author-thumb">
        <img src="img/avatar41-sm.jpg" alt="author">
    </div>
    <div class="notification-event">
        <a href="#" class="h6 notification-friend">The Marina Bar</a>
        <span class="chat-message-item">Restaurant / Bar</span>
    </div>
    <span class="notification-icon" data-toggle="tooltip" data-placement="top"   data-original-title="ADD TO YOUR FAVS">
        <a href="#">
            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
        </a>
    </span>

</li>

<li class="inline-items">
    <div class="author-thumb">
        <img src="img/avatar42-sm.jpg" alt="author">
    </div>
    <div class="notification-event">
        <a href="#" class="h6 notification-friend">Tapronus Rock</a>
        <span class="chat-message-item">Rock Band</span>
    </div>
    <span class="notification-icon" data-toggle="tooltip" data-placement="top"   data-original-title="ADD TO YOUR FAVS">
        <a href="#">
            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
        </a>
    </span>

</li>

<li class="inline-items">
    <div class="author-thumb">
        <img src="img/avatar43-sm.jpg" alt="author">
    </div>
    <div class="notification-event">
        <a href="#" class="h6 notification-friend">Pixel Digital Design</a>
        <span class="chat-message-item">Company</span>
    </div>
    <span class="notification-icon" data-toggle="tooltip" data-placement="top"   data-original-title="ADD TO YOUR FAVS">
        <a href="#">
            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
        </a>
    </span>

</li>

<li class="inline-items">
    <div class="author-thumb">
        <img src="img/avatar44-sm.jpg" alt="author">
    </div>
    <div class="notification-event">
        <a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
        <span class="chat-message-item">Clothing Store</span>
    </div>
    <span class="notification-icon" data-toggle="tooltip" data-placement="top"   data-original-title="ADD TO YOUR FAVS">
        <a href="#">
            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
        </a>
    </span>

</li>

<li class="inline-items">
    <div class="author-thumb">
        <img src="img/avatar45-sm.jpg" alt="author">
    </div>
    <div class="notification-event">
        <a href="#" class="h6 notification-friend">Crimson Agency</a>
        <span class="chat-message-item">Company</span>
    </div>
    <span class="notification-icon" data-toggle="tooltip" data-placement="top"   data-original-title="ADD TO YOUR FAVS">
        <a href="#">
            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
        </a>
    </span>
</li>

<li class="inline-items">
    <div class="author-thumb">
        <img src="img/avatar46-sm.jpg" alt="author">
    </div>
    <div class="notification-event">
        <a href="#" class="h6 notification-friend">Mannequin Angel</a>
        <span class="chat-message-item">Clothing Store</span>
    </div>
    <span class="notification-icon" data-toggle="tooltip" data-placement="top"   data-original-title="ADD TO YOUR FAVS">
        <a href="#">
            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
        </a>
    </span>
</li>

</ul>

</div>

<div class="ui-block">
<div class="ui-block-title">
<h6 class="title">James's Poll</h6>
</div>
<div class="ui-block-content">
<ul class="widget w-pool">
    <li>
        <p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
    </li>

    <li>
        <div class="skills-item">
            <div class="skills-item-info">
                <span class="skills-item-title">

                    <span class="radio">
                        <label>
                            <input type="radio" name="optionsRadios">
                        Thomas Bale
                        </label>
                    </span>
                </span>
                <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span><span class="units">62%</span></span>
            </div>
            <div class="skills-item-meter">
                <span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
            </div>

            <div class="counter-friends">12 friends voted for this</div>

            <ul class="friends-harmonic">
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic1.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic2.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic3.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic4.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic5.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic6.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic7.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic8.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic9.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#" class="all-users">+3</a>
                </li>
            </ul>

        </div>
    </li>

    <li>
        <div class="skills-item">
            <div class="skills-item-info">
                <span class="skills-item-title">

                    <span class="radio">
                        <label>
                            <input type="radio" name="optionsRadios">
                        Ben Robertson
                        </label>
                    </span>
                </span>
                <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span><span class="units">27%</span></span>
            </div>
            <div class="skills-item-meter">
                <span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
            </div>
            <div class="counter-friends">7 friends voted for this</div>

            <ul class="friends-harmonic">
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic7.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic8.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic9.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic10.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic11.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic12.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic13.jpg" alt="friend">
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li>
        <div class="skills-item">
            <div class="skills-item-info">
                <span class="skills-item-title">
                    <span class="radio">
                        <label>
                            <input type="radio" name="optionsRadios">
                        Michael Streiton
                        </label>
                    </span>
                </span>
                <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span><span class="units">11%</span></span>
            </div>
            <div class="skills-item-meter">
                <span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
            </div>

            <div class="counter-friends">2 people voted for this</div>

            <ul class="friends-harmonic">
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic14.jpg" alt="friend">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/friend-harmonic15.jpg" alt="friend">
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>
<a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote Now!</a>
</div>
</div>
</div>

<!-- ... end Right Sidebar -->

</div>
</div>


<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
<div class="modal-dialog ui-block window-popup update-header-photo">
<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>

<div class="ui-block-title">
<h6 class="title">Update Header Photo</h6>
</div>

<a href="#" class="upload-photo-item">
<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>

<h6>Upload Photo</h6>
<span>Browse your computer.</span>
</a>

<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

<svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>

<h6>Choose from My Photos</h6>
<span>Choose from your uploaded photos</span>
</a>
</div>
</div>


<!-- ... end Window-popup Update Header Photo -->


<!-- Window-popup Choose from my Photo -->
<div class="modal fade" id="choose-from-my-photo">
<div class="modal-dialog ui-block window-popup choose-from-my-photo">
<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>

<div class="ui-block-title">
<h6 class="title">Choose from My Photos</h6>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
<svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
<svg class="olymp-albums-icon"><use xlink:href="icons/icons.svg#olymp-albums-icon"></use></svg>
</a>
</li>
</ul>
</div>


<div class="ui-block-content">
<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo1.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo2.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo3.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>

<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo4.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo5.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo6.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>

<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo7.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo8.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<div class="radio">
    <label class="custom-radio">
        <img src="img/choose-photo9.jpg" alt="photo">
        <input type="radio" name="optionsRadios">
    </label>
</div>
</div>


<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

</div>
<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

<div class="choose-photo-item" data-mh="choose-item">
<figure>
    <img src="img/choose-photo10.jpg" alt="photo">
    <figcaption>
        <a href="#">South America Vacations</a>
        <span>Last Added: 2 hours ago</span>
    </figcaption>
</figure>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<figure>
    <img src="img/choose-photo11.jpg" alt="photo">
    <figcaption>
        <a href="#">Photoshoot Summer 2016</a>
        <span>Last Added: 5 weeks ago</span>
    </figcaption>
</figure>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<figure>
    <img src="img/choose-photo12.jpg" alt="photo">
    <figcaption>
        <a href="#">Amazing Street Food</a>
        <span>Last Added: 6 mins ago</span>
    </figcaption>
</figure>
</div>

<div class="choose-photo-item" data-mh="choose-item">
<figure>
    <img src="img/choose-photo13.jpg" alt="photo">
    <figcaption>
        <a href="#">Graffity & Street Art</a>
        <span>Last Added: 16 hours ago</span>
    </figcaption>
</figure>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<figure>
    <img src="img/choose-photo14.jpg" alt="photo">
    <figcaption>
        <a href="#">Amazing Landscapes</a>
        <span>Last Added: 13 mins ago</span>
    </figcaption>
</figure>
</div>
<div class="choose-photo-item" data-mh="choose-item">
<figure>
    <img src="img/choose-photo15.jpg" alt="photo">
    <figcaption>
        <a href="#">The Majestic Canyon</a>
        <span>Last Added: 57 mins ago</span>
    </figcaption>
</figure>
</div>


<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
</div>
</div>
</div>

</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


<div class="window-popup playlist-popup">

<a href="" class="icon-close js-close-popup">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>

<table class="playlist-popup-table">

<thead>

<tr>

<th class="play">
PLAY
</th>

<th class="cover">
COVER
</th>

<th class="song-artist">
SONG AND ARTIST
</th>

<th class="album">
ALBUM
</th>

<th class="released">
RELEASED
</th>

<th class="duration">
DURATION
</th>

<th class="spotify">
GET IT ON SPOTIFY
</th>

<th class="remove">
REMOVE
</th>
</tr>

</thead>

<tbody>
<tr>
<td class="play">
<a href="#" class="play-icon">
<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
</a>
</td>
<td class="cover">
<div class="playlist-thumb">
<img src="img/playlist19.jpg" alt="thumb-composition">
</div>
</td>
<td class="song-artist">
<div class="composition">
<a href="#" class="composition-name">We Can Be Heroes</a>
<a href="#" class="composition-author">Jason Bowie</a>
</div>
</td>
<td class="album">
<a href="#" class="album-composition">Ziggy Firedust</a>
</td>
<td class="released">
<div class="release-year">2014</div>
</td>
<td class="duration">
<div class="composition-time">
<time class="published" datetime="2017-03-24T18:18">6:17</time>
</div>
</td>
<td class="spotify">
<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
</td>
<td class="remove">
<a href="#" class="remove-icon">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>
</td>
</tr>

<tr>
<td class="play">
<a href="#" class="play-icon">
<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
</a>
</td>
<td class="cover">
<div class="playlist-thumb">
<img src="img/playlist6.jpg" alt="thumb-composition">
</div>
</td>
<td class="song-artist">
<div class="composition">
<a href="#" class="composition-name">The Past Starts Slow and Ends</a>
<a href="#" class="composition-author">System of a Revenge</a>
</div>
</td>
<td class="album">
<a href="#" class="album-composition">Wonderize</a>
</td>
<td class="released">
<div class="release-year">2014</div>
</td>
<td class="duration">
<div class="composition-time">
<time class="published" datetime="2017-03-24T18:18">6:17</time>
</div>
</td>
<td class="spotify">
<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
</td>
<td class="remove">
<a href="#" class="remove-icon">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>
</td>
</tr>

<tr>
<td class="play">
<a href="#" class="play-icon">
<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
</a>
</td>
<td class="cover">
<div class="playlist-thumb">
<img src="img/playlist7.jpg" alt="thumb-composition">
</div>
</td>
<td class="song-artist">
<div class="composition">
<a href="#" class="composition-name">The Pretender</a>
<a href="#" class="composition-author">Kung Fighters</a>
</div>
</td>
<td class="album">
<a href="#" class="album-composition">Warping Lights</a>
</td>
<td class="released">
<div class="release-year">2014</div>
</td>
<td class="duration">
<div class="composition-time">
<time class="published" datetime="2017-03-24T18:18">6:17</time>
</div>
</td>
<td class="spotify">
<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
</td>
<td class="remove">
<a href="#" class="remove-icon">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>
</td>
</tr>

<tr>
<td class="play">
<a href="#" class="play-icon">
<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
</a>
</td>
<td class="cover">
<div class="playlist-thumb">
<img src="img/playlist8.jpg" alt="thumb-composition">
</div>
</td>
<td class="song-artist">
<div class="composition">
<a href="#" class="composition-name">Seven Nation Army</a>
<a href="#" class="composition-author">The Black Stripes</a>
</div>
</td>
<td class="album">
<a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
</td>
<td class="released">
<div class="release-year">2014</div>
</td>
<td class="duration">
<div class="composition-time">
<time class="published" datetime="2017-03-24T18:18">6:17</time>
</div>
</td>
<td class="spotify">
<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
</td>
<td class="remove">
<a href="#" class="remove-icon">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>
</td>
</tr>

<tr>
<td class="play">
<a href="#" class="play-icon">
<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
</a>
</td>
<td class="cover">
<div class="playlist-thumb">
<img src="img/playlist9.jpg" alt="thumb-composition">
</div>
</td>
<td class="song-artist">
<div class="composition">
<a href="#" class="composition-name">Leap of Faith</a>
<a href="#" class="composition-author">Eden Artifact</a>
</div>
</td>
<td class="album">
<a href="#" class="album-composition">The Assassins’s Soundtrack</a>
</td>
<td class="released">
<div class="release-year">2014</div>
</td>
<td class="duration">
<div class="composition-time">
<time class="published" datetime="2017-03-24T18:18">6:17</time>
</div>
</td>
<td class="spotify">
<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
</td>
<td class="remove">
<a href="#" class="remove-icon">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>
</td>
</tr>

<tr>
<td class="play">
<a href="#" class="play-icon">
<svg class="olymp-music-play-icon-big"><use xlink:href="icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
</a>
</td>
<td class="cover">
<div class="playlist-thumb">
<img src="img/playlist10.jpg" alt="thumb-composition">
</div>
</td>
<td class="song-artist">
<div class="composition">
<a href="#" class="composition-name">Killer Queen</a>
<a href="#" class="composition-author">Archiduke</a>
</div>
</td>
<td class="album">
<a href="#" class="album-composition ">News of the Universe</a>
</td>
<td class="released">
<div class="release-year">2014</div>
</td>
<td class="duration">
<div class="composition-time">
<time class="published" datetime="2017-03-24T18:18">6:17</time>
</div>
</td>
<td class="spotify">
<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
</td>
<td class="remove">
<a href="#" class="remove-icon">
<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
</a>
</td>
</tr>
</tbody>
</table>

<audio id="mediaplayer" data-showplaylist="true">
<source src="mp3/Twice.mp3" title="Track 1" data-poster="track1.png" type="audio/mpeg">
<source src="mp3/Twice.mp3" title="Track 2" data-poster="track2.png" type="audio/mpeg">
<source src="mp3/Twice.mp3" title="Track 3" data-poster="track3.png" type="audio/mpeg">
<source src="mp3/Twice.mp3" title="Track 4" data-poster="track4.png" type="audio/mpeg">
</audio>

</div>

<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive">
<div class="ui-block-title">
<span class="icon-status online"></span>
<h6 class="title" >Chat</h6>
<div class="more">
<svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
<svg class="olymp-little-delete js-chat-open"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
</div>
</div>
<div class="mCustomScrollbar">
<ul class="notification-list chat-message chat-message-field">
<li>
<div class="author-thumb">
<img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
</div>
<div class="notification-event">
<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
</div>
</li>

<li>
<div class="author-thumb">
<img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
</div>
<div class="notification-event">
<span class="chat-message-item">Don’t worry Mathilda!</span>
<span class="chat-message-item">I already bought everything</span>
<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
</div>
</li>

<li>
<div class="author-thumb">
<img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
</div>
<div class="notification-event">
<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
</div>
</li>
</ul>
</div>



</div>

@stop