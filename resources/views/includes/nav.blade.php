<nav class="navbar default-color">
           <div class="container-fluid">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a class="navbar-brand waves-effect waves-light" href="#">CSEA</a>
               </div>

               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                   <ul class="nav navbar-nav">
                       <li><a href="{{url('dashboard/editions')}}" class="waves-effect waves-light">Editions<span class="sr-only">(current)</span></a></li>
                       <li><a href="{{url('dashboard/photos')}}" class="waves-effect waves-light">Photos</a></li>
                       <li><a href="{{url('dashboard/password')}}" class="waves-effect waves-light">Password</a></li>
                       <li><a href="{{url('auth/logout')}}" class="waves-effect waves-light">Log Out</a></li>
                   </ul>

               </div>
           </div>
       </nav>
