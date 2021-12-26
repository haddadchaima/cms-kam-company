@extends('layouts.admin')
@section('title', 'Profile')
@section('content')

<div class="container">
<div class="row titleapp">
<div class="col-md-7">
<span class="mt-4 pagetitle" >Profile</span>
</div>
<div class="col-md-5" style="text-align:right;">
<a id="pagetitleprimerlink" href="{{ route('home') }}">Dashbord /</a>
<a id="pagetitlesecondelink">Profile </a>
</div>
</div>
</br>

		   <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="{{ asset('profile_pic/admin/'.Auth::user()->image) }}" alt="User photo" width="150" height="160"> </div>
                      <h4 class="mb-0">{{ Auth()->user()->firstname }} {{ Auth()->user()->lastname }}</h4>
                      <span class="text-muted d-block mb-2">Admin</span>
                      <a href="#" class="editPhoto" >
                        <button  class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                             <i class="material-icons mr-1">person_add</i>Edit pic</button>
					            </a>
                    </div>



                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-4">
                        <div class="progress-wrapper">
                           <strong class="text-muted d-block mb-2" style="float:left">{{ Auth()->user()->email }}</strong>
                        </div>

                       </li>
                    </ul>

                  </div>
                </div>
              <div class="col-lg-8">
              <div class="row">
              <div class="col-lg-12 details">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <span style="float:left;"class="m-0">Account Details  </span>
					          <a href="#"  class="editDetails">
					            <button style="float:right;margin-top:-5px;" type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2" data-toggle="modal" data-target="#delux_view">
                         <i class="fa fa-edit"></i> Edit
				        	    </button>
					          </a>
					        </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="textblodfull">Name</label>
                              <label class="textnormalfull">{{ Auth()->user()->firstname }} {{ Auth()->user()->lastname }}</label>
								            </div>
								            <div class="form-group col-md-6">
                              <label class="textblodfull">Email</label>
                              <label class="textnormalfull">{{ Auth()->user()->email }}</label>
								            </div>
                          </div>
							            <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="textblodfull">Since</label>
                              <label class="textnormalfull">{{ Auth()->user()->created_at }}</label>
								            </div>
								            <div class="form-group col-md-6">
                              <label class="textblodfull">Birthday</label>
                              <label class="textnormalfull">{{ Auth()->user()->birthday }}</label>
								            </div>
                          </div>
							            <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="textblodfull">Country</label>
                              <label class="textnormalfull">{{ Auth()->user()->country }}</label>
								            </div>
								            <div class="form-group col-md-6">
                                <label class="textblodfull">City</label>
                                <label class="textnormalfull">{{ Auth()->user()->city }}</label>
								            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <a href="#"  class="history px-5">
                    <button style="float:left,padding:15px" type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2" data-toggle="modal" data-target="#delux_view">
                      <i class="fas fa-history"></i> History Login
                    </button>
                  </a>
                <div class="space"></div>
                <div class="space"></div>
                  <div class="row historyadmin" style="display: none">
                    <div class="col">
                      <ul class="list-group px-3"  >
                              @foreach ($historys as $history)
                                  <li class="list-group-item list-group-item-action">
                                      Last Login at <strong>{{ $history->last_login_at }}</strong>
                                      <span class="badge badge-primary badge-pill float-right">{{ $history->last_login_ip }}</span>
                                  </li>
                              @endforeach
                      </ul>
                    </div>
                    <div class="space"></div>
                    <a href="{{route('history.admin')}}"  style="text-align:center" >
                      <button style=",padding:15px" type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2" data-toggle="modal" data-target="#delux_view">
                        Show more <i class="fas fa-plus"></i>
                      </button>
                    </a>
                  </div>

                  <div class="space"></div>

                </div>


              </div>
              </div>
              <div class="col-lg-12 editdetailsprofil" style="display:none">
                <div class="row">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details
				          	  <a href="#" class="detailsProfil">
					              <button style="float:right;margin-top:-5px;" type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                         <i class="fa fa-user"></i>
					              </button>
					            </a>
                    </h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form action = "{{ route('admin.edit') }}" method = "post">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		                            <input type = 'hidden' name = 'updated_at' class="form-control" value = '<?php echo date('Y-m-d'); ?> <?php echo date('h:i:s'); ?>'/>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="feFirstName" class="textblodfull">First Name</label>
                                    <input type="text" class="form-control textnormalfull" id="feFirstName" name="firstname" value="{{Auth()->user()->firstname}} ">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="feLastName" class="textblodfull">Last Name</label>
                                    <input type="text" class="form-control textnormalfull" id="feLastName"  name="lastname" value="{{Auth()->user()->lastname}}">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="feEmailAddress" class="textblodfull">Email</label>
                                    <input type="email" class="form-control textnormalfull" id="feEmailAddress" name="email" value="{{Auth()->user()->email}}>">
								                  </div>
								                  <div class="form-group col-md-4">
                                    <label for="feEmailAddress" class="textblodfull">Country</label>
                                    <input type="text" class="form-control textnormalfull" id="feEmailAddress"  name="country" value="{{Auth()->user()->country}}">
								                  </div>
								                  <div class="form-group col-md-4">
                                    <label for="feEmailAddress" class="textblodfull">City</label>
                                    <input type="text" class="form-control textnormalfull" id="feEmailAddress"  name="city" value="{{Auth()->user()->city}}">
								                  </div>
							                    <div class="form-group col-md-4">
                                    <label for="feEmailAddress" class="textnormalfull">Birthday</label>
                                    <input type="date" class="form-control textnormalfull" id="feEmailAddress"  name="birthday" value="{{Auth()->user()->birthday}}">
							                  	</div>
								                </div>
                                <button type="submit" class="btn btn-accent">Update Account</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                </div>
              </div>
              <div class="col-lg-12 photoProfil" style="display: none">
                <div class="row">

                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Account Details
                                <a href="#" class="detailsProfil">
                                    <button style="float:right;margin-top:-5px;" type="button"
                                        class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2"><i
                                            class="fa fa-user"></i></button>
                                </a>
                            </h6>
                        </div>
                        <div class="update_photo">
                            <ul class="list-update-photo">
                                <li><a href="#" id="import" class="select">Importer des photo</a></li>
                                <li><a href="#" id="vos-photo">Vos Photo</a></li>
                            </ul>
                            <div class="importer">
                                <form id="myForm" action=" {{route('change.pic.admin')}}"  enctype="multipart/form-data">
                                    <input type="hidden" name="_token"
                                        value="<?php echo csrf_token(); ?>">

                                    <label for="upload_image">
                                        <img src="{{ asset('profile_pic/admin/imagefile.png') }}" id="uploaded_image"
                                            class="img-thumbnail" width="100px" height="100px" />
                                        <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                                    </label>
                                </form>
                                <br>
                                <br>
                                <br>
                                <p>Fait glisser une photo pour le profil ici</p>
                            </div>
                            <div class="photo_history" style="display: none">
                                <br>
                                <ul class="photo-list">
                                    @foreach ($images as $image)
                                        <li data-index="{{ $image->name }}">
                                            <img src="{{ asset('profile_pic/admin/' . $image->name) }}"   title="Photo" class="img-thumbnail" width="100px"
                                              height="100px">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
            </div>

</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="margin-left:10%;">
  <div class="modal-dialog modal-lg" role="document" style="width:70%;">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Changer votre photo de profil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="img-container">
                  <div class="row">
                      <div class="col-md-8">
                          <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                      </div>
                      <div class="col-md-4">
                          <div class="preview"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer float-left">
              <button type="button" class="btn btn-primary" id="crop">Definir comme photo de profil</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
      </div>
  </div>
</div>

@endsection
