<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">ADMINISTRADOR</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
           

            <li><a href="{{url('usuarios')}}">
				<i class='fa fa-user'></i> 
				<span>Usuarios</span>
				</a>
			</li>
            <li><a href="{{url('administradors')}}">
                <i class='fa fa-envelope'></i> 
                <span>Administradores</span>
                </a>
            </li>
			<li><a href="{{url('agencias')}}">
				<i class='fa fa-users'></i> 
				<span>Agencias</span>
				</a>
			</li>
        <li><a href="{{url('turistas')}}">
                <i class='fa fa-envelope'></i> 
                <span>Turistas</span>
                </a>
            </li>
          <li><a href="{{url('suscripcions')}}">
                <i class='fa fa-money'></i> 
                <span>Suscripciones</span>
                </a>
            </li>

            <li><a href="{{url('dispositivos')}}">
                <i class='fa fa-camera'></i> 
                <span>Productos</span>
                </a>
            </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu --> 

         <ul class="sidebar-menu" data-widget="tree">
            <li class="header">AGENCIAS</li>

                        <li><a href="{{url('categorias')}}">
                <i class='fa fa-user'></i> 
                <span>Categorias</span>
                </a>
            </li>
            
            <li><a href="{{url('paquetes')}}">
                <i class='fa fa-users'></i> 
                <span>Paquetes</span>
                </a>
            </li>

          <li><a href="{{url('guias')}}">
                <i class='fa fa-money'></i> 
                <span>Guias</span>
                </a>
            </li>

            <li><a href="{{url('promocions')}}">
                <i class='fa fa-camera'></i> 
                <span>Promociones</span>
                </a>
            </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
