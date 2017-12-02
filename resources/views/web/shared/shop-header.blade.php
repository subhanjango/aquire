
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ui-block">
<div class="top-header"></div>
<div class="top-header-thumb">
    <img style="height:250px" src="{{ !empty($user->cover_image) ? asset($user->cover_image) : asset('web/img/group-bottom.png') }}" alt="nature">
</div>
<div class="profile-section">
 <div class="control-block-button">
    

        <div class="btn btn-control bg-primary more">
            <svg class="olymp-settings-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-settings-icon')}}"></use></svg>

            <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                <li>
                    <a href="#" data-toggle="modal" data-target="#update-user-photo">Update Profile Photo</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Cover Photo</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="top-header-author">
    <a class="author-thumb">
        <img style="width:100%" src="{{ $user->image }}" alt="author">
    </a>
    <div class="author-content">
       {{ $user->name }}
        <div class="country">{{ !empty($location) ? $location : '' }}</div>
    </div>
</div>
</div>
</div>
</div>
</div>