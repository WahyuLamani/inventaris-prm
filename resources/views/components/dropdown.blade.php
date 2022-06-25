<div class="dropdown">
    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <x-menu-icon/>
    </a>
  
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        @foreach($value as $d)
      <li><a class="dropdown-item" href="#">{{$d}}</a></li>
      @endforeach
    </ul>
  </div>