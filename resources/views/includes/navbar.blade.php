@section('navbar')
<div class="wrapper d-flex align-items-stretch">
			<nav id="navbar" class="order-last" class="img">
				<div class="custom-menu">
					<button type="button" class="btn btn-primary">
	        </button>
        </div>
        <div class="">
		  		<h1><a href="index.html" class="logo">Pintores<span></span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{action('controlador@home')}}"><span class="fa fa-home mr-3"></span>Home</a>
	          </li>
	          <li>
	              <a href="{{action('controlador@vangogh')}}"><span class="fa fa-user mr-3"></span>Vincent Van Gogh</a>
	          </li>
              <li>
	              <a href="{{action('controlador@dali')}}"><span class="fa fa-user mr-3"></span>Salvador Dalí</a>
	          </li>
              <li>
	              <a href="{{action('controlador@picasso')}}"><span class="fa fa-user mr-3"></span>Pablo Picasso</a>
	          </li>
              <li>
	              <a href="{{action('controlador@davinci')}}"><span class="fa fa-user mr-3"></span>Leonardo DaVinci</a>
	          </li>
              <li>
	              <a href="{{action('controlador@miguela')}}"><span class="fa fa-user mr-3"></span>Miguel Ángel</a>
	          </li>

	        </ul>

	       

	        <div class="footer px-4">
	        	
	        </div>

	      </div>

    	</nav>
    @show