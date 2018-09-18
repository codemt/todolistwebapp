<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Todo List App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : ' ' }}">
              <a class="nav-link" href="/todos">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::is('/todos/create') ? 'active' : ' ' }}">
              <a class="nav-link" href="/todos/create">Create Todo </a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
</nav>