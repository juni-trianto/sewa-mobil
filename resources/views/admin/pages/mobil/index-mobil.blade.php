<div class="container-fluid">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a @if ($page_sub_name == 'data-mobil')
          class="nav-link active"
          @else
          class="nav-link"
          @endif  aria-current="page" href="{{route('mobil')}}">Data Mobil</a>
        </li>
        <li class="nav-item">
          <a  @if ($page_sub_name == 'merk')
          class="nav-link active"
          @else
          class="nav-link"
          @endif href="{{route('mobil.merk')}}">Merk</a>
        </li>
        <li class="nav-item">
          <a  @if ($page_sub_name == 'model-mobil')
          class="nav-link active"
          @else
          class="nav-link"
          @endif href="{{route('mobil.model')}}">Model</a>
        </li>
      </ul>

      @include('admin.pages.'.$page_folder.'.'.$page_sub_name)
</div>