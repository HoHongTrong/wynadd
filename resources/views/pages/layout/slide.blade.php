<!--========== SLIDER ==========-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <div class="container">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php $i = 0; ?>
      @foreach($slide as $sl)
        <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"
            @if($i == 0)
            class="active"
          @endif

        ></li>
        <?php $i++; ?>
      @endforeach
    </ol>
  </div>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $i = 0; ?>
    @foreach($slide as $sl)
    <div @if($i ==0)
         class="item active"
         @else
         class="item"
      @endif
    >
      <?php $i++; ?>
      <img class="img-responsive" src="upload/slide/{{$sl->Hinh}}" alt="{{$sl->noidung}}">
    </div>
      @endforeach

  </div>

</div>
<!--========== SLIDER ==========-->